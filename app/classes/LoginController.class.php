<?php

namespace app\classes;

use app\model\User;

class LoginController {

    function login() {
        if ($this->validateLoginData($_POST["login"], $_POST["password"])) {
            header("Location: " . getConfig()->app_url);
        } else {
            $this->renderLoginPage();
        }
    }

    function logout() {
        session_destroy();
        getMessages()->add_info("Pomyślnie wylogowano z aplikacji");
        $this->renderLoginPage();
    }

    function validateLoginData($login, $password) {

        if (!isset($login) && !isset($password)) {
            return false;
        }

        if (!isset($login)) {
            getMessages()->add_error("Nie podano loginu");
        }

        if (!isset($password)) {
            getMessages()->add_error("Nie podano hasła");
        }

        if (getMessages()->is_error_empty()) {
            if ($login == "admin" && $password == "admin") {
                $user = new User($login, $password, "administrator");
                $_SESSION["username"] = $user->login;
                $_SESSION["role"] = $user->role;
            } else {
                getMessages()->add_error("Niepoprawny login lub hasło");
            }
        }
        return getMessages()->is_error_empty();
    }

    function renderLoginPage() {
        getSmarty() -> display("login.tpl");
    }
}
