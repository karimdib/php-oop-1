<?php

require_once __DIR__ . '/Traits/Location.php';

class Users{
    public $name;
    public $surname;
    use Location;
    public function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }
}

class User extends Users{
}

$users = new Users(10, 20);
$user = new User(10, 10);

var_dump($user);