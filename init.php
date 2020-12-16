<?php
require_once "core/Config.class.php";
$conf = new core\Config();

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
require_once "core/functions.php";
session_start();
