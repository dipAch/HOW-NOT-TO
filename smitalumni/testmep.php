<?php

include 'connection.php';
include 'announcement.php';
include 'copyrt.php';
	
if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	$query = "SELECT * FROM al_det WHERE reg_no = '$reg'";
	$result = mysqli_query($cxn, $query);
	if($result) {
	if(mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	extract($row);
	$query_msg = "SELECT COUNT('read_status') FROM msg_pool WHERE msg_to = '$reg' AND read_status = 1 AND copy_for = '$reg'";
	$result_msg = mysqli_query($cxn, $query_msg);
	if($result_msg) {
		$row_msg = mysqli_fetch_row($result_msg);
		// Birthday Wishing Mechanism
		$birthday_query = "SELECT * FROM upcoming_birthday WHERE reg_no = '$reg'";
		$result_birthday = mysqli_query($cxn, $birthday_query);
		if($result_birthday){
			$row_birthday = mysqli_fetch_row($result_birthday);
			$wish = false;
			$date_split = explode("/", $row_birthday[2]);
			$today_date = date("d");
			$month = date("m");
			if((int)$today_date == (int)$date_split[0]) {
				if((int)$month == (int)$date_split[1]) {
					if($row_birthday[3] == "0") {
						$wish = true;
						$wish_stat_query = "UPDATE upcoming_birthday SET wish_status = 1 WHERE reg_no = '$reg'";
						$result_wish_stat = mysqli_query($cxn, $wish_stat_query);
						if(!$result_wish_stat){
							header("Location: error.php?ref=testmep"); // Err Page
							exit();
						}
					}
				}
			}
		// Birthday Wishing Mechanism Ends
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
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="jS/buttons.js"></script>
<script type="text/javascript" src="jS/loader.js"></script>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/pfold.css" />
<link rel="stylesheet" type="text/css" href="css/custom2.css" />
<script type="text/javascript" src="jS/modernizr.custom.79639.js"></script>

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
						    <li><font color="white">Home</font></li>
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
								<div class="mid"><a href="downpage.php">Downloads</a></div>
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
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>';
					if($wish) {
						echo '<br /><b><font size = "3" style = "color : #b57f47;">&nbsp;&nbsp;<u><center>Click Below...</center></u></font></b>
						<section class="main demo-2">
						<div id="grid" class="grid clearfix">
						<div class="uc-container">
						<div class="uc-initial-content" style = "border-radius: 10px;">
							<center><img src="gift.png" alt="image01" width = "180" height = "130" style = "padding-top : 10px;" /></center>
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<center><img src="gift.png" alt="image01-large" width = "400" height = "290" /></center>
							<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div>
					</div>
					</section>';
					}
				echo '</div>
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
		<input type="text" name="search_friend" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><br />
		<!-- Setting Tab <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;"> -->
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Contribute</a></li>
            <li><a href="#view2">Achievements</a></li>
            <li><a href="#view3">Post Job</a></li>
			<li><a href="#view4">Admin Posts</a></li>
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
									</div><br>
									<form action = "forumProcess1.php" name = "contribute" method = "post">
									<ul class="form">
										<li>
											<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
												<font size = "2">CONTRIBUTE ARTICLE :</font>&nbsp;
											</label>
											<br /><br />
											<textarea name="contribute" placeholder = "Should not exceed 1000 Characters and be less than 35 characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:150px;width:500px;padding-top:5px;padding-left:5px;"></textarea>
										</li>
										<li></li>
										<li align = "center">
											<table border = "0" width = "510">
											<tr>
											<td align = "right">
											<input type= "submit" name="submit" value = "Contribute" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none; cursor : pointer;" /> 
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
										<br /><font size = "3"><u><center>RECENT CONTRIBUTIONS<center></u></font>&nbsp;
									</label>
									</ul>';
									$perPage = 6; // No. of posts per page
									$key = 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM feed");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
									$start = ($page - 1) * $perPage;
									$query1 = "SELECT * FROM feed ORDER BY post_id DESC LIMIT $start, $perPage";
									$result1 = mysqli_query($cxn, $query1);
									if($result1){
										if(mysqli_num_rows($result1) > 0) {
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px; box-shadow : 1px 3px 8px 0px;"><table border = "0"><tr><td colspan = "2"><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
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
												<td width = '40' valign = 'top'>"; 
												// Check For Liked
												$query_like = "SELECT * FROM like_acc WHERE context = 'contribute'";
												$result_like = mysqli_query($cxn, $query_like);
												if($result_like) {
													if(mysqli_num_rows($result_like)) {
														$flag = 0;
														while($row_like = mysqli_fetch_row($result_like)) {
															if($row['post_id'] == $row_like[0] && $row_like[1] == $reg) {
																$flag = 1;
																break;
															}
														}
														if($flag) {
															echo "<a href = '#' title = 'You Already Liked This Article'><img src = 'likegreenhover.png' width = '23' height = '23' /></a>";
														} else {
															echo "<a href = 'like.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
														}
													} else {
														echo "<a href = 'like.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
													}
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												// Check For Liked Complete
												echo "<br /><br /><span style = 'background-color:hsl(0, 0%, 70%);padding-left:6px;padding-right:6px;padding-top:7px;padding-bottom:3px;'><b><font color = 'white' size = '3'>".$row['likes']."</font></b></span></td><td width = '500'><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' data-reveal-id='modal-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."...</font></a>
													<div id='modal-".$key."' class='reveal-modal' >											
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";											
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."...</font></a>
													<div id='modal-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else {
													echo "<font size='4' style='font-family:segoe ui;'>".$row['post']."</font>";
												}
												echo "</b></font> <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = '4'>- By <font size='3' style='font-family:segoe ui; letter-spacing:1px;'>";
												if($reg == $row['reg_no']) {
													echo "<font color = '#794916'><b>You</b></font>";
												} else {
													echo "<a style = 'text-decoration : underline;' title = '$branch' href = 'viewProfile.php?reg_no=".htmlspecialchars($row['reg_no'])."'><b>".htmlspecialchars($row['postedBy'])."</b></a>";
												}
												echo " on <font color = '#794916'><b>".htmlspecialchars($row['postedOn'])."</b></font></font></font><br /><br />";
												if($reg == $row['reg_no']) {
													echo "<font size = '3'><b><a href = 'delPost.php?postid=".$row['post_id']."' title = 'Delete Post' style = 'text-decoration : none;'><img src = 'cross.png' width = '13' height = '13' valign = 'middle' />&nbsp;Delete</a>&nbsp;&nbsp;<b><font color = '#aaa'>|</font></b>&nbsp;&nbsp;<a href = 'edcontr.php?postid=".$row['post_id']."' title = 'Edit Post' style = 'text-decoration : none;'><img src = 'pencil.png' width = '20' height = '20' valign = 'middle' />&nbsp;Edit</a></b></font>";
												}
												echo "</td>
												</tr>
												<tr><td colspan = '2' style = 'padding-left : 50px;'><hr size = '2' color = '#ccc' /></td></tr>
												<tr><td colspan = '2' style = 'padding-left : 50px;'><font size = '4' color = '#b57f47'></b><u>Comments</u> <font size = '3'>( Per Post Max Allowed <u>5</u> )</font> - ";
												$feed_comment_limit = 0;
												$feed_id = $row['post_id'];
												$count_comment = "SELECT COUNT('comment') FROM feed_comment WHERE feed_id = $feed_id";
												$count_comment_result = mysqli_query($cxn, $count_comment);
												if($count_comment_result) {
													$row_comment_count = mysqli_fetch_row($count_comment_result);
													echo $row_comment_count[0];
													if($row_comment_count[0] == 1) {
														echo ' Comment';
													} else {
														echo ' Comments';
													}
													$feed_comment_limit = $row_comment_count[0];
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												echo "<b></font><br /></td></tr>";
												/* Commenting System */
												$comment_query = "SELECT * FROM feed_comment WHERE feed_id = $feed_id";
												$comment_result = mysqli_query($cxn, $comment_query);
												if($comment_result) {
													if(mysqli_num_rows($comment_result))	{
														while($row_comment = mysqli_fetch_row($comment_result)) {
															echo "<tr>
																	<td colspan = '2' style = 'padding-left : 50px;'><div style = 'background-color:hsl(0, 0%, 88%); border-radius: 10px; padding:10px 20px 2px 20px; box-shadow : 2px 2px 7px 0px;'><font style = 'weight : bold; font-size : 14px; color:#b57f47;'><b>$row_comment[2]</b></font>
																	<table border = '0'>
																	<tr><td colspan = '3'></td></tr>
																	<tr>
																		<td>";
															// Check For Comment Liked
															$query_comment_like = "SELECT * FROM comment_like_acc WHERE context = 'contribute'";
															$result_comment_like = mysqli_query($cxn, $query_comment_like);
															if($result_comment_like) {
																if(mysqli_num_rows($result_comment_like)) {
																	$flag = 0;
																	while($row_comment_like = mysqli_fetch_row($result_comment_like)) {
																		if($row_comment[0] == $row_comment_like[0] && $row_comment_like[1] == $reg) {
																			$flag = 1;
																			break;
																		}
																	}
																	if($flag) {
																		echo "<a href = '#' title = 'You Already Liked This Comment'>Liked</a> - <font color = '#b57f47'><b>".$row_comment[4]."</b></font> | ";
																	} else {
																		echo "<a href = 'feed_like_comment.php?postid=".$row_comment[0]."' title = 'Like Comment'>Like</a> - <font color = '#b57f47'><b>".$row_comment[4]."</b></font> | ";
																	}
																} else {
																	echo "<a href = 'feed_like_comment.php?postid=".$row_comment[0]."' title = 'Like Comment'>Like</a> - <font color = '#b57f47'><b>".$row_comment[4]."</b></font> | ";
																}
															} else {
																header("Location: error.php?ref=testmep"); // Err page
															}
															// Check For Comment Liked Complete
															echo "		</td>
																		";
															if($reg == $row_comment[3]) {
																echo "<td><a href = '#'><img src = 'pencil.png' width = '15' height = '15' valign = 'middle' />&nbsp;Edit </a>| </td>";
															}
															if($reg == $row_comment[3] || $reg == $row['reg_no']) {
																echo "<td><a href = '#'><img src = 'cross.png' width = '15' height = '15' valign = 'middle' />&nbsp;Delete</a></td>";
															}
															echo "</tr>
																  </table>
																  </div></td>
																  </tr>";
														}
													}
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												/* Commenting System */ 
												if($feed_comment_limit < 5) {
												echo "
												<tr>
													<td colspan = '2' style = 'padding-left : 50px;'>
														<form action = 'comments.php' method = 'post' name = 'comment_form'>
														<table border = '0'>
														<tr><td>
														<textarea name='comment' placeholder = 'Should not exceed 50 Chars and be less than 2 Chars...' rows='20' cols='20' id='ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress' class='required' style='border:solid 2px #DDD;height:30px;width:485px;padding-top:5px;padding-left:5px;'></textarea>
														</td></tr>
														<tr><td align = 'right'>
														<input type= 'submit' name='submit' value = 'Comment' style='color : white; letter-spacing : 1px; background-image : url(\"submit.gif\"); font-weight:bold; width:85px; height : 27px; border-radius:2px; border-width : 1px;outline:none; cursor : pointer;' />
														</td></tr>
														</table>
														</form>
													</td>
												</tr>";
												}
												echo "
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
													echo '<a href = "?page='.$x.'" style = "text-decoration:none;">';
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
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><font size = "3" style = "color : green;"><b>No Posts to display...</b></font></div>';
										}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									echo '</div>
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
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<form action = "forumProcess2.php" name = "successStory" method = "post">
									<ul class="form">
										<li>
											<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
												<font size = "2">SHARE YOUR SUCCESS STORY :</font>&nbsp;
											</label>
											<br /><br />
											<textarea name="stories" placeholder = "Should not exceed 1000 Characters and be less than 35 characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:150px;width:500px;padding-top:5px;padding-left:5px;"></textarea>
										</li>
										<li></li>
										<li align = "center">
											<table border = "0" width = "510">
											<tr>
											<td align = "right">
											<input type= "submit" name="submit" value = "Share" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none; cursor : pointer;" /> 
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
										<br /><font size = "3"><u><center>RECENT STORIES<center></u></font>&nbsp;
									</label>
									</ul>';
									$perPage = 6; // No. of posts per page
									$key= 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM stories");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['pages_ach'])) ? (int)$_GET['pages_ach'] : 1;
									$start = ($page - 1) * $perPage;
									$query = "SELECT * FROM stories ORDER BY post_id DESC LIMIT $start, $perPage";
									$result = mysqli_query($cxn, $query);
									if($result){
										if(mysqli_num_rows($result) > 0) {
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><table border = "0"><tr><td colspan = "2"><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
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
												<td width = '40' valign = 'top'>";
												// Check For Liked
												$query_like1 = "SELECT * FROM like_acc WHERE context = 'successStory'";
												$result_like1 = mysqli_query($cxn, $query_like1);
												if($result_like1) {
													if(mysqli_num_rows($result_like1)) {
														$flag = 0;
														while($row_like1 = mysqli_fetch_row($result_like1)) {
															if($row['post_id'] == $row_like1[0] && $row_like1[1] == $reg) {
																$flag = 1;
																break;
															}
														}
														if($flag) {
															echo "<a href = '#' title = 'You Already Liked This Article'><img src = 'likegreenhover.png' width = '23' height = '23' /></a>";
														} else {
															echo "<a href = 'like1.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
														}
													} else {
														echo "<a href = 'like1.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
													}
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												// Check For Liked Complete
												echo "<br /><br /><span style = 'background-color:hsl(0, 0%, 70%);padding-left:6px;padding-right:6px;padding-top:7px;padding-bottom:3px;'><b><font color = 'white' size = '3'>".$row['likes']."</font></b></span></td><td><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' data-reveal-id='mymodal-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."...</font></a>
													<div id='mymodal-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='mymodal-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."...</font></a>
													<div id='mymodal-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else {
													echo "<font size='4' style='font-family:segoe ui;'>".$row['post']."</font>";
												}
												echo "</b></font> <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = '4'>- By <font size='3' style='font-family:segoe ui; letter-spacing:1px;'>";
												if($reg == $row['reg_no']) {
													echo "<font color = '#794916'><b>You</b></font>";
												} else {
													echo "<a style = 'text-decoration : underline;' title = '$branch' href = 'viewProfile.php?reg_no=".htmlspecialchars($row['reg_no'])."'><b>".htmlspecialchars($row['postedBy'])."</b></a>";
												}
												echo " on <font color = '#794916'><b>".htmlspecialchars($row['postedOn'])."</b></font></font></font><br /><br />";
												if($reg == $row['reg_no']) {
													echo "<font size = '3'><b><a href = 'delPost1.php?postid=".$row['post_id']."' title = 'Delete Post' style = 'text-decoration : none;'><img src = 'cross.png' width = '13' height = '13' valign = 'middle' />&nbsp;Delete</a>&nbsp;&nbsp;<b><font color = '#aaa'>|</font></b>&nbsp;&nbsp;<a href = 'edsucc.php?postid=".$row['post_id']."' title = 'Edit Post' style = 'text-decoration : none;'><img src = 'pencil.png' width = '20' height = '20' valign = 'middle' />&nbsp;Edit</a></b></font>";
												}
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
													echo '<a href = "?pages_ach='.$x.'" style = "text-decoration:none;">';
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
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><font size = "3" style = "color : green;"><b>No Posts to display...</b></font></div>';
										}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									echo '</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
			</div> <!-- Frame 2 -->
            <div id="view3">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody><tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<form action = "forumProcess3.php" name = "postJob" method = "post">
									<ul class="form">
										<li>
											<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
												<font size = "2">POST JOB DETAILS :</font>&nbsp;
											</label>
											<br /><br />
											<textarea name="jobs" placeholder = "Should not exceed 400 Characters and be less than 25 characters" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border:solid 2px #DDD;height:150px;width:500px;padding-top:5px;padding-left:5px;"></textarea>
										</li>
										<li></li>
										<li align = "center">
											<table border = "0" width = "510">
											<tr>
											<td align = "right">
											<input type= "submit" name="submit" value = "Post" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none; cursor : pointer;" /> 
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
										<br /><font size = "3"><u><center>RECENT JOB POSTS<center></u></font>&nbsp;
									</label>
									</ul>';
									$perPage = 6; // No. of posts per page
									$key = 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM jobs");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['pages_job'])) ? (int)$_GET['pages_job'] : 1;
									$start = ($page - 1) * $perPage;
									$query = "SELECT * FROM jobs ORDER BY post_id DESC LIMIT $start, $perPage";
									$result = mysqli_query($cxn, $query);
									if($result){
										if(mysqli_num_rows($result) > 0) {
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><table border = "0"><tr><td colspan = "2"><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
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
												<td width = '40' valign = 'top'>";
												// Check For Liked
												$query_like2 = "SELECT * FROM like_acc WHERE context = 'jobPost'";
												$result_like2 = mysqli_query($cxn, $query_like2);
												if($result_like2) {
													if(mysqli_num_rows($result_like2)) {
														$flag = 0;
														while($row_like2 = mysqli_fetch_row($result_like2)) {
															if($row['post_id'] == $row_like2[0] && $row_like2[1] == $reg) {
																	$flag = 1;
																	break;
															}
														}
														if($flag) {
															echo "<a href = '#' title = 'You Already Liked This Article'><img src = 'likegreenhover.png' width = '23' height = '23' /></a>";
														} else {
															echo "<a href = 'like2.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
														}
													} else {
														echo "<a href = 'like2.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
													}
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												// Check For Liked Complete
												echo "<br /><br /><span style = 'background-color:hsl(0, 0%, 70%);padding-left:6px;padding-right:6px;padding-top:7px;padding-bottom:3px;'><b><font color = 'white' size = '3'>".$row['likes']."</font></b></span></td><td><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='mymodal1-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."...</font></a>
													<div id='mymodal1-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='mymodal1-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."...</font></a>
													<div id='mymodal1-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else {
													echo "<font size='4' style='font-family:segoe ui;'>".$row['post']."</font>";
												}
												echo "</b></font> <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = '4'>- By <font size='3' style='font-family:segoe ui; letter-spacing:1px;'>";
												if($reg == $row['reg_no']) {
													echo "<font color = '#794916'><b>You</b></font>";
												} else {
													echo "<a style = 'text-decoration : underline;' title = '$branch' href = 'viewProfile.php?reg_no=".htmlspecialchars($row['reg_no'])."'><b>".htmlspecialchars($row['postedBy'])."</b></a>";
												}
												echo " on <font color = '#794916'><b>".htmlspecialchars($row['postedOn'])."</b></font></font></font><br /><br />";
												if($reg == $row['reg_no']) {
													echo "<font size = '3'><b><a href = 'delPost2.php?postid=".$row['post_id']."' title = 'Delete Post' style = 'text-decoration : none;'><img src = 'cross.png' width = '13' height = '13' valign = 'middle' />&nbsp;Delete</a>&nbsp;&nbsp;<b><font color = '#aaa'>|</font></b>&nbsp;&nbsp;<a href = 'edjob.php?postid=".$row['post_id']."' title = 'Edit Post' style = 'text-decoration : none;'><img src = 'pencil.png' width = '20' height = '20' valign = 'middle' />&nbsp;Edit</a></b></font>";
												}
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
													echo '<a href = "?pages_job='.$x.'" style = "text-decoration:none;">';
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
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><font size = "3" style = "color : green;"><b>No Posts to display...</b></font></div>';
										}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									echo '</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
			</div> <!-- Frame 3 -->
			<div id="view4">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody><tr>
								<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<!-- Modification -->
									<br>
									<div class="heading-line">
									</div>
									<ul class = form>
									<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
										<br /><font size = "3"><u><center>ADMIN POSTS<center></u></font>&nbsp;
									</label>
									</ul>';
									$perPage = 6; // No. of posts per page
									$key = 1; // For Updating Posts
									$noOfRecords = mysqli_query($cxn, "SELECT COUNT('post_id') FROM ad_post");
									if($noOfRecords) {
									$row1 = mysqli_fetch_row($noOfRecords);
									$pages = ceil($row1[0] / $perPage);
									//echo "Total Pages : ".$pages;
									$page = (isset($_GET['page_ad'])) ? (int)$_GET['page_ad'] : 1;
									$start = ($page - 1) * $perPage;
									$query = "SELECT * FROM ad_post ORDER BY post_id DESC LIMIT $start, $perPage";
									$result = mysqli_query($cxn, $query);
									if($result){
										if(mysqli_num_rows($result) > 0) {
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><table border = "0"><tr><td colspan = "2"><hr size = "2" color = "#ccc" width = "640" /></td></tr>';
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
												<td width = '40' valign = 'top'>";
												// Check For Liked
												$query_like3 = "SELECT * FROM like_acc WHERE context = 'adminPost'";
												$result_like3 = mysqli_query($cxn, $query_like3);
												if($result_like3) {
													if(mysqli_num_rows($result_like3)) {
														$flag = 0;
														while($row_like3 = mysqli_fetch_row($result_like3)) {
															if($row['post_id'] == $row_like3[0] && $row_like3[1] == $reg) {
																$flag = 1;
																break;
															}
														}
														if($flag) {
															echo "<a href = '#' title = 'You Already Liked This Article'><img src = 'likegreenhover.png' width = '23' height = '23' /></a>";
														} else {
															echo "<a href = 'likeadmin.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
														}
													} else {
														echo "<a href = 'likeadmin.php?postid=".$row['post_id']."' title = 'Like Article'><img src = 'likegreen.png' width = '23' height = '23' /></a>";
													}
												} else {
													header("Location: error.php?ref=testmep"); // Err page
												}
												// Check For Liked Complete
												echo "<br /><br /><span style = 'background-color:hsl(0, 0%, 70%);padding-left:6px;padding-right:6px;padding-top:7px;padding-bottom:3px;'><b><font color = 'white' size = '3'>".$row['likes']."</font></b></span></td><td><font size = '5' style = 'color:#b57f47;'><b>";
												if($sizeOfSplit > 20 && $count > 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal2-".$key."'><font size='4' style='font-family:segoe ui;'>".$title."...</font></a>
													<div id='modal2-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$title... -</b></font></h1><br>
														<p><font size='4' color='#3a6d8c'style='font-family:segoe ui;'>".$row['post']."</font></p><br />
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' color='black' style='font-family:segoe ui;'>- By ".$row['postedBy']."</font></p>
														<a class='close-reveal-modal'>&#215;</a>
													</div>";
												} else if($tooLong && $count <= 20) {
													echo "<a href = '#' title = 'Expand Post' style = 'text-decoration : none;' class='big-link'  data-reveal-id='modal2-".$key."'><font size='4' style='font-family:segoe ui;'>".$titleLong."...</font></a>
													<div id='modal2-".$key."' class='reveal-modal' >
														<h1><font size='5' color='black' style='font-family:segoe ui;'> <b>$titleLong... -</b></font></h1><br>
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
													echo '<a href = "?page_ad='.$x.'" style = "text-decoration:none;">';
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
											echo '<div style = "background-color:hsl(0, 0%, 95%); border-radius: 10px; padding:18px 20px 18px 20px;"><font size = "3" style = "color : green;"><b>No Posts to display...</b></font></div>';
										}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									} else {
										header("Location: error.php?ref=testmep"); // Err page
									}
									echo '</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
			</div> <!-- Frame 4 -->
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
<script type="text/javascript">stLight.options({publisher: "67c8613c-31c1-46b7-972b-f342ee4dc00a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "67c8613c-31c1-46b7-972b-f342ee4dc00a", "logo": { "visible": true, "url": "", "img": "", "height": 45}, "ad": { "visible": false, "openDelay": "5", "closeDelay": "0"}, "livestream": { "domain": "", "type": "sharethis"}, "ticker": { "visible": false, "domain": "", "title": "", "type": "sharethis"}, "facebook": { "visible": false, "profile": "sharethis"}, "fblike": { "visible": false, "url": ""}, "twitter": { "visible": false, "user": "sharethis"}, "twfollow": { "visible": false}, "custom": [{ "visible": false, "title": "Custom 1", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 2", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 3", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}], "chicklets": { "items": ["facebook", "twitter", "googleplus", "linkedin", "pinterest"]}};
var st_bar_widget = new sharethis.widgets.sharebar(options);
</script>

<script type="text/javascript" src="jS/jquery1.js"></script>
<script type="text/javascript" src="jS/jquery.pfold.js"></script>
<script type="text/javascript">
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( "#grid > div.uc-container" ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ["right","bottom"]; break;
						case 1 : direction = ["left","bottom"]; break;
						case 2 : direction = ["right","top"]; break;
						case 3 : direction = ["left","top"]; break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						centered : true
					} );

					$item.find( "span.icon-eye" ).on( "click", function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( "span.icon-cancel" ).on( "click", function() {

						pfold.fold();

					} );

				} );
				
			});
</script>

</body></html>';

	} else {
		header("Location: error.php?ref=testmep"); // Err Page
	}
	
	} else {

		header("Location: error.php?ref=testmep"); // Err Page

	}

} else {
	ob_start();
	session_start();
	unset($_SESSION['loggedIn']);
	session_destroy();
	header("Location: index.php"); // Unauthenticated User
}

} else {
	header("Location: error.php?ref=testmep"); // Err page
}

} else {

	ob_start();
	session_start();
	unset($_SESSION['loggedIn']);
	session_destroy();
	header("Location: index.php"); // Logout

}

?>