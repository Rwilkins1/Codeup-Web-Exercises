<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function notempty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '') {
            return true;
        }
    }


    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return "true" . PHP_EOL;
        } else {
            return "false" . PHP_EOL;
        }
    }

    public static function getString($key)
    {
        $input = self::get($key);
        if (!is_string($input)) {
            throw new Exception('Your input must be a string!');
        } else {
            return $input;
        }
    }

    public static function getNumber($key)
    {
        $input = self::get($key);
        if(!is_numeric($input)) {
            throw new Exception('Your input must be numeric!');
        } else {
            return $input;
        }
    }
    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if(isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        } else if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        } else {
            return 0;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
