<?php
class DateRangeException extends Exception { }
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

    public static function getString($key, $min = NULL, $max = NULL)
    {
        $input = self::get($key);
        if (!is_string($input)) {
            throw new DomainException('Domain Exception: Your input must be a string!');
        } else if(is_numeric($input)) {
            throw new DomainException('Domain Exception: Your input must be a string!');
        } else if (empty($input)) {
            throw new OutOfRangeException("Out of Range Exception: An input is missing!");
        } else if (strlen($input) < $min) {
            throw new LengthException("Length Exception: Your string is too short");
        } else if (strlen($input) > $max && $max > 0) {
            throw new LengthException("Length Exception: You string is too long");
        } else {
            return $input;
        }
    }

    public static function getNumber($key, $min = NULL, $max = NULL)
    {
        $input = self::get($key);
        if(!is_numeric($input) && !is_float($input)) {
            throw new DomainException('Domain Exception: Your input must be numeric!');
        } else if (empty($input)) {
            throw new OutOfRangeException("Out of Range Exception: An input is missing!");
        } else if(($min != NULL && !is_numeric($min)) || ($max != NULL && !is_numeric($max))) {
            throw new InvalidArgumentException("Invalid Argument: Your min and max must both be numbers");
        } else if ($input < $min) {
            throw new RangeException("Out of Specified Range: Your input is too small");
        } else if ($input > $max && $max > 0) {
            throw new RangeException("Out of Specified Range: Your input is too large");
        } else {
            return $input;
        }
    }   

    public static function getDate($key, $min = NULL , $max = NULL)
    {

        $input = self::get($key);
        $input_time = date("Y-m-d", strtotime($input));
        if(!strtotime($input)) {
            throw new Exception('Invalid Date: You need to enter a valid date');
        } else if (empty($input)) {
            throw new OutOfRangeException("Out of Range Exception: You are missing an input!");
        } else if ($input_time < $min) {
            throw new DateRangeException('Out of Specified Range: Your date is too early');
        } else if ($input_time > $max) {
            throw new DateRangeException('Out of Specified Range: Your date is too late');
        } else {
            return $input_time;
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
