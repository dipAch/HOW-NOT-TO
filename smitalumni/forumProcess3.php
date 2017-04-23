<?php
	
	include 'connection.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	if(!empty($_POST['jobs']) && strlen($_POST['jobs']) < 400) {
	$query = "SELECT name FROM al_det WHERE reg_no = '$reg'";
	$result = mysqli_query($cxn, $query);
	if($result) {
	if(mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$post = nl2br(htmlentities($_POST['jobs'], ENT_QUOTES, 'UTF-8'));
	$now = date("l, F jS, Y \a\\t g:i a", time());
	// Check For Garbage
	$longWord = false;
	$splitPost = explode(" ", $post);
	foreach($splitPost as $split) {
		if(strlen($split) > 45) {
			$longWord = true;
		}
	}
	// Check Complete
	if(!$longWord && strlen($post) > 25) { // If not too long
		$result1 = mysqli_query($cxn, "INSERT INTO jobs (post, postedOn, postedBy, reg_no) VALUES('$post', '$now', '$name', '$reg')");
		if($result1) {
			header("Location:testmep.php");
		} else {
			header("Location: error.php?ref=testmep"); // Err Page
		}
	} else {
		header("Location: testmep.php");
	}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Unauthenticated User
	}
	} else {
		header("Location: error.php?ref=testmep"); // Err Page
	}
	} else {
		header("Location: testmep.php");
	}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	
	}
	
?>