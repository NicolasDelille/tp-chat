<?php
	session_start();
	// echo "Bienvenue " . $_SESSION['username'] . " !";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>CHAT</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<h1>CHAT</h1>

	<div id="result"></div>

	<form method="POST" id="sendForm">
		<input type="text" name="message" id="message" placeholder="Votre message" />
		<input type="submit" value="OK" />
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>