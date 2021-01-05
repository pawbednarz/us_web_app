<?php
require_once "core/Config.class.php";
$conf = new core\Config();

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function &getConfig() {
    global $conf;
    return $conf;
}

require_once 'core/Messages.class.php';
$messages = new core\Messages();

function &getMessages() {
    global $messages;
    return $messages;
}

$smarty = null;
function &getSmarty() {
    global $smarty;
    if (!isset($smarty)) {
        include_once getConfig()->root_path.'/lib/smarty/Smarty.class.php';
        $smarty = new Smarty();

        // assign config and messages to smarty object
        $smarty->assign('config', getConfig());
        $smarty->assign('messages', getMessages());
        $smarty->assign("user_role", $_SESSION["role"]);

        // define template locatization
        $smarty->setTemplateDir(array(
            'one' => getConfig()->tpl_dir,
            'two' => getConfig()->tpl_dir.'helpers'
        ));
    }
    return $smarty;
}

require_once 'core/ClassLoader.class.php';
$loader = new core\ClassLoader();
function &getLoader() {
    global $loader;
    return $loader;
}

require_once 'core/Route.class.php';
$router = new \core\Router();
function &getRouter() {
    global $router;
    return $router;
}

require_once 'lib/medoo/Medoo.class.php';
$db = null;
function &getDb() {
    global $conf, $db;
    if (!isset($db)) {
        $db = new \lib\medoo\Medoo([
            'database_type' => $conf->db_type,
            'server' => $conf->db_server,
            'database_name' => $conf->db_name,
            'username' => $conf->db_user,
            'password' => $conf->db_pass,
            'charset' => $conf->db_charset,
            'port' => $conf->db_port,
            'option' => $conf->db_option
        ]);
    }
    return $db;
}

require_once "core/functions.php";
session_start();

$router->setAction($_GET["page"]);
