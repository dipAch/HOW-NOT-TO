<?php

	include 'connection.php';
	
	$post_id = $_GET['postid'];
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$query = "DELETE FROM stories WHERE post_id = $post_id";
	$result = mysqli_query($cxn, $query);
	if($result) {
		$query = "DELETE FROM like_acc WHERE post_id = $post_id";
		$result = mysqli_query($cxn, $query);
		if($result) {
			header("Location: testmep.php");
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