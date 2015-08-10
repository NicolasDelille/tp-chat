<?php
	include ('functions.php');
	include ('db.php');

	$sql = "SELECT id, message, username, date_posted, microtime_posted 
			FROM messages
			ORDER BY date_posted DESC";


	$sth = $dbh->prepare($sql);
	$sth->execute();
	$messages = $sth->fetchAll();

	// pr($messages);

	foreach ($messages as $message) {
		// pr($message);
		$time = explode(" ", $message['date_posted']);
		$post = htmlentities($message["message"]);
		$secured_post = strip_tags($post);
		$user = $message["username"];
		$username = htmlentities($user);
		$secured_username = strip_tags($username);
		// echo $message .'<br />'. $username;
		
		// pr($time);


		echo '<div class="row">';
		echo '<div class="span2">';
		echo "<p>". $time[1] ."</p>";
		echo "<p>" . $secured_username . " dit : " . $secured_post . "</p>";
		echo '</div>';
		echo '</div>';
	}

	
	