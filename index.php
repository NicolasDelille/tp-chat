<?php
	session_start();
	if (!empty($_POST)) {
		// echo $_POST['username'];

		$username = trim(strip_tags($_POST['username']));
		
		if ($_POST['username'] == "student") {
			$_SESSION['username'] = $_POST['username'];
			header("location: chat.php");
			die();
		}
		else{
			echo "votre pseudo est inconnu !";
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