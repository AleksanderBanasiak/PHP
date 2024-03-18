<?php include _ROOT_PATH.'/templates/top.php'; ?>

<form action="<?php print(_APP_ROOT); ?>/auth/login.php" method="post">
	<h1>Logowanie</h1><br />
		<label for="login">login: </label>
		<input id="login" type="text" name="login" value="<?php checkIfIsSet($form['login']); ?>" /><br /><br />
		<label for="password">hasło: </label>
		<input id="password" type="password" name="password" /><br /><br />
	
	<input type="submit" value="zaloguj"/>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol class="message">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}

include _ROOT_PATH.'/templates/footer.php';
?>