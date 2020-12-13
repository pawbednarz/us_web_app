<?php

namespace core;

class Messages
{
    private $errors = array();

    public function add_error($error_message) {
        $this -> errors[] = $error_message;
    }

    public function is_empty() {
        return count($this->errors) == 0;
    }

    public function get_errors() {
        return $this -> errors;
    }
}
