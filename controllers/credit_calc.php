<?php
// load config
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST["amount"];
$years = $_REQUEST["years"];
$percentage = $_REQUEST["percentage"];

// parameter validation
if (! (isset($amount) && isset($years) && isset($percentage))) {
    $messages[] = "Nie podano jednego z parametrów";
}

// check if values are present
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

// if there are still no errors - calculate loan rate
$rate = $amount / ($years * 12);
$interest = $rate * $percentage / 100;
$rate += $interest;

// render view (initialized variable will be automatically passed into view)
include _VIEWS_DIR.'credit_calc_view.php';
?>