<?php

include 'announcement.php';
include 'copyrt.php';

if(!(isset($_POST['submit']))){
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>:: Alumni Registration Page :: Sikkim Manipal Institute Of Technology - Sikkim Manipal University (SMU)</title>
<meta name="description" content="Welcome message for Alumni">
<meta name="keywords" content="SMUALUMNI">
<meta name="author" content="Quintessential Software Solutions Pvt Ltd, http://www.qss.in"> 
<meta name="robots" content="index,follow,all"> 
<meta name="revisit-after" content="2 days">
<link rel="icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link href="css/style.css" rel="stylesheet" type="text/css">
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
					<a href = "index.php"><div class="pnl-head">Alumni</div></a>
					<div class="pnl-cont">
						<ul>
							<li class="act">
								<div class="top"></div>
								<div class="mid">Alumni Feedback</div>
								<div class="bot"></div>
							</li>
							<li><a href="index.php">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Feedback Form</div>
</div>
<div class="content">
<!-- FEEDBACK FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">				
	<span class="register-heading">FEEDBACK FORM</span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "generalfeedback.php" name = "feed" method = "post" onSubmit = "checkName(); checkEmail(); checkPhone(); checkReg(); checkPass(); checkState();checkCountry();checkCity();checkInst();checkAddr();File_validator();">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;" onBlur = "checkName();" required>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="sender_email" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;" onBlur = "checkEmail();" required>
			<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<select name="brs" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option selected="selected" value="">----Please Select -----</option>
						<option value="APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)">APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)</option>
						<option value="COMPUTER SCIENCE AND ENGG. (CSE)">COMPUTER SCIENCE AND ENGG. (CSE)</option>
						<option value="CIVIL ENGG. (CE)">CIVIL ENGG. (CE)</option>
						<option value="ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)">ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)</option>
						<option value="ELECTRICAL AND ELECTRONICS ENGG. (EEE)">ELECTRICAL AND ELECTRONICS ENGG. (EEE)</option>
						<option value="INFORMATION TECHNOLOGY (IT)">INFORMATION TECHNOLOGY (IT)</option>
						<option value="MECHANICAL ENGG. (ME)">MECHANICAL ENGG. (ME)</option>
					</select>
		</li>
		<li></li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
				FEEDBACK&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="feedback" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:380px;padding-left:3px;padding-top:3px;" required></textarea>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;" required>
			<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li></li>
		<li>
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />&nbsp;&nbsp;
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
		</li>
	</ul></form>
	</div>
</div></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>   
<!-- FEEDBACK ENDS -->
<span style="font-family: "> <br>
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

}
else
{ 

include 'connection.php';

$name = $_POST['name'];
$sender_email = $_POST['sender_email'];
$branch = $_POST['brs'];
$feedback = $_POST['feedback'];

// Variables for error check

$error = false;
$err_name = false;
$err_email = false;
$err_sender_email_format = false;
$err_brs = false;
$err_feed = false;
$err_reg = false;
$err_format = false;

// Check for mandatory

if(empty($_POST['name'])) {
	$error = true;
	$err_name = true;
}
if(!$error && empty($_POST['sender_email'])) {
	$error = true;
	$err_email = true;
}
if(!$error && !(empty($_POST['sender_email']))){
	if(!(preg_match("/^.+@.+\.[a-z]{2,3}\z/", $_POST['sender_email']))){
		$error = true;
		$err_sender_email_format = true;
	}
}
if(!$error && empty($_POST['brs'])) {
	$error = true;
	$err_brs = true;
}
if(!$error && empty($_POST['feedback'])) {
	$error = true;
	$err_feed = true;
}
if(!$error && empty($_POST['regist'])) {
	$error = true;
	$err_reg = true;
}
if(!$error && !(empty($_POST['regist']))) {
	if(!(preg_match("/^[0-9]+\z/", $_POST['regist']))) {
		$error = true;
		$err_format = true;
	}
}

// Mandatory check complete

// BRANCH ARRAY

$BRANCH = array("APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)",
					"COMPUTER SCIENCE AND ENGG. (CSE)",
					"CIVIL ENGG. (CE)",
					"ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)",
					"ELECTRICAL AND ELECTRONICS ENGG. (EEE)",
					"INFORMATION TECHNOLOGY (IT)",
					"MECHANICAL ENGG. (ME)");

$to = "slide_in@outlook.com";
$subject = "Re : Site Feedback";
$message = "$feedback";
$from = "<b>$name</b>, <b>$sender_email</b>, <b>$branch</b>";
$headers = "From : ".$from;

if(!$error)
{
	mail($to, $subject, $message, $headers);
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>:: Alumni Registration Page :: Sikkim Manipal Institute Of Technology - Sikkim Manipal University (SMU)</title>
<meta name="description" content="Welcome message for Alumni">
<meta name="keywords" content="SMUALUMNI">
<meta name="author" content="Quintessential Software Solutions Pvt Ltd, http://www.qss.in"> 
<meta name="robots" content="index,follow,all"> 
<meta name="revisit-after" content="2 days">
<link rel="icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link href="css/style.css" rel="stylesheet" type="text/css">
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
					<a href = "index.php"><div class="pnl-head">Alumni</div></a>
					<div class="pnl-cont">
						<ul>
							<li class="act">
								<div class="top"></div>
								<div class="mid">Alumni Feedback</div>
								<div class="bot"></div>
							</li>
							<li><a href="index.php">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Feedback Form</div>
</div>
<div class="content">
<!-- FEEDBACK FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">				
	<span class="register-heading"><img src = "tick.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2" color = "green">THANK YOU FOR YOUR FEEDBACK</font></span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "generalfeedback.php" name = "feed" method = "post" onSubmit = "checkName(); checkEmail(); checkPhone(); checkReg(); checkPass(); checkState();checkCountry();checkCity();checkInst();checkAddr();File_validator();">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;" onBlur = "checkName();" required>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="sender_email" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;" onBlur = "checkEmail();" required>
			<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<select name="brs" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option selected="selected" value="">----Please Select -----</option>
						<option value="APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)">APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)</option>
						<option value="COMPUTER SCIENCE AND ENGG. (CSE)">COMPUTER SCIENCE AND ENGG. (CSE)</option>
						<option value="CIVIL ENGG. (CE)">CIVIL ENGG. (CE)</option>
						<option value="ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)">ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)</option>
						<option value="ELECTRICAL AND ELECTRONICS ENGG. (EEE)">ELECTRICAL AND ELECTRONICS ENGG. (EEE)</option>
						<option value="INFORMATION TECHNOLOGY (IT)">INFORMATION TECHNOLOGY (IT)</option>
						<option value="MECHANICAL ENGG. (ME)">MECHANICAL ENGG. (ME)</option>
					</select>
		</li>	
		<li></li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
			    FEEDBACK&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="feedback" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:380px;padding-left:3px;padding-top:3px;" required></textarea>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;" required>
			<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li></li>
		<li>
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />&nbsp;&nbsp;
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /> 
		</li>
	</ul></form>
	</div>
