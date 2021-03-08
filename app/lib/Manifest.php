<?php


namespace app\lib;


class Manifest
{
    private $name;
    private $short_name;
    private $description;
    private $scope;
    private $icon_192;
    private $icon_512;
    private $start_url;
    private $background_color;
    private $theme_color;
    private $display;
    private $orientation;

    /**
     * Manifest constructor.
     * @param $name
     * @param $short_name
     * @param $description
     * @param $scope
     * @param $icon_192
     * @param $icon_512
     * @param $start_url
     * @param $background_color
     * @param $theme_color
     * @param $display
     * @param $orientation
     */
    public function __construct($name, $short_name, $description, $scope, $icon_192, $icon_512, $start_url, $background_color, $theme_color, $display, $orientation)
    {
        $this->name = $name;
        $this->short_name = $short_name;
        $this->description = $description;
        $this->scope = $scope;
        $this->icon_192 = $icon_192;
        $this->icon_512 = $icon_512;
        $this->start_url = $start_url;
        $this->background_color = $background_color;
        $this->theme_color = $theme_color;
        $this->display = $display;
        $this->orientation = $orientation;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * @param mixed $short_name
     */
    public function setShortName($short_name): void
    {
        $this->short_name = $short_name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param mixed $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getIcon192()
    {
        return $this->icon_192;
    }

    /**
     * @param mixed $icon_192
     */
    public function setIcon192($icon_192): void
    {
        $this->icon_192 = $icon_192;
    }

    /**
     * @return mixed
     */
    public function getIcon512()
    {
        return $this->icon_512;
    }

    /**
     * @param mixed $icon_512
     */
    public function setIcon512($icon_512): void
    {
        $this->icon_512 = $icon_512;
    }

    /**
     * @return mixed
     */
    public function getStartUrl()
    {
        return $this->start_url;
    }

    /**
     * @param mixed $start_url
     */
    public function setStartUrl($start_url): void
    {
        $this->start_url = $start_url;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor()
    {
        return $this->background_color;
    }

    /**
     * @param mixed $background_color
     */
    public function setBackgroundColor($background_color): void
    {
        $this->background_color = $background_color;
    }

    /**
     * @return mixed
     */
    public function getThemeColor()
    {
        return $this->theme_color;
    }

    /**
     * @param mixed $theme_color
     */
    public function setThemeColor($theme_color): void
    {
        $this->theme_color = $theme_color;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param mixed $display
     */
    public function setDisplay($display): void
    {
        $this->display = $display;
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param mixed $orientation
     */
    public function setOrientation($orientation): void
    {
        $this->orientation = $orientation;
    }

    }
