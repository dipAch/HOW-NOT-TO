<?php

	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		@$stat = mysqli_real_escape_string($cxn, $_GET['stat']);
		$query = "SELECT * FROM thread_pool WHERE msg_to = '$reg' or msg_from = '$reg'";
		$result = mysqli_query($cxn, $query);
		if($result) {
			$query1 = "SELECT * FROM al_det WHERE reg_no = '$reg'";
			$result1 = mysqli_query($cxn, $query1);
			if($result1) {
				if(mysqli_num_rows($result1) > 0) {
					$row1 = mysqli_fetch_assoc($result1);
					extract($row1);
					/*$query_msg_read = "UPDATE msg_pool SET read_status = 0 WHERE msg_to = '$reg'";
					$result_msg_read = mysqli_query($cxn, $query_msg_read);
					if($result_msg_read) {*/
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
<link href="css/jquery-bubble-popup-v3.css" rel="stylesheet" type="text/css" />
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="jS/jquery-bubble-popup-v3.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
$(document).ready(function(){

		$(".button").CreateBubblePopup({

									position : "top",
									align	 : "center",
									
									innerHtml: "To start a conversation, just open the profile of the person in the search bar above and click on the message option.",

									innerHtmlStyle: {
														color:"#FFFFFF", 
														"text-align":"center"
													},

									themeName: "all-grey",
									themePath: "jquerybubblepopup-themes"
								 
								});
});
//-->
</script>
<style type = "text/css">

			span#success
			{
				display:inline;
				font-weight:bold;
				color:green;
				background-color:#f1e8da;
				border:1px solid green;
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
	<div class="menu" style = "width : 101%;">
		<ul>
			<li class="seprator"></li>
					<li><a href="http://smu.edu.in/home.php?t=p" target = "_blank">Home</a></li>
					<li class="seperator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMU_WELCOME&t=h" target = "_blank">About University</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/study_areas.php?t=p" target = "_blank">Courses</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUADMSN&t=h" target = "_blank">Admission</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSFSTU&t=h" target = "_blank">Future Students</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTU&t=h" target = "_blank">Current Students</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTF&t=h" target = "_blank">Current Staff</a></li>
					<li class="seprator"></li>
					<li><a href="index.php" target = "_blank">Alumni</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/institutes.php?t=p" target = "_blank">Institutes</a></li>
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
		<a href="http://smu.edu.in/notice_view.php?t=p&news=219">'.$ann1.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smit.smu.edu.in/notice_view.php?t=p&news=236">'.$ann2.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smims.smu.edu.in/notice_view.php?t=p&news=239">'.$ann3.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://www.smu.edu.in/viewpage.php?c=SMU_Download&t=h">'.$ann4.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smit.smu.edu.in/notice_view.php?t=p&news=215">'.$ann5.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smu.edu.in/courses.php?t=p&studyarea=4">'.$ann6.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smu.edu.in/viewpage.php?c=SMUUCONSFSTF&t=h">'.$ann7.'</a>
		<img src="ticker_separator.gif" alt="">
		<a href="http://smcpt.smu.edu.in/notice_view.php?t=p&news=190">'.$ann8.'</a>
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
						    <li><font color="white">Threads</font></li>
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
<div class="rt">Welcome <em>';
$br_name = explode(" ", $name);
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
<br /><br />';
if($stat == "ctd") {
	echo '<div class="main_head">
                        <span id = "success"><img src = "tick.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;&nbsp;<font size = "2" color = "green">THREAD SUCCESSFULLY CREATED</font></span>&nbsp;
                    </div><br /><br />';
}
echo '
<!-- Content Goes Here -->';
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_row($result)) {
				$findFor = '';
				if($row[1] == $reg) {
					$findFor = $row[2];
				} else {
					$findFor = $row[1];
				}
				$query2 = "SELECT name from al_det WHERE reg_no = '$findFor'";
				$result2 = mysqli_query($cxn, $query2);
				if($result2) {
					$row2 = mysqli_fetch_row($result2);
					echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;">';
					echo '<img src = "bullets1.png" valign = "middle" width = "15" height = "15" />&nbsp;&nbsp;&nbsp&nbsp;<a href = "inbox.php?threadid='.$row[0].'"><font size = "4" color = "#b57f47">Resume Your Conversation with ';
					$temp1 = explode(" ", $row2[0]);
					echo $temp1[0];
					echo '...';
					$queryPerThreadCount = "SELECT COUNT('read_status') FROM msg_pool WHERE read_status = 1 AND thread_id = $row[0] AND copy_for = '$reg' AND msg_from = '$findFor'";
					$resultPerThreadCount = mysqli_query($cxn, $queryPerThreadCount);
					if($resultPerThreadCount) {
						$rowPerThreadCount = mysqli_fetch_row($resultPerThreadCount);
						if($rowPerThreadCount[0] > 0) {
							echo "($rowPerThreadCount[0])";
						}
						echo '</font></a>';
						echo '&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp;<img src = "cross.png" valign = "middle" width = "20" height = "20" />&nbsp;&nbsp;<a href = "delThread.php?threadid='.$row[0].'"><font size = "3"><b>Delete Thread</b></font></a></div><br />';
					} else {
						header("Location: error.php?ref=threads"); // Err Page
					}
				} else {
					header("Location: error.php?ref=threads"); // Err Page
				}
			}
		} else {
			echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px; width : 518px;"><b><font size = "3" style = "color : green;">You Have No Ongoing Conversations...<div class="button" style = "display : inline;">Start <font size = "4" style = "color : green;"><u>One</u></font> Here.</div></font></b></div>';
		}

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
	/*} else {
	
		header("Location: error.php?ref=threads"); // Err Page
	
	}*/

				} else {
					ob_start();
					session_start();
					unset($_SESSION['loggedIn']);
					session_destroy();
					header("Location: index.php"); // Unauthenticated User
				}
			} else {
				header("Location: error.php?ref=threads"); // Err Page
			}
		} else {
			header("Location: error.php?ref=threads"); // Err page
		}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>