<?php

class fnc{
    var $name;

    public $fname;
    protected $username;
    public function computer_user($fname){
        return $fname;
    }
    public function user_age($fname,$yob){
        $user = $this->computer_user($fname);
        $age=2024-$yob;
        return $user. "is" . $age;
    }

    public function hash_password($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

}

