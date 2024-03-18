<?php include _ROOT_PATH.'/templates/top.php'; ?>

<h1>Kalkulator kredytowy</h1>
<a href="<?php print(_APP_ROOT); ?>/auth/logout.php">Wyloguj</a><br /><br />
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="amount">Kwota: </label>
	<input id="amount" type="text" name="amount" value="<?php checkIfIsSet($amount); ?>" />
	<br />
	<br />
	
	<label for="years">Na ile lat: </label>
	<input id="years" type="text" name="years" value="<?php checkIfIsSet($years); ?>" />
	<br />
	<br />

	<label for="interest">Oprocentowanie: </label>
	<input id="interest" type="text" name="interest" value="<?php checkIfIsSet($interest); ?>" />
	<br />
	<br />

	<input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol class="message" >';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
		echo 'Wynik: '.$result;

include _ROOT_PATH.'/templates/footer.php';
?>


