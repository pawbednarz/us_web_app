<?php

require_once _ROOT_PATH."lib/Messages.class.php";

class Controller {

    private $messages;

    public function __construct() {
        $this -> messages = new Messages();
    }
}
