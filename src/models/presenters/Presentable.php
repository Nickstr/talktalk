<?php

trait Presentable
{
    public static $presenter;

    public function getPresenter()
    {
        if (static::$presenter) {
            return static::$presenter;
        }

        if (class_exists($this->getPresenterClass())) {
            $class = $this->getPresenterClass();
            static::$presenter = new $class($this);
        } else {
            static::$presenter = null;
        }
     
        return static::$presenter;
    }

    public function getPresenterClass()
    {
        return get_called_class() . 'Presenter';
    }
}