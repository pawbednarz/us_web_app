<?php
class CalcRequest {

    public $amount;
    public $years;
    public $percentage;

    public function __construct($amount, $years, $percentage) {
        $this -> amount = $amount;
        $this -> years = $years;
        $this -> percentage = $percentage;
    }

}
