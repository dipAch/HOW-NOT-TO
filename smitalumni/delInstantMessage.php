<?php

	include 'connection.php';
	$thread = $_GET['threadid'];
	$msgToDel = $_GET['msgid'];
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		$query = "DELETE FROM msg_pool WHERE msg_id = $msgToDel and copy_for = '$reg' and thread_id = $thread";
		$result = mysqli_query($cxn, $query);
		if($result) {
			header("Location: inbox.php?threadid=$thread");
		} else {
			header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err Page
		}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>