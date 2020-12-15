<?php
// static method and properties
class User
{
    public $name;
    public $age;
    public static $minPassLength = 6;


    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }
}

//we dont need to instanciate
$password = 'hello';
if (User::validatePass($password)) {
    echo 'Password Valid';
} else {
    echo 'Passowrd Not valid';
}
