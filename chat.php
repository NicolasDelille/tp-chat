<?php
session_start();
	// echo "Bienvenue " . $_SESSION['username'] . " !";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>CHAT</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="chat.php">Home</a>
		</li>
		<li><a href="index.php">Déconnecter</a></li>
	</ul>

	<div class="container">
		<h1>CHAT</h1>


		<form method="POST" id="sendForm" class="form-horizontal">
			<fieldset>
				
				<div class="form-group">
					<label for="message" class="col-lg-2 control-label">Entrez votre message</label>
					<div class="col-lg-10">
						<input type="text" name="message" id="message" placeholder="Votre message" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<input type="submit" value="OK" class= "btn btn-success"/>
					</div>
				</div>

			</fieldset>
		</form>

		<hr>
		
		<div id="result"></div>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>