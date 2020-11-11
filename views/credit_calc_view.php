<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php  echo _CONTROLLERS_URL.'credit_calc.php';?>" method="post">
	<label for="amount">Kwota: </label>
	<input id="amount" type="number" name="amount"/><br />
	<label for="years">Lata: </label>
	<input id="years" type="number" name="years"/><br />
	<label for="percentage">Oprocentowanie: </label>
	<input id="percentage" type="number" name="percentage"/>
	<input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ul>';
    }
}
?>
<?php 
echo $odsetki;
?>
<?php
if (isset($rate)) {
    echo <<<EOS
    <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        Miesięczna rata: $rate
    </div>
    EOS;
}
?>

</body>
</html>