<?php

class Config{

    public $server_name = "192.168.0.108";
    public $app_root = "/us_web_app";
    public $root_path = "/mnt/hdd/projects/us_web_app";

    public $server_url;
    public $app_url;
    public $controllers_url;
    public $static_url;
    public $tpl_dir;
    public $classes_dir;
    public $controllers_dir;

    public function __construct() {
        $this->server_url = "http://" . $this->server_name;
        $this->app_url = $this->server_url . $this->app_root;
        $this->controllers_url = $this->app_url . "/controllers/";
        $this->controllers_dir = $this->root_path . "/controllers/";
        $this->classes_dir = $this->root_path . "/classes/";
        $this->static_url = $this->app_url . "/static/";
        $this->tpl_dir = $this->root_path . "/templates/";
    }
}
