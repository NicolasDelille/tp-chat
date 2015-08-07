<?php
	session_start();
	if (!empty($_POST)) {
		// echo $_POST['username'];
		
		$username = trim(strip_tags($_POST['username']));
		
		//username vide ?
		if (empty($_POST['username'])) {
			$error = "Veuillez entrer un pseudo !";
		}

		// si c'est valide...
		if (!$error) {
			$_SESSION['username'] = $username;
			header("location: chat.php");
			die();
		}
				
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>CHAT | Connexion</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<h1>CHAT | Connexion</h1>

	<form method="POST">
		<input type="text" name="username" id="username" placeholder="Votre pseudo" />
		<input type="submit" value="Entrer !" />
	</form>

</body>
</html>
