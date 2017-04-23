<?php

	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	@$thread = mysqli_real_escape_string($cxn, $_GET['threadid']);
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
			$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
			$query = "SELECT * FROM al_det WHERE reg_no = '$reg'";
			$result = mysqli_query($cxn, $query);
			if($result) {
				if(mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				extract($row);
				$query_msg_read = "UPDATE msg_pool SET read_status = 0 WHERE msg_to = '$reg' AND copy_for = '$reg' AND thread_id = $thread";
				$result_msg_read = mysqli_query($cxn, $query_msg_read);
				if($result_msg_read) {
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
						    <li><font color="white">Inbox</font></li>
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
								<div class="mid"><a href="threads.php">Messages</a></div>
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
<br /><br />
<!-- Content Goes Here -->';
				$query2 = "SELECT * FROM msg_pool WHERE thread_id = $thread and copy_for = '$reg'";
				$result2 = mysqli_query($cxn, $query2);
				if($result2) {
					if(mysqli_num_rows($result2) > 0) {
							echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;">';
							echo '<table border = "0" width = "700">';
							echo '<tr><td><hr style = "border-style : dotted;" /></td></tr>';
							while($row2 = mysqli_fetch_row($result2)) {
								if($row2[6] == $reg) {
								$query3 = "SELECT name FROM al_det WHERE reg_no = '$row2[3]'";
								$result3 = mysqli_query($cxn, $query3);
								if($result3) {
									$row3 = mysqli_fetch_assoc($result3);
									if($reg != $row2[3]) {
										echo "<tr><td><b><font size = '4' color = '#b57f47'>Hi It's Me, ";
										$temp1 = explode(" ", $row3['name']);
										echo $temp1[0];
										echo " :</font></b><br /><br /></td></tr>";
									} else {
										echo "<tr><td><b><font size = '4' color = '#b57f47'>From, You :</font></b><br /><br /></td></tr>";
									}
									echo "<tr><td width = '55%'><font size = '4'>$row2[2]</font><br /><br /></td></tr>";
									echo "<tr><td><img src = 'cross.png' valign = 'middle' width = '20' height = '20' />&nbsp;&nbsp;<a href = 'delInstantMessage.php?msgid=".$row2[0]."&threadid=".$thread."'><font size = '3'><b>Delete Message</b></font></a><br/><br /></td></tr>";
									echo '<tr><td><hr style = "border-style : dotted;" /></td></tr>';
								} else {
									header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page
								}
								}
							}
							$query5 = "SELECT * FROM thread_pool WHERE thread_id = $thread";
							$result5 = mysqli_query($cxn, $query5);
							if($result5) { 
							$row5 = mysqli_fetch_row($result5);
							echo '</table><br/>
							<table border = "0" width = "500">
							<form action = "reply.php" method = "post" name = "Reply">
							<tr><td>
							<textarea name="reply" placeholder = "Should not exceed 400 Characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:30px;width:485px;padding-top:5px;padding-left:5px;"></textarea>
							</td></tr>
							<tr>
							<td>
							<input name = "thread" type = "hidden" value = "'.$thread.'" />
							</td>
							</tr>
							<tr>
							<td>
							<input name = "to" type = "hidden" value = "';
							if($row5[1] == $reg) { 
								echo $row5[2];
							} else {
								echo $row5[1];
							}
							echo '" />
							</td>
							</tr>
							<tr><td align = "right"><br />
							<input type= "submit" name="submit" value = "Reply" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
							</td></tr>
							</form>
							</table></div>';
							} else {
								header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page
							}
					} else {
						$query4 = "SELECT * FROM thread_pool WHERE thread_id = $thread";
						$result4 = mysqli_query($cxn, $query4);
						if($result4) { 
						$row4 = mysqli_fetch_row($result4);
						echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px; width : 518px;"><b><font size = "3">Sorry, You Have No Messages...</font></b>';
						echo '<br/><br />
							<table border = "0" width = "500">
							<form action = "reply.php" method = "post" name = "Reply">
							<tr><td>
							<textarea name="reply" placeholder = "Should not exceed 400 Characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:30px;width:485px;padding-top:5px;padding-left:5px;"></textarea>
							</td></tr>
							<tr>
							<td>
							<input name = "thread" type = "hidden" value = "'.$thread.'" />
							</td>
							</tr>
							<tr>
							<td>
							<input name = "to" type = "hidden" value = "';
							if($row4[1] == $reg) { 
								echo $row4[2];
							} else {
								echo $row4[1];
							}
							echo '" />
							</td>
							</tr>
							<tr><td align = "right"><br />
							<input type= "submit" name="submit" value = "Send Msg" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
							</td></tr>
							</form>
							</table></div>';
						} else {
							header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page
						}
					}
				} else {
					header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page
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

} else {

	header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page

}
			
			} else {
				ob_start();
				session_start();
				unset($_SESSION['loggedIn']);
				session_destroy();
				header("Location: index.php"); // Unauthenticated User
			}
			} else {
				header("Location: errorThreads.php?ref=inbox&threadid=$thread"); // Err page
			}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}


?>