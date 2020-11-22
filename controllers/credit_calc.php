<?php
// load config
require_once dirname(__FILE__)."/../config.php";
include $conf->controllers_dir.'security/access_control.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

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
function get_rate_value($amount, $years, $percentage, $rate, &$messages){
    $rate = $amount / ($years * 12);
    $interest = $rate * $percentage / 100;
    $rate += $interest;
    return $rate;
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
    $rate = get_rate_value($amount, $years, $percentage, $rate, $messages);
}

// render view (initialized variable will be automatically passed into view)

$smarty = new Smarty();
$smarty -> assign("controllers_url", $conf->controllers_url);
$smarty -> assign("static_url", $conf->static_url);
$smarty -> assign("rate", $rate);
$smarty -> assign("messages", $messages);
$smarty -> display($conf->tpl_dir."credit_calc.tpl");
?>
