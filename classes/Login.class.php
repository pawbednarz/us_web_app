<?php
class Login {

    private $login;
    private $password;

    public function __construct($login, $password) {
        session_start();
        $this->login = $login;
        $this->password = $password;
    }

    public function set_role($role) {
            $_SESSION["role"] = $role;
    }
}
