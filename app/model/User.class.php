<?php

namespace app\model;

class User {

    public $login;
    public $password;
    public $role;

    public function __construct($login, $password, $role) {
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
    }
}
