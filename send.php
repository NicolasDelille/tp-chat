<?php
	session_start();
	include ('db.php');
	
	if (!empty($_POST)) {
		$message = trim(strip_tags($_POST['message']));
		$username = trim(strip_tags($_SESSION['username']));
		$error = "";
		$microtime_posted = microtime(true);

		if (empty($_POST["message"])) {
			$error = "Vous n'avez rien posté !";
			// echo $error;
			$_SESSION['error'] = $error;
			// header("location: chat.php");
			// die();
		}
		else{
			if (!$error) {
				$sql = "INSERT INTO messages(id, message, username, date_posted, microtime_posted) 
						VALUES (NULL,:message,:username,NOW(),$microtime_posted)";
				$sth = $dbh->prepare($sql);
				$sth->bindValue(':message',$message);
				$sth->bindValue(':username',$username);
				$sth->execute();

			// header("location: chat.php");
			// die();
			}
			

		}
		
	}

	