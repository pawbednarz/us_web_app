<?php

class Config
{

    public $server_name = "192.168.8.165";
    public $app_root = "/us_web_app";
    public $root_path = "/mnt/hdd/projects/us_web_app";

    public function __construct() {
        $this->server_url = "https://" . $this->server_name;
        $this->app_url = $this->server_url . $this->app_root;
        $this->views_url = $this->root_path . "/views/";
        $this->controllers_url = $this->app_url . "/controllers/";
        $this->controllers_dir = $this->root_path . "/controllers/";
        $this->static_url = $this->app_url . "/static/";
        $this->tpl_url = $this->app_url . "/templates/";
        $this->tpl_dir = $this->root_path . "/templates/";
    }
}
