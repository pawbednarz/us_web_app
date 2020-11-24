<?php
class AccessControl {

    private $role;
    private $controllers_dir;

    public function __construct() {
        session_start();
        $this->role = isset($_SESSION["role"]) ? $_SESSION["role"] : "";
        $this->controllers_dir = "/mnt/hdd/projects/us_web_app/controllers/";
    }

    public function check_user_login() {
        // check if any role exist (then user is logged in)
        if (empty($this->role)) {
            // if there is no role set - render login page
            include $this->controllers_dir.'security/login.php';
            // stop scripts execution
            //exit();
        }
    }
}