</div></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>   
<!--FEEDBACK ENDS -->
<span style="font-family: "> <br>
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

}
else
{
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://smu.edu.in/viewpage.php?c=SMUALUMNI&t=h -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>:: Alumni Registration Page :: Sikkim Manipal Institute Of Technology - Sikkim Manipal University (SMU)</title>
<meta name="description" content="Welcome message for Alumni">
<meta name="keywords" content="SMUALUMNI">
<meta name="author" content="Quintessential Software Solutions Pvt Ltd, http://www.qss.in"> 
<meta name="robots" content="index,follow,all"> 
<meta name="revisit-after" content="2 days">
<link rel="icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="http://smu.edu.in/images/favicon.ico" type="image/x-icon"> 
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- JavaScript Section -->
<script type = "text/javascript"> 

	function changeColor(param){
		param.style.border = "1px solid hsl(0, 0%, 67%)";
	}
	
</script>
<!-- Section Ends -->
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
					<a href = "index.php"><div class="pnl-head">Alumni</div></a>
					<div class="pnl-cont">
						<ul>
							<li class="act">
								<div class="top"></div>
								<div class="mid">Alumni Feedback</div>
								<div class="bot"></div>
							</li>
							<li><a href="index.php">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Feedback Form</div>
</div>
<div class="content">
<!-- FEEDBACK FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">	
	<span class="register-heading">';
	if ($err_name) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Name Cannot Be Empty !!</font>';
	}
	if ($err_email) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Email Cannot Be Empty !!</font>';
	}
	if ($err_sender_email_format) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Invalid Email Format !!</font>';
	}
	if ($err_brs) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Branch Must Be Selected !!</font>';
	}
	if ($err_feed) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Your Feedback is Important to us..Please do not leave it empty !!</font>';
	}
	if ($err_reg) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Reg No. Cannot Be Empty !!</font>';
	}
	if ($err_format) {
		echo '<img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "4" color = "red">Reg No. Is Invalid !!</font>';
	}
	echo '</span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "generalfeedback.php" name = "feed" method = "post" onSubmit = "checkName(); checkEmail(); checkPhone(); checkReg(); checkPass(); checkState();checkCountry();checkCity();checkInst();checkAddr();File_validator();">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text" value = "'.htmlspecialchars($_POST['name']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;';
			if($err_name){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkName();" onFocus = "changeColor(this)" required />
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<input name="sender_email" type="text" value = "'.htmlspecialchars($_POST['sender_email']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;';
			if($err_email || $err_sender_email_format){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkEmail();" onFocus = "changeColor(this)" required />
			<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<select name="brs" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;';
			if($err_brs){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">----Please Select -----</option>';
						foreach ($BRANCH as $branch) {
							if($_POST['brs'] == $branch) {
								echo "<option selected = 'selected' value = '$branch'>$branch</option>";
							} else {
								echo "<option value = '$branch'>$branch</option>";
							}
						}
					echo '</select>
		</li>
		<li></li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
			    FEEDBACK&nbsp<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="feedback" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="';
			if($err_feed){
				echo "border:1px solid red;";
			} else {
				echo "border-color:hsl(0, 0%, 67%);";
			}
			echo 'height:70px;width:380px;padding-left:3px;padding-top:3px;" onFocus = "changeColor(this)" required>'.htmlspecialchars($_POST['feedback']).'</textarea>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" maxlength="50" value = "'.htmlspecialchars($_POST['regist']).'" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;';
			if($err_reg || $err_format){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)" required />
			<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li></li>
		<li>
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />&nbsp;&nbsp;
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" /> 
		</li>
	</ul></form>
				 </div>
				 </div></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>   
<!--FEEDBACK ENDS -->
<span style="font-family: "> <br>
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

}

}

?>