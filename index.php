<?php
	//si le formulaire est soumis
	if (!empty($_POST)){
		//stocke le pseudo dans la session

		//redirige sur chat.php

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