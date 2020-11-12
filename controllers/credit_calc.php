<?php
// load config
require_once dirname(__FILE__).'/../config.php';
include _CONTROLLERS_DIR.'security/access_control.php';

// parameter validation
function validate_params($amount, $years, $percentage, &$messages) {
    if (! (isset($amount) && isset($years) && isset($percentage))) {
        return false;
    }
    
    if ($amount == "") $messages[] = "Nie podano kwoty";
    if ($years == "") $messages[] = "Nie podano liczby lat";
    if ($percentage == "") $messages[] = "Nie podano oprocentowania";
    
    // if there are no errors apply more validation rules, if not - skip
    if (empty($messages)) {
        if (!is_numeric($amount)) $messages[] = "Kwota nie jest liczbą całkowitą";
        if (!is_numeric($years)) $messages[] = "Liczba  lat nie jest liczbą całkowitą";
        // TODO - percentage should be float
        if (!is_numeric($percentage)) $messages[] = "Oprocentowanie nie jest liczbą całkowitą";
    }

    if (count($messages) != 0) return false;
    return true;
}

// if there are still no errors - calculate loan rate
function get_rate_value($amount, $years, $percentage, &$rate, &$messages){
    $rate = $amount / ($years * 12);
    $interest = $rate * $percentage / 100;
    $rate += $interest;
}

// init needed variables
$amount = isset($_REQUEST["amount"]) ? $_REQUEST["amount"] : null;
$years = isset($_REQUEST["years"]) ? $_REQUEST["years"] : null;
$percentage = isset($_REQUEST["percentage"]) ? $_REQUEST["percentage"] : null;
$messages = array();
$rate = null;

// if data is properly formatted
if (validate_params($amount, $years, $percentage, $messages)) {
    // do the calculations
    get_rate_value($amount, $years, $percentage, $rate, $messages);
}

// render view (initialized variable will be automatically passed into view)
include _VIEWS_URL.'credit_calc_view.php';
?>