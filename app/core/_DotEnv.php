<?php
namespace app\core;

use FileCache;
/**
 * DotEnv
 * Eg : use app\lib\DotEnv;
 *      (new DotEnv(__DIR__ . '/.env'))->load();
 *      echo getenv('APP_ENV');
 *      echo getenv('DATABASE_DNS');
 */

class DotEnv
{
    const ACTIVE_ENV = false;
    const CACHE = false;
    const ENV_CACHE_NAME = 'env_cache';
    /**
     * Convert true and false to booleans, instead of:
     *
     * VARIABLE=false -> ['VARIABLE' => 'false']
     *
     * it will be
     *
     * VARIABLE=false -> ['VARIABLE' => false]
     *
     * default = true
     */
    const PROCESS_BOOLEANS = 'PROCESS_BOOLEANS';

    /**
     * The directory where the .env file can be located.
     *
     * @var string
     */
    protected $path;
    protected $cache;
    /**
     * Configure the options on which the parsed will act
     *
     * @var array
     */
    protected $options = [];

    public function __construct(string $path, array $options = [])
    {
        if (!file_exists($path)) {
            throw new \InvalidArgumentException(sprintf('%s does not exist', $path));
        }

        $this->path = $path;
        $this->cache = new FileCache();
        $this->processOptions($options);
    }

    private function processOptions(array $options) : void
    {
        $this->options = array_merge([
            static::PROCESS_BOOLEANS => true
        ], $options);
    }

    /**
     * Processes the $path of the instances and parses the values into $_SERVER and $_ENV, also returns all the data that has been read.
     * Skips empty and commented lines.
     */
    public function load() : void
    {
        $isCache = $this->cache->get(static::ENV_CACHE_NAME);
        if($isCache === true){
            goto next;
        };

        if (!is_readable($this->path)) {
            throw new \RuntimeException(sprintf('%s file is not readable', $this->path));
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {

            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = $this->processValue($value);

            // if ((!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV )) || static::ACTIVE_ENV == false) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            // }
        }

        $this->cache->save(static::ENV_CACHE_NAME, true, 60*60*24*30);
        next:
    }

    private function processValue(string $value) {
        $trimmedValue = trim($value);

        if (!empty($this->options[static::PROCESS_BOOLEANS])) {
            $loweredValue = strtolower($trimmedValue);

            $isBoolean = in_array($loweredValue, ['true', 'false'], true);

            if ($isBoolean) {
                return $loweredValue === 'true';
            }
        }

        return $trimmedValue;
    }
}