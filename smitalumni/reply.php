<?php

	include 'connection.php';
	$thread = $_POST['thread'];
	$to = $_POST['to'];
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		if(!empty($_POST['reply'])) {
			$reply = nl2br(htmlentities($_POST['reply'], ENT_QUOTES, 'UTF-8'));
			$query = "INSERT INTO msg_pool (thread_id, msg, msg_from, msg_to, copy_for) VALUES ($thread, '$reply', '$reg', '$to', '$reg')";
			$result = mysqli_query($cxn, $query);
			if($result) {
				$query = "INSERT INTO msg_pool (thread_id, msg, msg_from, msg_to, copy_for) VALUES ($thread, '$reply', '$reg', '$to', '$to')";
				$result = mysqli_query($cxn, $query);
				if($result) {
					header("Location: inbox.php?threadid=$thread");
				} else {
					header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err Page
				}
			} else {
				header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err Page
			}
		} else {
			header("Location: inbox.php?threadid=$thread");
		}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>