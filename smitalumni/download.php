<?php

	include 'connection.php';
	
	// Define the path to file
	
	$pdffile = $_GET['fname'];
	$arr = explode(".", $pdffile);
	$file = "newsletter\\".$arr[0].".zip";

	if(!file_exists($file)) {
		header("Location: error.php?ref=downpage");
	} else {
		$query = "UPDATE newsletter SET total = total + 1 WHERE pdffile = '$pdffile'";
		$result = mysqli_query($cxn, $query);
		if($result) {
			// Set headers
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$file");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
    
			// Read the file from disk
			readfile($file);
		} else {
			die("could not execute query...");
		}
	}
	
 ?>