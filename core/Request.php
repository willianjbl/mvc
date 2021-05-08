<?php

namespace core;

class Request
{
    public static function getUrl(): string
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace(BASE_DIR, '', $url);
        return '/' . $url;
    }

    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function getBaseUrl(): string
    {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_PORT'] !== '80')
            $base .= ':' . $_SERVER['SERVER_PORT'];
        $base .= BASE_DIR;
        
        return $base;
    }
}
