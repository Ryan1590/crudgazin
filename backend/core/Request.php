<?php
namespace core;

use src\Config;

class Request {

    public static function getUrl() {
        $url = filter_input(INPUT_GET, 'request');
        $url = !empty($url) ? str_replace(Config::BASE_DIR, '', $url) : $url;
        return '/'.$url;
    }

    public static function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}