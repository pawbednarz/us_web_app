<?php
// run new session, or get existing one
session_start();

$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// check if any role exist (then user is logged in)
if (empty($role)) {
    // if there is no role set - render login page
    include $conf->controllers_dir.'security/login.php';
    // stop scripts execution
    exit();
}
?>
