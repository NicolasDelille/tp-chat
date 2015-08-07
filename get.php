<?php
	include ('functions.php');
	include ('db.php');

	$sql = "SELECT id, message, username, date_posted, microtime_posted 
			FROM messages";

		// ORDER BY date_posted ASC

	$sth = $dbh->prepare($sql);
	$sth->execute();
	$messages = $sth->fetchAll();

	// pr($messages);
	
	foreach ($messages as $message) {
		// pr($message);
		$time = explode(" ", $message['date_posted']);
		$message = htmlentities($message["message"]);
		$secured_message = strip_tags($message);
		$username = htmlentities($message['username']);
		$secured_username = strip_tags($username);
		echo $message .'<br />'. $username;
		
		// pr($time);


		echo '<div class="message">';
		echo "<p>". $time[1] ."</p>";
		echo "<p>" . $secured_username . " dit : " . $secured_message . "</p>";
		echo "</div>";
	}
	