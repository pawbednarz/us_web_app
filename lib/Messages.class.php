<?php

class Messages
{
    private $errors = array();
    private $num = 0;

    public function addError($error_message) {
        $this -> errors[] = $error_message;
    }

    public function isEmpty() {
        return $this -> num == 0;
    }

    public function getErrors() {
        return $this -> errors;
    }
}
