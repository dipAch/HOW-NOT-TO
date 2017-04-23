<?php

	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		@$sett = mysqli_real_escape_string($cxn, $_POST['showMobile']);
		if(!empty($sett)) {
			$query = "UPDATE al_det SET phonePartial = '$sett' where reg_no = '$reg'";
			$result = mysqli_query($cxn, $query);
			if($result) {
				$query = "SELECT * FROM al_det WHERE reg_no = '$reg'";
				$result = mysqli_query($cxn, $query);
				if($result){	// In case of bad Cookie
				$row = mysqli_fetch_assoc($result);
				extract($row);
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
<link href="css/tabcontent1.css" rel="stylesheet" type="text/css" />
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
							<li><font color="white">My Profile</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="testmep.php">Home</a></div>
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
</div><br />
<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:10px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;">
		<br />
	</div>
</form><br /><br />
		        <table width="300" height="250" border="0" cellpadding="15" style=" border-right: solid 3px #DDD; border-left: solid 3px #DDD; border-bottom:
            solid 3px #DDD; border-radius: 20px;">
			<br />
			<tr>
              <td width="300" height="100" ><img src = "photo/'.$photo_id.'" width="180" height="200" usemap = "#editpic" />
			  </td>
			  <!-- Image Map -->
			  <map name = "editpic">
				<area shape = "rect" coords = "0, 0, 200, 220" title = "Edit Profile Picture" href = "accountSettings.php" />
			  </map>
			<td>
			<table width="490" height="130" border="0">
			<br />
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="5" align="left"color="bf7678"><strong>'.ucwords($name).'</strong></font></em></td>
            </tr>
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="4">'.$branch.'</font></em></td>
            </tr>
			<tr>
                <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td height="15"><em><font size ="4">'.$email.'</font></em></td>
            </tr>
			</table>
			<br/>
			<br/>
			</td> 
			</tr>
				</table>
<br/>
<br/>
<div class="main_head">
									<span id = "success"><img src = "tick.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;&nbsp;<font size = "2" color = "green">SETTINGS SUCCESSFULLY APPLIED AND SAVED</font></span>&nbsp;
							  </div>
<br /><br />
			<ul class="tabs" data-persist="true">
            <li><a href="#view1">Extended Info</a></li>
            <li><a href="#view2">Current Details</a></li>
            <li><a href="#view3">Privacy Settings</a></li>
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
									</div>
													
														<table width="90%" height="165" border="0">
            
			<tr><td height="23" width = "35%"><span class="style1"><font size="3"><strong>Date Of Birth : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$dob.'</font></em></td>
			 </tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Website : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.strtolower($website).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Degree : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.ucfirst(strtolower($degree)).'</font></em></td>
            </tr>
			<tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Contact : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$mobile.'</font></em></td>
            </tr>
            <br/>
	 </td> 
</table>
									<div class="heading-line">
									</div>																
									</ul>
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
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<table width="90%" height="165" border="0">
			<tr>
			  <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current Address : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547" >'.ucwords($addr).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current country : </strong></font></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" align="left" color="#bf7547">'.$country.'</font></em></td>
            </tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current Job : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.ucwords($job).'</font></em></td>
			</tr>
			<tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Organization : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$organisation.'</font></em></td>
			</tr>
            <br/>
	 </td>
</table>
		<div class="heading-line">
									</div>	
									</ul>
									</div>
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
									<link href="regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br />
									<table width="450" height="120" border="0">
									<form name = "privacysettings" action = "privacySettings.php" method = "post">
			<tr><td><span class="style1"><font size="3" color="#bf7547"><strong>Set Your Privacy : </strong></span></td>
              <td align = "left">&nbsp;&nbsp;<input type = "checkbox" name = "privacy" value = "';
			  if($partial == "yes") {
				echo "no";
			  } else {
				echo "yes";
			  }
			  echo '">&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2"><strong>';
			  if($partial == "no") {
				echo 'Show Partial Info';
			  } else {
				echo 'Show Full Info';
			  }
			  echo '</strong></font></td><td align = "right"><input type= "submit" name="submit" value = "Save" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /></td>
			</tr>
			</form>
			<form name = "privacysettingsMobile" action = "privacySettingsMobile.php" method = "post">
			<tr>
			<td></td><td align = "left">&nbsp;&nbsp;<input type = "checkbox" name = "showMobile" value = "';
			  if($phonePartial == "yes") {
				echo "no";
			  } else {
				echo "yes";
			  }
			  echo '">&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2"><strong>';
			  if($phonePartial == "no") {
				echo 'Don\'t Show Contact Info';
			  } else {
				echo 'Show Contact Info';
			  }
			  echo '</strong></font></td><td align = "right"><input type= "submit" name="submit" value = "Save" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /></td>
			</tr>
			</form>
	 </td> 
</table>
		<div class="heading-line">
									</div>
									</ul>
									</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
            </div> <!-- Frame 3 -->
        </div>
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

	header("Location: error.php?ref=testmep"); // Err page

}
			} else {
				header("Location: error.php?ref=testmep"); // Err Page
			}
		} else {
			$err = true;
			$query = "SELECT * FROM al_det WHERE reg_no = '$reg'";
			$result = mysqli_query($cxn, $query);
			if($result){	// In case of bad Cookie
			$row = mysqli_fetch_assoc($result);
			extract($row);
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
<link href="css/tabcontent1.css" rel="stylesheet" type="text/css" />
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
							<li><font color="white">My Profile</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="testmep.php">Home</a></div>
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
</div><br />
<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:10px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;">
		<br />
	</div>
</form><br /><br />
		        <table width="300" height="250" border="0" cellpadding="15" style=" border-right: solid 3px #DDD; border-left: solid 3px #DDD; border-bottom:
            solid 3px #DDD; border-radius: 20px;">
			<br />
			<tr>
              <td width="300" height="100" ><img src = "photo/'.$photo_id.'" width="180" height="200" usemap = "#editpic" />
			  </td>
			  <!-- Image Map -->
			  <map name = "editpic">
				<area shape = "rect" coords = "0, 0, 200, 220" title = "Edit Profile Picture" href = "accountSettings.php" />
			  </map>
			<td>
			<table width="490" height="130" border="0">
			<br />
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="5" align="left"color="bf7678"><strong>'.ucwords($name).'</strong></font></em></td>
            </tr>
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="4">'.$branch.'</font></em></td>
            </tr>
			<tr>
                <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td height="15"><em><font size ="4">'.$email.'</font></em></td>
            </tr>
			</table>
			<br/>
			<br/>
			</td> 
			</tr>
				</table>
  <br/>
  <br/>';
  if($err) {
echo '<div class="main_head">
									<span id = "error"><img src = "cross.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2" color = "red"><b>COULD NOT APPLY SETTINGS</b></font></span>&nbsp;
							  </div>';
							  }
		 echo '<br /><br /><ul class="tabs" data-persist="true">
            <li><a href="#view1">Extended Info</a></li>
            <li><a href="#view2">Current Details</a></li>
            <li><a href="#view3">Privacy Settings</a></li>
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
									</div>
													
														<table width="90%" height="165" border="0">
            
			<tr><td height="23" width = "35%"><span class="style1"><font size="3"><strong>Date Of Birth : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$dob.'</font></em></td>
			 </tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Website : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.strtolower($website).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Degree : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.ucfirst(strtolower($degree)).'</font></em></td>
            </tr>
			<tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Contact : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$mobile.'</font></em></td>
            </tr>
            <br/>
	 </td> 
</table>
									<div class="heading-line">
									</div>																
									</ul>
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
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br>
									<table width="90%" height="165" border="0">
			<tr>
			  <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current Address : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547" >'.ucwords($addr).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current country : </strong></font></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" align="left" color="#bf7547">'.$country.'</font></em></td>
            </tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current Job : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.ucwords($job).'</font></em></td>
			</tr>
			<tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Organization : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.$organisation.'</font></em></td>
			</tr>
            <br/>
	 </td>
</table>
		<div class="heading-line">
									</div>	
									</ul>
									</div>
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
									<link href="regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div><br />
									<table width="450" height="120" border="0">
									<form name = "privacysettings" action = "privacySettings.php" method = "post">
			<tr><td><span class="style1"><font size="3" color="#bf7547"><strong>Set Your Privacy : </strong></span></td>
              <td align = "left">&nbsp;&nbsp;<input type = "checkbox" name = "privacy" value = "';
			  if($partial == "yes") {
				echo "no";
			  } else {
				echo "yes";
			  }
			  echo '">&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2"><strong>';
			  if($partial == "no") {
				echo 'Show Partial Info';
			  } else {
				echo 'Show Full Info';
			  }
			  echo '</strong></font></td><td align = "right"><input type= "submit" name="submit" value = "Save" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /></td>
			</tr>
			</form>
			<form name = "privacysettingsMobile" action = "privacySettingsMobile.php" method = "post">
			<tr>
			<td></td><td align = "left">&nbsp;&nbsp;<input type = "checkbox" name = "showMobile" value = "';
			  if($phonePartial == "yes") {
				echo "no";
			  } else {
				echo "yes";
			  }
			  echo '">&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2"><strong>';
			  if($phonePartial == "no") {
				echo 'Don\'t Show Contact Info';
			  } else {
				echo 'Show Contact Info';
			  }
			  echo '</strong></font></td><td align = "right"><input type= "submit" name="submit" value = "Save" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /></td>
			</tr>
			</form>
	 </td> 
</table>
		<div class="heading-line">
									</div>
									</ul>
									</div>
								</div></td>
							</tr>
						</tbody></table></td>
					</tr>
				</tbody></table>
            </div> <!-- Frame 3 -->
        </div>
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

	header("Location: error.php?ref=testmep"); // Err page

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