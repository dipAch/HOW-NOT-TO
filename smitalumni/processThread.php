<?php

	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		if(!empty($_POST['createThread'])) {
		$msg = nl2br(htmlentities($_POST['createThread'], ENT_QUOTES, 'UTF-8'));
		$msg_to = mysqli_real_escape_string($cxn, $_POST['msg_to']);
		$query = "INSERT INTO thread_pool (msg_from, msg_to) VALUES ('$reg', '$msg_to')";
		$result = mysqli_query($cxn, $query);
		if($result) {
			$query1 = "SELECT * FROM thread_pool WHERE thread_id = (SELECT MAX(thread_id) FROM thread_pool)";
			$result1 = mysqli_query($cxn, $query1);
			if($result1) {
				$row1 = mysqli_fetch_row($result1);
				$query2 = "INSERT INTO msg_pool (thread_id, msg, msg_from, msg_to, copy_for) VALUES ($row1[0], '$msg', '$reg', '$msg_to', '$reg')";
				$result2 = mysqli_query($cxn, $query2);
				if($result2) { // Thread Successfully Created
					// Notify Thread Creation
					$query2 = "INSERT INTO msg_pool (thread_id, msg, msg_from, msg_to, copy_for) VALUES ($row1[0], '$msg', '$reg', '$msg_to', '$msg_to')";
					$result2 = mysqli_query($cxn, $query2);
					if($result2) { // Thread Successfully Created
						// Notify Thread Creation
						header("Location: threads.php?stat=ctd");
		} else {
			header("Location: error.php?ref=threads"); // Err page
		}
					// Notification Ends
				} else {
					header("Location: errorCreateThreads.php?ref=createThread&reg_no=$msg_to"); // Err Page
				}
			} else {
				header("Location: errorCreateThreads.php?ref=createThread&reg_no=$msg_to"); // Err Page
			}
		} else {
			header("Location: errorCreateThreads.php?ref=createThread&reg_no=$msg_to"); // Err Page
		}
		} else {
						$msg_to = mysqli_real_escape_string($cxn, $_POST['msg_to']);
						$query4 = "SELECT name FROM al_det WHERE reg_no = '$msg_to'";
						$result4 = mysqli_query($cxn, $query4);
						if($result4) {
							$row = mysqli_fetch_row($result4);
						echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>:: Alumni Welcome Message :: Sikkim Manipal University - Sikkim Manipal University (SMU)</title>
<meta name="description" content="Welcome message for Alumni">
<meta name="keywords" content="SMUALUMNI">
<meta name="author" content="Quintessential Software Solutions Pvt Ltd, http://www.qss.in"> 
<meta name="robots" content="index,follow,all"> 
<meta name="revisit-after" content="2 days">
<link rel="icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link href="css/stylesh.css" rel="stylesheet" type="text/css" />
<script src="jS/tabcontent.js" type="text/javascript"></script>
<link href="css/tabcontent.css" rel="stylesheet" type="text/css" />
<script src="jS/jquery.min.js"></script>
<script type="text/javascript" src="jS/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="jS/jquery.reveal.js"></script>
<link rel="stylesheet" href="css/reveal.css">
<style type = "text/css">

	span#error
			{
				display:inline;
				font-weight:bold;
				color:red;
				background-color:#f1e8da;
				border:1px solid red;
				width:410px;
				text-align:center;
				padding-left:10px;
				padding-right:10px;
				padding-bottom:10px;
				padding-top:10px;
			}

</style>
</head>
<body>
<div id="container">
	<div class="top-wrapper">
		<div id="header">
			<div class="logo"><img src="smu_logo.gif" alt="Sikkim Manipal University" title="Sikkim Manipal University"></div>
			<div class="top-nav">
				<ul>
					<li><a href="http://smu.edu.in/contact.php">Contact</a></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h#">Site map</a></li>
					<li><a href="http://smu.edu.in/">Home</a></li>
				</ul>
				<form method="get" action="http://www.google.com/search" onsubmit="return checkform(this);">
					<div class="search"><input type="text" name="q" value="" class="input-txt"><a href="http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h#"><input type="submit" class="btn-img" value="" style="vertical-align:top"></a><br>
					<input type="checkbox" name="sitesearch" value="smu.edu.in" checked="checked" style="visibility:hidden"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="menu">
		<ul>
			<li class="seprator"></li>
					<li><a href="http://smu.edu.in/home.php?t=p">Home</a></li>
					<li class="seperator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMU_WELCOME&t=h">About University</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/study_areas.php?t=p">Courses</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUADMSN&t=h">Admission</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSFSTU&t=h">Future Students</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTU&t=h">Current Students</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTF&t=h">Current Staff</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/media_home.php?t=p">Media</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/institutes.php?t=p">Institutes</a></li>
					<li class="seprator"></li>
					<li><a href="generalfeedback.php" target = "_blank">Feedback</a></li>
					<li class="seprator"></li>
					<li><a href="http://alumni.smu.edu.in/smitalumni/team.php" target = "_blank">Alumni Team</a></li>
					<li class="seprator"></li>
		</ul>
	</div>
	<div class="wrapper">
		<div class="ticker">
			<div class="lt">Important Announcements</div>
			<div class="rt">
				<marquee onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1" truespeed="20" scrollamount="3" scrolldelay="20">
		<a href="http://smu.edu.in/notice_view.php?t=p&news=219">Direct Admission to Medical Biotechnology </a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smit.smu.edu.in/notice_view.php?t=p&news=236">SPOT ADMISSIONS 2013 IN B.TECH COURSE</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smims.smu.edu.in/notice_view.php?t=p&news=239">ADMISSION UPDATE MBBS 2013</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://www.smu.edu.in/viewpage.php?c=SMU_Download&t=h">Download Prospectus, Appl. Form, Fee Structure</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smit.smu.edu.in/notice_view.php?t=p&news=215">SMIT Offline Test Counselling Schedule Declared </a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smu.edu.in/courses.php?t=p&studyarea=4">DIRECT ADMISSION GOING ON FOR PCBSc NURSING</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smu.edu.in/viewpage.php?c=SMUUCONSFSTF&t=h">FOR LATEST AMENDMENTS TO FACULTY POSITIONS PLEASE CLICK HERE</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smcpt.smu.edu.in/notice_view.php?t=p&news=190">Direct Admission going on for BPT Limited Seats available now</a>
				</marquee>
				<span></span>
			</div>
		</div>
		<div id="content-area">
			<div class="lt-pnl">
				<div class="panel">
					<div class="pnl-head">Alumni </div>
					<div class="pnl-cont">
						<ul>
						    <li><font color="white">Send Message</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="testmep.php">Home</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="userprofile.php">Profile</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="accountSettings.php">Account Settings</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="logout.php">Logout</a></div>
								<div class="bot"></div>
							</li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Send Message To <em>';
$br_name = explode(" ", $row[0]);
echo $br_name[0];
echo '</em></div>
</div>
<br />
<!-- Search Friend Option -->

<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Send a message to..." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><br />
<div class="main_head">
									<span id = "error"><img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2" color = "red"><b>MAYBE YOU WANT TO ADD A MESSAGE...</b></font></span>&nbsp;
							  </div>
<br /><br />
<!-- Content Goes Here -->';
	echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px; width : 518px;">
	<form action = "processThread.php" method = "post" name = "processThread">
	<table border = "0" width = "500">
	<tr>
	<td>
	<textarea name="createThread" placeholder = "Should not exceed 400 Characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:30px;width:485px;padding-top:5px;padding-left:5px;"></textarea>
	</td>
	</tr>
	<tr>
	<td>
	<input type = "hidden" name = "msg_to" value = "'.$msg_to.'" />
	</td>
	</tr>
	<tr>
	<td align = "right"><br />
	<input type= "submit" name="submit" value = "Send Msg" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
	</td>
	</tr>
	</table>
	</form></div><br />';
echo '<br />
		<div class="content">
<span style="font-family: "><br />
</span></div>
</div></div>
		<div id="footer">
			<div id="footer_wrapper">
				<div class="lt">
					<p><a href="http://smu.edu.in/contact.php">Contact Us</a> &nbsp;| &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_PRIVACY_POLICY">Privacy</a> &nbsp; | &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_TERMS">Terms And Conditions</a><br>&#169; 2007 - '.$curr_year.' Sikkim Manipal University</p>
				</div>
				<div class="rt"><span>Powered by:<br></span><b><a>Alumni I.T. Cell</a></b></div>
			</div>
		</div>
	</div>
</div>
</body></html>';

} else {

	header("Location: errorCreateThreads.php?ref=createThread&reg_no=$msg_to"); // Err Page

}
		}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>