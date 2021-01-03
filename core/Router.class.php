<?php

namespace core;
use Exception;

class Router {
    public $action = null;
    public $routes = array();
    private $default = null;
    private $login = 'login';

    public function setAction($action) {
        $this->action = $action;
    }

    public function addRoute($action, $namespace, $controller, $roles = null) {
         $this->routes[$action] = new Route($namespace, $controller, $action, $roles);
    }

    public function setDefaultRoute($route) {
        $this->default = $route;
    }

    public function setLoginRoute($route) {
        $this->login = $route;
    }

    function control($namespace, $controller, $method, $roles = null) {
        if (isset($roles)) {
            if (!in_array($_SESSION["role"], $roles)) {
                header("Location: " . getConfig()->app_root . "?page=login");
                exit;
            }
        }
        if (empty($namespace)) {
            $controller = "app\\classes\\".$controller;
        } else {
            $controller = $namespace . "\\" . $controller;
        }
        include_once getConfig()->root_path . DIRECTORY_SEPARATOR . $controller . ".class.php";
        $ctrl = new $controller;
        if (is_callable(array($ctrl, $method))) {
            $ctrl->$method();
        }
        exit;
    }

    public function go() {
        if (isset($this->routes[$this->action])) {
            $r = $this->routes[$this->action];
            $this->control($r->namespace, $r->controller, $r->method, $r->roles);
        } else {
            if (isset($this->default) && isset($this->routes[$this->default])) {
                $r = $this->routes[$this->default];
                $this->control($r->namespace, $r->controller, $r->method, $r->roles);
            } else {
                throw new Exception('Route for "' . $this->action . '" is not defined.');
            }
        }
    }
}
