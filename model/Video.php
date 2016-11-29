<?php

class Video
{
    private $width;
    private $height;
    private $controls = true;
    private $autoplay = false;
    private $loop = false;
    private $preload = 'none';
    private $poster;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return boolean
     */
    public function isControls()
    {
        return $this->controls;
    }

    /**
     * @param boolean $controls
     */
    public function setControls($controls)
    {
        $this->controls = $controls;
    }

    /**
     * @return boolean
     */
    public function isAutoplay()
    {
        return $this->autoplay;
    }

    /**
     * @param boolean $autoplay
     */
    public function setAutoplay($autoplay)
    {
        $this->autoplay = $autoplay;
    }

    /**
     * @return boolean
     */
    public function isLoop()
    {
        return $this->loop;
    }

    /**
     * @param boolean $loop
     */
    public function setLoop($loop)
    {
        $this->loop = $loop;
    }

    /**
     * @return string
     */
    public function getPreload()
    {
        return $this->preload;
    }

    /**
     * @param string $preload
     */
    public function setPreload($preload)
    {
        $this->preload = $preload;
    }

    /**
     * @return mixed
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * @param mixed $poster
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;
    }

}