<?php

/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 19/05/17
 * Time: 11.23
 */
class Config
{
    /**
     * @return array
     */
    public static function getDefault()
    {
        //return $ini_array = parse_ini_file("conf.ini");
        return array(
            'customer' => 'customer',
            'user' => 'user',
            'password' => 'password',
            'senderAccIdItaly' => '12345678',
            'senderAccIdWorld' => '12345678'
        );
    }

    public static function testError()
    {
        ini_set('display_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(-1);
    }
}