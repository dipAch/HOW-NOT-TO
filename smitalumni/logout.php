<?php
	ob_start();
	session_start();
	unset($_SESSION['loggedIn']);
	session_destroy();
	header("location: index.php");
?>