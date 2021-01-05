<?php

namespace core;

class Config{

    public $server_name = "192.168.0.108";
    public $app_root = "/us_web_app/";
    public $root_path = "/mnt/hdd/projects/us_web_app";

    public $server_url;
    public $app_url;
    public $controllers_url;
    public $static_url;
    public $tpl_dir;
    public $classes_dir;
    public $controllers_dir;

    public $db_type = "mysql";
    public $db_server = "localhost";
    public $db_port = "3306";
    public $db_name = "uswebapp";
    public $db_charset = "utf8";
    public $db_user = "****";
    public $db_pass = "****";

    public $db_option = [
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ];

    public function __construct() {
        $this->server_url = "http://" . $this->server_name;
        $this->app_url = $this->server_url . $this->app_root;
        $this->controllers_url = $this->app_url . "app/controllers/";
        $this->controllers_dir = $this->root_path . "/app/controllers/";
        $this->classes_dir = $this->root_path . "/app/classes/";
        $this->static_url = $this->app_url . "static/";
        $this->tpl_dir = $this->root_path . "/app/templates/";
    }
}
