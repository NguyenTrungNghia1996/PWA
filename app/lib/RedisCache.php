<?php

namespace lib\RedisCache;

use Redis;

class RedisCache
{
    /** @var boolean */
    public $working = true;

    /** @var object */
    private $redis;

    /** @var array */
    private $config = [
        "host" => "127.0.0.1",
        "port" => "6379",
        "prefix" => "php-cache:",
        "default_ttl" => 3600
    ];

    public function __construct(array $config = [])
    {
        if (!empty($config["host"])) {
            $this->config["host"] = $config["host"];
        }
        if (!empty($config["port"])) {
            $this->config["port"] = $config["port"];
        }
        if (!empty($config["prefix"])) {
            $this->config["prefix"] = $config["prefix"];
        }
        if (!empty($config["default_ttl"])) {
            $this->config["default_ttl"] = $config["default_ttl"];
        }
        if (class_exists("Redis")) {
            try {
                $redis = new Redis;
                $redis->pconnect($this->config["host"], $this->config["port"]);
                $redis->setOption(\Redis::OPT_PREFIX, $this->config["prefix"]);
                $this->redis = $redis;
                return true;
            } catch (\RedisException $ex) {
                $this->working = false;
                return false;
            }
        } else {
            $this->working = false;
            return false;
        }
    }

    /**
     * @param string $key Key
     * @return bool
     * @throws \Exception
     * */
    public function keyIsGood(string $key)
    {
        if (preg_match("/[^A-z0-9_.-]+/", $key) === 1) {
            throw new \Exception("Bad Key Value:" . $key);
        } else {
            return true;
        }
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, $default = null)
    {
        if ($this->keyIsGood($key) && $this->working) {
            $value = $this->redis->get($key);
            if ($value !== false) {
                $value = \igbinary_unserialize($value);
                return $value;
            }
        }
        return $default;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @param int $ttl time in seconds to cache item
     * @return bool
     */
    public function set(string $key, $value, int $ttl = null)
    {
        if ($this->keyIsGood($key) && $this->working) {
            $value = \igbinary_serialize($value);
            $redis = $this->redis;
            if (empty($ttl)) {
                $ttl = $this->config["default_ttl"];
            }

            if ($redis->setEx($key, $ttl, $value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function delete(string $key)
    {
        if ($this->keyIsGood($key) && $this->working) {
            $this->redis->unlink($key);
            return true;
        }
        return false;
    }

    /** @return bool */
    public function clear()
    {
        $this->redis->unlink($this->keys('*'));
        return true;
    }

    /**
     * @param array $keys
     * @param mixed $default
     * @return mixed
     */
    public function getMultiple(array $keys, $default = null)
    {
        if ($this->working) {
            $keys = array_map(function ($key) {
                $this->keyIsGood($key);
                return $key;
            }, $keys);

            $values = $this->redis->mGet($keys);

            $key_count = count($keys);
            $key_value = [];

            for ($i = 0; $i < $key_count; $i++) {
                $value = $values[$i];

                if ($value === false) {
                    $value = $default;
                } else {
                    $value = \igbinary_unserialize($value);
                }

                $key_value[$keys[$i]] = $value;
            }
            return $key_value;
        }
        return false;
    }

    /**
     * @param array $keys
     * @param integer $ttl
     * @return bool
     */
    public function setMultiple(array $keys, int $ttl = null)
    {
        if ($this->working) {
            if (empty($ttl)) {
                $ttl = $this->config["default_ttl"];
            }
            $keys = array_walk($keys, fn ($value, $key, $ttl) => $this->set($key, $value, $ttl), $ttl);
            return true;
        }
        return false;
    }

    /**
     * @param array $keys
     * @return bool
     */
    public function deleteMultiple(array $keys)
    {
        if ($this->working) {
            $keys = array_map(function ($key) {
                $this->keyIsGood($key);
                return $key;
            }, $keys);
            $this->redis->unlink($keys);
            return true;
        }
        return false;
    }

    /**
     * @param string $key
     * @return boolean
     */
    public function has(string $key)
    {
        if ($this->keyIsGood($key) && $this->working) {
            if ($this->redis->ttl($key) !== -2) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string pattern
     * @return array
     */
    public function keys(string $pattern)
    {
        $keys = $this->redis->keys($pattern);
        return array_map(fn ($key) => str_replace($this->config["prefix"], "", $key), $keys);
    }
}