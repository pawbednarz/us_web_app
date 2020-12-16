<?php

namespace app\classes;

use app\classes\CalcRequestData;

class CalcController {

    private $calc_data;
    private $rate;

    public function __construct() {
        $this->calc_data = new CalcRequestData();
        $this->rate = null;
    }

    public function calc_and_render_template() {
        $params = $this->get_params();
        $this->calc_data->amount = $params[0];
        $this->calc_data->years = $params[1];
        $this->calc_data->percentage = $params[2];
        $this->rate = $this->calculate_rate_value();
        $this->render_template();
    }

    private function get_params() {
        $arr = array();
        $arr[] = (isset($_POST["amount"])) ? $_POST["amount"] : null;
        $arr[] = (isset($_POST["years"])) ? $_POST["years"] : null;
        $arr[] = (isset($_POST["percentage"])) ? $_POST["percentage"] : null;
        return $arr;
    }

    // parameter validation
    private function validate_params() {
        if (! (isset($this->calc_data->amount) && isset($this->calc_data->years) && isset($this->calc_data->percentage))) {
            return false;
        }

        if ($this->calc_data->amount == "") getMessages()->add_error("Nie podano kwoty");
        if ($this->calc_data->years == "") getMessages()->add_error("Nie podano liczby lat");
        if ($this->calc_data->percentage == "") getMessages()->add_error("Nie podano oprocentowania");

        // if there are no errors apply more validation rules, if not - skip
        if (getMessages()->is_error_empty()) {
            if (!is_numeric($this->calc_data->amount)) getMessages()->add_error("Kwota nie jest liczbą całkowitą");
            if (!is_numeric($this->calc_data->years)) getMessages()->add_error("Liczba  lat nie jest liczbą całkowitą");
            // TODO - percentage should be float
            if (!is_numeric($this->calc_data->percentage)) getMessages()->add_error("Oprocentowanie nie jest liczbą całkowitą");
        }
        return getMessages()->is_error_empty();
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

    public function render_template() {
        getSmarty() -> assign('rate', $this->rate);
        getSmarty() -> display("credit_calc.tpl");
    }
}
