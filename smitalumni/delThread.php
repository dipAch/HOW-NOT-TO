<?php

	include 'connection.php';
	
	$threadToDel = mysqli_real_escape_string($cxn, $_GET['threadid']);
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$query = "DELETE FROM thread_pool WHERE thread_id = $threadToDel";
		$result = mysqli_query($cxn, $query);
		if($result) {
			$query1 = "DELETE FROM msg_pool WHERE thread_id = $threadToDel";
			$result1 = mysqli_query($cxn, $query1);
			if($result1) {
				header("Location: threads.php");
			} else {
				header("Location: error.php?ref=threads"); // Err Page
			}
		} else {
			header("Location: error.php?ref=threads"); // Err Page
		}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>