<?php
	
	include 'connection.php';
	$post_id = mysqli_real_escape_string($cxn, $_POST['postid']);
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	if(!empty($_POST['ed_contribute']) && strlen($_POST['ed_contribute']) < 1000) {
	$post = nl2br(htmlentities($_POST['ed_contribute'], ENT_QUOTES, 'UTF-8'));
	// $now = date("l, F jS, Y \a\\t g:i a", time()); Later can be accounted for time of edit
	// Check For Garbage
	$longWord = false;
	$splitPost = explode(" ", $post);
	foreach($splitPost as $split) {
		if(strlen($split) > 45) {
			$longWord = true;
		}
	}
	// Check Complete
	if(!$longWord && strlen($post) > 35) { // If not too long
		$result1 = mysqli_query($cxn, "UPDATE feed SET post = '$post' WHERE reg_no = '$reg' and post_id = $post_id");
		if($result1) {
			header("Location: testmep.php");
		} else {
			header("Location: error.php?ref=testmep"); // Err Page
		} 
	} else {
		header("Location: testmep.php");
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