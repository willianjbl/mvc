<?php

namespace core;

class Request
{
    public static function getUrl(): string
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace(Config::BASE_DIR, '', $url);
        return '/' . $url;
    }

    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
