<?php

require_once dirname(__FILE__)."/CalcRequestData.class.php";
require_once $conf->root_path."/lib/Messages.class.php";
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

class CalcController {

    private $messages;
    private $calc_data;
    private $rate;

    public function __construct() {
        $this->messages = new Messages();
        $this->calc_data = new CalcRequestData();
        $this->rate = null;
    }

    public function initialize() {
        $this->get_params();
        $this->rate = $this->calculate_rate_value();
        $this->render_template();
    }

    private function get_params() {
        $this->calc_data->amount = (isset($_POST["amount"])) ? $_POST["amount"] : null;
        $this->calc_data->years = (isset($_POST["years"])) ? $_POST["years"] : null;;
        $this->calc_data->percentage = (isset($_POST["percentage"])) ? $_POST["percentage"] : null;;
    }

    // parameter validation
    private function validate_params() {
        if (! (isset($this->calc_data->amount) && isset($this->calc_data->years) && isset($this->calc_data->percentage))) {
            return false;
        }

        if ($this->calc_data->amount == "") $this->messages->add_error("Nie podano kwoty");
        if ($this->calc_data->years == "") $this->messages->add_error("Nie podano liczby lat");
        if ($this->calc_data->percentage == "") $this->messages->add_error("Nie podano oprocentowania");

        // if there are no errors apply more validation rules, if not - skip
        if ($this->messages->is_empty()) {
            if (!is_numeric($this->calc_data->amount)) $this->messages->add_error("Kwota nie jest liczbą całkowitą");
            if (!is_numeric($this->calc_data->years)) $this->messages->add_error("Liczba  lat nie jest liczbą całkowitą");
            // TODO - percentage should be float
            if (!is_numeric($this->calc_data->percentage)) $this->messages->add_error("Oprocentowanie nie jest liczbą całkowitą");
        }
        return $this->messages->is_empty();
    }

    private function calculate_rate_value(){
        if ($this->validate_params()) {
            $this->rate = $this->calc_data->amount / ($this->calc_data->years * 12);
            $interest = $this->calc_data->rate * $this->calc_data->percentage / 100;
            $this->rate += $interest;
            return $this->rate;
        }
        return null;
    }

    private function render_template() {
        global $conf;
        $smarty = new Smarty();
        $smarty -> assign("controllers_url", $conf->controllers_url);
        $smarty -> assign("static_url", $conf->static_url);
        $smarty -> assign("rate", $this->rate);
        $smarty -> assign("messages", $this->messages);
        $smarty -> display($conf->tpl_dir."credit_calc.tpl");
    }
}
