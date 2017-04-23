<?php
	
	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	if(!empty($_GET['search_friend'])) {
		$temp = $_GET['search_friend'];
		$nameArr = explode(" ", $_GET['search_friend']);
		$fname = $nameArr[0];
		$searchFor = mysqli_real_escape_string($cxn, $fname);
		$query1 = "SELECT * FROM al_det WHERE name LIKE '$searchFor%'";
		$result1 = mysqli_query($cxn, $query1);
		if($result1) {
		if (mysqli_num_rows($result1)) {
		$query_msg = "SELECT COUNT('read_status') FROM msg_pool WHERE msg_to = '$reg' AND read_status = 1 AND copy_for = '$reg'";
		$result_msg = mysqli_query($cxn, $query_msg);
		if($result_msg) {
			$row_msg = mysqli_fetch_row($result_msg);
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
	<div class="menu" style = "width : 98%;">
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
						    <li><font color="white">Search Page</font></li>
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
								<div class="mid"><a href="threads.php">Messages';
								if($row_msg[0] > 0) {
									echo " ($row_msg[0])";
								}
								echo '</a></div>
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
<div class="rt">People You May Know</div></div><br />
<!-- Search Friend Option -->

<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" value = "'.htmlspecialchars($temp).'" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><font color = "#b57f47" size = "4" style = "font-weight : bold;">Search Results : </font><br /><hr color = "#ccc" /><br />';
if (mysqli_num_rows($result1) > 1) {
	$perPage = 1; // No. of search per page
	$noOfRecords = mysqli_query($cxn, "SELECT COUNT('person_id') FROM al_det WHERE name LIKE '$searchFor%'");
	if($noOfRecords) {
	$row1 = mysqli_fetch_row($noOfRecords);
	$pages = ceil($row1[0] / $perPage);
	//echo "Total Pages : ".$pages;
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $perPage;
	$query = "SELECT * FROM al_det where name LIKE '$searchFor%' LIMIT $start, $perPage";
	$result = mysqli_query($cxn, $query); 
	// Mod
	if($result) {
	if(mysqli_num_rows($result) > 0) {
	echo "<table border = '0' width = '741px' style = 'border-left:solid 1px #CCC;border-right:solid 1px #CCC;border-bottom:solid 1px #CCC;border-left:solid 1px #FFF;border-radius:5px;'>";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr><td width = '20' height = '40' valign = 'top'><img src = 'bullets1.png' height = '12' width = '12' /></td><td width = '80' height = '40' valign = 'top'> <img src = 'photo\\$row[23]' width = '80' height = '100' /></td><td valign = 'top'><font color = '#b57f47' size = '3' style = 'font-weight : bold;'><a href = 'viewProfile.php?reg_no=$row[21]' title = '$row[8]' style = 'text-decoration:none;'>&nbsp;&nbsp;$row[1]</a><br />&nbsp;&nbsp;<img src = 'mail.png' valign = 'middle' width = '30' height = '20' />&nbsp;&nbsp;<font size = '2'>$row[17]</font></font></td></tr><tr><td colspan = '3'><br /></td></tr>";
	}
	echo "<tr><td colspan = '3'><br /></td></tr></table>";
	// Mod
	echo '<br /><br />';
	if($pages > 1 && $page <= $pages) {
		echo '<center><font size = "4">';
		for($x = 1; $x <= $pages; $x++) {
			echo '<a href = "?page='.$x.'&search_friend='.$temp.'" style = "text-decoration:none;">';
			if($page == $x){
				echo '<span style = "background-color:hsl(0, 0%, 90%);padding-left:5px;padding-right:5px;padding-top:3px;padding-bottom:3px;"><b>'.$x.'</b></span>';
			} else {
				echo $x;
			}
			echo '</a> ';
		}
		echo '</font></span></center>';
	} 
	}
	else {
		echo "<font size = '3' color = 'red'><b>No Results Found</b></font>";
	}
	// Mod 
	} else {
		header("Location: error.php?ref=testmep"); // Err Page
	}
	} else {
		header("Location: error.php?ref=testmep"); // Err Page
	}
} else {
	$row = mysqli_fetch_row($result1);
	header("Location: viewProfile.php?reg_no=$row[21]");
}
echo '<br /><div class="content">
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

	header("Location: error.php?ref=testmep"); // Err Page

}

		} else {
		
			$query_msg = "SELECT COUNT('read_status') FROM msg_pool WHERE msg_to = '$reg' AND read_status = 1 AND copy_for = '$reg'";
			$result_msg = mysqli_query($cxn, $query_msg);
			if($result_msg) {
				$row_msg = mysqli_fetch_row($result_msg);
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
	<div class="menu" style = "width : 98%;">
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
						    <li><font color="white">Search Page</font></li>
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
								<div class="mid"><a href="threads.php">Messages';
								if($row_msg[0] > 0) {
									echo " ($row_msg[0])";
								}
								echo '</a></div>
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
<div class="rt">Person Does Not Exist</div></div><br />
<!-- Search Friend Option -->

<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" value = "'.htmlspecialchars($temp).'" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><font color = "#b57f47" size = "4" style = "font-weight : bold;">Search Results : </font><br /><hr color = "#ccc" /><br />';
echo '<table width = "741px" style = "border-left:solid 1px #CCC;border-right:solid 1px #CCC;border-bottom:solid 1px #CCC;border-left:solid 1px #FFF;border-radius:5px;">';
echo '<tr><td><span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2">Sorry could not find <b>'.htmlspecialchars($temp).'</b></font></span></td></tr>';
echo '<tr><td><br /><br /></td></tr><tr><td><br /><br /></td></tr></table>';
echo '<br /><div class="content">
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

	header("Location: error.php?ref=testmep"); // Err Page

}

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