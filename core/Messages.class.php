<?php

namespace core;

class Messages
{
    private $errors = array();
    private $info = array();

    public function add_error($error_message) {
        $this -> errors[] = $error_message;
    }

    public function add_info($info_message) {
        $this->info[] = $info_message;
    }

    public function is_error_empty() {
        return count($this->errors) == 0;
    }

    public function is_info_empty() {
        return count($this->info) == 0;
    }

    public function get_errors() {
        return $this -> errors;
    }

    public function get_info() {
        return $this -> errors;
    }
}
