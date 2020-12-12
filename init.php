<?php
require_once "core/Config.class.php";
$conf = new Config();

function &getConfig() {
    global $conf;
    return $conf;
}

require_once 'core/Messages.class.php';
$messages = new Messages();

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
            'one' => getConfig()->root_path.'/templates'
        ));
    }
    return $smarty;
}
