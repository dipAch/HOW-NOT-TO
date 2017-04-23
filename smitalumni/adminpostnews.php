<?php
	
	include 'connection.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	if(!empty($_POST['adminnews']) && strlen($_POST['adminnews']) < 1000) {
	$post = nl2br(htmlentities($_POST['adminnews'], ENT_QUOTES, 'UTF-8'));
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
	if(!$longWord) { // If not too long
		$result1 = mysqli_query($cxn, "INSERT INTO ad_post (post, postedOn, postedBy) VALUES('$post', '$now', '$reg')");
		if($result1) {
			header("Location: imadmin.php");
		} else {
			header("Location: error.php?ref=imadmin"); // Err Page
		} 
	} else {
		header("Location: imadmin.php");
	}
	} else {
		header("Location: imadmin.php");
	}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	
	}
	
?>