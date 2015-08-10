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
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		
		<h1>Bienvenue sur notre nouveau service de communication instantanée ! </h1>

		<form method="POST" class="form-horizontal">
			<fieldset>
				<legend>Connexion</legend>
				<div class="form-group">
					<label for="username" class="col-lg-2 control-label">Entrez votre identifiant</label>
					<div class="col-lg-10">
						<input type="text" name="username" id="username" placeholder="Votre pseudo" class="form-control"/>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-success">Entrer !</button>
					</div>
				</div>
			</fieldset>
		</form>

	</div>
</body>
</html>
