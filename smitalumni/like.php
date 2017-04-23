<?php

	include 'connection.php';
	
	$post_id = mysqli_real_escape_string($cxn, $_GET['postid']);
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	$query = "SELECT likes FROM feed WHERE post_id = $post_id";
	$result = mysqli_query($cxn, $query);
	if($result) {
		$row = mysqli_fetch_row($result);
		$curr = $row[0] + 1;
		$query = "UPDATE feed SET likes = $curr WHERE post_id = $post_id";
		$result = mysqli_query($cxn, $query);
		if($result) {
			$query1 = "INSERT INTO like_acc VALUES($post_id, '$reg', 'contribute')";
			$result1 = mysqli_query($cxn, $query1);
			if($result1) {
				header("Location: testmep.php");
			} else {
				header("Location: error.php?ref=testmep"); // Err Page
			}
		} else {
			header("Location: error.php?ref=testmep"); // Err Page
		}
	} else {
		header("Location: error.php?ref=testmep"); // Err Page
	}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>