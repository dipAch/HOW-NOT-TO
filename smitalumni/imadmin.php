<?php

include 'connection.php';
include 'announcement.php';
include 'copyrt.php';
if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes")
{
	$noOfUsers = mysqli_query($cxn, "SELECT COUNT('person_id') FROM al_det");
	$realUsers = mysqli_fetch_row($noOfUsers);
	if($realUsers) {

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
<script language="javascript">
function fpwd()
{
	x = document.adminSettings.pass.value;
	if(x == "") {
		alert("Password cannot be empty !!");
		return false;
	}
	if(x.length < 6) 
	{
		alert("Password should be minimum 6 characters !!");
		return false;
	}
}

function fpass()
{
	x = document.adminSettings.pass.value;
	y = document.adminSettings.cpass.value
	if(x != y)
	{
		alert("Password didnot match !!");
		return false;
	}
}
</script>
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
						    <li><font color="white">Admin Home</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="newsup.php">Upload Newsletter</a></div>
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
<div class="rt">Welcome Admin</div>
</div>
<br />
<!-- Search Friend Option -->

<form method="get" action="adminsearchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Search People...." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><br />

<div align = "right" ><font size ="3"><b> No. of users: <font color="green" size="6"> '.$realUsers[0].'</font></b></font></div>

<!--<div align = "right"><a href="settings.php" ><u>Settings</u></a></div></br>-->
		<!-- Setting Tab <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;"> -->
		<br />
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Send Messages</a></li>
            <li><a href="#view2">Post News</a></li>
			<li><a href="#view3">Users Posts</a></li>
            <li><a href="#view4">Account Settings</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody><tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br><br>
									<form action = "adminmessageall.php" name = "sendmsg" method = "post">
									<ul class="form">
										<li>
											<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
												<font size = "2">Send Message to all Alumni Members :</font>&nbsp;
											</label>
											<br /><br />
											<textarea name="msg" rows="20" cols="20" placeholder = "Should not Exceed 400 Characters" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:150px;width:500px;padding-top:5px;padding-left:5px;"></textarea>
										</li>
										<li></li>
										</br><li align = "center">
											<table border = "0" width = "510">
											<tr>
											<td align = "right">
											<input type= "submit" name="submit" value = "Send" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /> 
											</td>
											</tr>
											</table>  
										</li>
									</ul></form><br>
									<div class="heading-line">
									</div>
									</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
			</div> <!-- Frame 1 -->
            <div id="view2">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody><tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<!--<link href="css/regform.css" rel="stylesheet" type="text/css">-->
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<form action = "adminpostnews.php" name = "adminnews" method = "post">
									<ul class="form">
										<li>
											<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
												<font size = "2">POST NEWS :</font>&nbsp;
											</label>
											<br /><br />
											<textarea name="adminnews" rows="20" cols="20" placeholder = "Should not Exceed 1000 Characters" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:150px;width:500px;padding-top:5px;padding-left:5px;"></textarea>
										</li>
										<li></li>
										<li align = "center">
											<table border = "0" width = "510">
											<tr>
											<td align = "right">
											<input type= "submit" name="submit" value = "Post" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /> 
											</td>
											</tr>
											</table>
										</li>
									</ul></form>
									<!-- Modification -->
									<br>
									<div class="heading-line">
									</div>
									<ul class = form>
									<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
										<br /><font size = "3"><u><center>ADMIN NEWS POSTS<center></u></font>&nbsp;
									</label>
									</ul>
									<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;">';
									$perPage = 6; // No. of posts per page
									$key = 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM ad_post");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['pages'])) ? (int)$_GET['pages'] : 1;
									$start = ($page - 1) * $perPage;
									$query = "SELECT * FROM ad_post ORDER BY post_id DESC LIMIT $start, $perPage";
									$result = mysqli_query($cxn, $query);
									if($result){
										if(mysqli_num_rows($result) > 0) {
											echo '<table border = "0"><tr><td><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
											while($row = mysqli_fetch_assoc($result)){
												// Splitting
												$splitPost = explode(" ", $row['post']);
												$sizeOfSplit = count($splitPost);
												$k = 0;
												$titles = array();
												$title = $splitPost[0];
												if($sizeOfSplit > 20) {
													for($i = 1; $i < 10; $i++){
														$title = $title." ".$splitPost[$i];
													}
													$titles[$k] = $title;
												}
												// End Splitting
												
												// Check For single long word
												$tooLong = false;
												$count = 0;
												foreach($splitPost as $split) {
													if(strlen($split) > 30) {
														$tooLong = true;
														break;
													}
													$count += 1;
												}
												$titleLong = '';
												if($count <= 20 && $tooLong) {
													if($count == 0) {
														for($i = 0; $i < 20; $i++) {
															$titleLong = $titleLong.$splitPost[0][$i];
														}
													} else {
														$titleLong = $splitPost[0];
														for($i = 1; $i < $count; $i++) {
															$titleLong = $titleLong." ".$splitPost[$i];
														}
													}
												}
												// End of check
												
												echo "<tr>
												<td width = '500'><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."....</font></a>
													<div id='modal-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title.... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."....</font></a>
													<div id='modal-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong.... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else {
													echo "<font size='4' style='font-family:segoe ui;'>".$row['post']."</font>";
												}
												echo "</b></font> <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = '4'>- By <font size='3' style='font-family:segoe ui; letter-spacing:1px;'>";
												echo "<font color = '#794916'><b>Admin</b></font>";
												echo " on <font color = '#794916'><b>".htmlspecialchars($row['postedOn'])."</b></font></font></font><br /><br />";
												echo "<font size = '3'><b><a href = 'adminDelPost.php?postid=".$row['post_id']."' title = 'Delete Post' style = 'text-decoration : none;'><img src = 'cross.png' width = '13' height = '13' valign = 'middle' />&nbsp;Delete</a>&nbsp;&nbsp;<b><font color = '#aaa'>|</font></b>&nbsp;&nbsp;<a href = 'edadpost.php?postid=".$row['post_id']."' title = 'Edit Post' style = 'text-decoration : none;'><img src = 'pencil.png' width = '20' height = '20' valign = 'middle' />&nbsp;Edit</a></b></font>";
												echo "</td>
												</tr>
												<tr>
												<td colspan = '2'><hr size = '2' color = '#ccc' width = '640' /></td>
												</tr>";
												$k = $k + 1;
												$key = $key + 1;
											}
											echo '</table></div>
											<!-- Mod Ends -->';
											echo '<br /><br />';
											if($pages > 1 && $page <= $pages) {
												echo '<center><font size = "4">';
												for($x = 1; $x <= $pages; $x++) {
													echo '<a href = "?pages='.$x.'" style = "text-decoration:none;">';
													if($page == $x){
														echo '<span style = "background-color:hsl(0, 0%, 90%);padding-left:5px;padding-right:5px;padding-top:3px;padding-bottom:3px;"><b>'.$x.'</b></span>';
													} else {
														echo $x;
													}
													echo '</a> ';
												}
												echo '</font></span></center>';
											}
										} else {
											echo "<font size = '3'><b>No Posts</b></font>";
										}
									} else {
										header("Location: error.php?ref=imadmin"); // Err page
									}
									} else {
										header("Location: error.php?ref=imadmin"); // Err page
									}
									echo '</div>
								</div></td>
					</tr>
					
					
						</tbody></table></td>
					</tr>
				</tbody></table>
			</div> <!-- Frame 1 -->
			
	<div id="view3">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top">
						<table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)"> 
									<!-- Modification -->
									<div class="heading-line">
									</div>
									<ul class = form>
									<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
										<br /><font size = "3"><u><center>RECENT CONTRIBUTIONS<center></u></font>&nbsp;
									</label>
									</ul>
									<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;">';
									$perPage = 6; // No. of posts per page
									$key = 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM feed");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['page_cont'])) ? (int)$_GET['page_cont'] : 1;
									$start = ($page - 1) * $perPage;
									$query1 = "SELECT * FROM feed ORDER BY post_id DESC LIMIT $start, $perPage";
									$result1 = mysqli_query($cxn, $query1);
									if($result1){
										if(mysqli_num_rows($result1) > 0) {
											echo '<table border = "0"><tr><td><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
											while($row = mysqli_fetch_assoc($result1)){
												// Splitting
												$splitPost = explode(" ", $row['post']);
												$sizeOfSplit = count($splitPost);
												$k = 0;
												$titles = array();
												$title = $splitPost[0];
												if($sizeOfSplit > 20) {
													for($i = 1; $i < 10; $i++){
														$title = $title." ".$splitPost[$i];
													}
													$titles[$k] = $title;
												}
												// End Splitting
												
												// Check For single long word
												$tooLong = false;
												$count = 0;
												foreach($splitPost as $split) {
													if(strlen($split) > 30) {
														$tooLong = true;
														break;
													}
													$count += 1;
												}
												$titleLong = '';
												if($count <= 20 && $tooLong) {
													if($count == 0) {
														for($i = 0; $i < 20; $i++) {
															$titleLong = $titleLong.$splitPost[0][$i];
														}
													} else {
														$titleLong = $splitPost[0];
														for($i = 1; $i < $count; $i++) {
															$titleLong = $titleLong." ".$splitPost[$i];
														}
													}
												}
												// End of check
												
												echo "<tr>
												<td width = '500'><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal1-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."....</font></a>
													<div id='modal1-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title.... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal1-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."....</font></a>
													<div id='modal1-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong.... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else {
													echo "<font size='4' style='font-family:segoe ui;'>".$row['post']."</font>";
												}
												echo "</b></font> <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = '4'>- By <font size='3' style='font-family:segoe ui; letter-spacing:1px;'><a style = 'text-decoration : underline;' href = 'adminviewProfile.php?reg_no=".htmlspecialchars($row['reg_no'])."'><b>".htmlspecialchars($row['postedBy'])."</b></a> on <font color = '#794916'><b>".htmlspecialchars($row['postedOn'])."</b></font></font></font><br /><br />
												<font size = '3'><b><a href = 'adminDelFeed.php?postid=".$row['post_id']."' title = 'Delete Post' style = 'text-decoration : none;'><img src = 'cross.png' width = '13' height = '13' valign = 'middle' />&nbsp;Delete</a></b></font>";
												echo "</td>
												</tr>
												<tr>
												<td colspan = '2'><hr size = '2' color = '#ccc' width = '640' /></td>
												</tr>";
												$k = $k + 1;
												$key = $key + 1;
											}
											echo '</table></div>
											<!-- Mod Ends -->';
											echo '<br /><br />';
											if($pages > 1 && $page <= $pages) {
												echo '<center><font size = "4">';
												for($x = 1; $x <= $pages; $x++) {
													echo '<a href = "?page_cont='.$x.'" style = "text-decoration:none;">';
													if($page == $x){
														echo '<span style = "background-color:hsl(0, 0%, 90%);padding-left:5px;padding-right:5px;padding-top:3px;padding-bottom:3px;"><b>'.$x.'</b></span>';
													} else {
														echo $x;
													}
													echo '</a> ';
												}
												echo '</font></span></center>';
											}
										} else {
											echo "<font size = '3'><b>No Posts</b></font>";
										}
									} else {
										header("Location: error.php?ref=imadmin"); // Err page
									}
									} else {
										header("Location: error.php?ref=imadmin"); // Err page
									}
									echo '</div>
									</div>
								</td>
							</tr>
						</table>
					</td></tr>
				</tbody></table>
			</div>	
            <div id="view4">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody><tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<form action = "adminsett.php" name = "adminSettings" method = "post" onSubmit = "return fpass();">
									<ul class="form">
										<li>
											<label>
												<font size = "2">Administrator settings : </font>&nbsp;
												</br></br></br>
											</label>
											
											
											<div align="left">
											<table width="672" height="93" border="0" cellpadding="3">
										<tr><td>
												<label>
													<b><font size = "2">Password : </font></b>
												</label>
												<br><br>
											<input name="pass" type="password" maxlength="50" placeholder="Password Minimum Six Chracter" style="width:230px;height:20px;padding-left:3px;" onBlur = "return fpwd();" />
											
											</br></br>
										</td></tr>
																																
										<tr><td>
											<label>
													<b><font size = "2">Re-Enter Password : </font></b>
												</label><br><br>
											<input type="password" maxlength="50" placeholder="Repeat Password" name = "cpass" style="width:230px;height:20px;padding-left:3px;" onBlur = "return fpass();" />
										</td></tr>
											</div>
			
											</table>
												</div>
											
										</li>
										<li></li>
										<li align = "center">
										</br>
											<table border = "0" width = "510">
											<tr>
											<td align = "left">
											<input type= "submit" name="submit" value = "Update" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /> 
											</td>
											</tr>
											</table>  
										</li>
									</ul></form><br>
									<div class="heading-line">
									</div>
									</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
            </div> <!-- Frame 3 -->
        </div>
    <!-- Setting Tab </div> -->
		<br />
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

	header("Location: error.php?ref=imadmin"); // Err page

}

} else {

	ob_start();
	session_start();
	unset($_SESSION['loggedIn']);
	session_destroy();
	header("Location: index.php"); // Logout

}

?>