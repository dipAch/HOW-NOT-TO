<?php
	
	include 'connection.php';
	include 'makeSecure.php';
	include 'announcement.php';
	include 'copyrt.php';
	// Acquire User Input
	@$reg = mysqli_real_escape_string($cxn, $_POST['regist']);
	@$regOther = md5($SECURE.mysqli_real_escape_string($cxn, $_POST['regist']));
	@$pwd = mysqli_real_escape_string($cxn, $_POST['pwd']);
	// Execute Query
	if(strtolower($reg) == "admin") {
		$queryAdmin = "SELECT pass from admin_login where name = 'admin'";
		$resultAdmin = mysqli_query($cxn, $queryAdmin);
		if($resultAdmin) {
			$row = mysqli_fetch_assoc($resultAdmin);
			extract($row);
			if($pass == md5($SECURE.$pwd)) {
				$_SESSION['loggedIn'] = "yes";
				if(isset($_COOKIE['reg'])) {
					// Deleting Previous Cookie
					setcookie('reg', 'Admin', time() - 2592000);
				}
			// Setting Cookie
			setcookie('reg', 'Admin', time() + 1800);
			header("Location: imadmin.php");
			} else {
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
<link href="css/stylesh.css" rel="stylesheet" type="text/css">
<script type = "text/javascript">
	function changeColor(){
		document.getElementById("ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword").style.border = "1px solid hsl(0, 0%, 67%)";
	}
</script>
<style type = "text/css">
	
			span.new_mem a:link, a:visited
			{
				display:inline;
				font-weight:bold;
				color:black;
				background-color:hsl(37, 42%, 54%);
				width:110px;
				text-align:center;
				padding:6px;
				text-decoration:none;
				border-radius:5px;
			}
			span.new_mem a:hover
			{
				background-color:hsl(31, 53%, 48%);
				box-shadow : 1px 1px 1px 0px;
			}
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
							<li><font color="white">Alumni Login</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitregistration.php">Alumni Registration</a></div>
								<div class="bot"></div>
							</li>	
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
				<!-- Image Collage -->
				<br />
				<span id = "collage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2" style = "font-weight:bold; color:#b57f47;">Gallery</font><br /><hr color = "#CCC" /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "gallery.php"><img src = "collage.jpg" style = "border:solid 1px #CCC;" /></a>
				</span>
				<!-- Collage Ends -->
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Login</div>
</div>
<br>
                    <div class="main_head">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2">INCORRECT REG NO. AND PASSWORD COMBO</font></span>&nbsp;
                    </div>	
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />	
<form action = "loginProcess.php" name = "login_validate" method = "post">			
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border: #905a2b 0px solid;">
	<tr>
		<td style="border: #905a2b 1px solid;border-radius:10px;">
			<table width="80%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="35%">
					&nbsp;
					</td>
					<td width="35%">
						&nbsp;
					</td>
					<td width="12%">
						&nbsp;
					</td>
				</tr>
				<tr>
					<tr>
					<td align="right">
						<span class="style8"><font color = "#b57f47"><b>Reg No. : </b></font></span>
					</td>
					<td>
						<input name="regist" type="text" value = "'.htmlspecialchars($reg).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;"  required/>
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td align="right" class="style8">
						<font color = "#b57f47"><b>Password : </b></font>
					</td>
					<td>
						<input name="pwd" type="password" value = "'.htmlspecialchars($pwd).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:250px;border:1px solid red;height:20px;padding-left:3px;" onFocus = "changeColor()" required/>
					</td>
					<td>
						<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" onclick="return validateForm();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<span class="style4"><a href="forgot.php" class="style4" style = "text-decoration:underline;"><font color = "#b57f47"><b>Forgot Password </b></font></a>&nbsp;</span>
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td class="style3 style6">
						<font color = "#b57f47"><b>New User ? &nbsp;</b></font><span class="new_mem"><a href="smitregistration.php"><font color = "#FFFFFF">Register</font></a></span>
						<!-- class="style5" -->
						<br /><br />
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</table></form>
<br />
<br />
<div class="content"><em><p style="float: right; font-weight:bold;"><img src = "quote1.png" valign = "bottom" height = "30" />&nbsp;&nbsp;<span style="font-family: ">Welcome to the SMU Alumni Association of Sikkim Manipal Institute of Technology. We would look forward to your continued interaction and association to help improve the quality of our Academic programme, industry collaborations and various facets of our operations to ensure continuous improvements and exemplary standards of services to our present and past student community.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Our alumni have played an important role in building the credibility of our university and have contributed immensely to the growth of the university. The alumni continue to bring laurels to our university.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">The university on its part is keen to strengthen the bonds with its alumni. Our new website has features that will ensure that alumni can register themselves and keep appraised of various activities. Your active participation, and support in the activities of the SMU Alumni Association and the website will help us work together to take SMU forward in the years to come. We also look forward to feedback and suggestions from alumni on the website to carry forward this initiative. It is just a small step to bringing the alumni closer to their past.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Please pass the word around to your friends and batch mates to go to our website and register in order to enjoy the benefits of keeping in touch. The alumni&nbsp;organizes meetings and get together and publish on-line newsletters with the support of the university, thus strengthening and re-kindling the sense of community and companionship.<o:p></o:p></span>&nbsp;&nbsp;<img src = "quote.jpg" valign = "top" height = "30" /></p></em>

<table border = "0" style = "border-collapse : collapse;">
<tr>
<td width = "550"></td>
<td align = "right" colspan = "2" width = "81">
<font size = "2" color = "#b57f47"><strong>-</strong></font>&nbsp; <font size = "2" color = "#b57f47"><strong>Prof.(Dr.) B. B. Pradhan</strong></font>&nbsp;&nbsp;<br />
<font size = "2" color = "#b57f47"><b></strong>Secretary,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></b></font>
<br /><font size = "2" color = "#b57f47"><strong>SMIT Alumni Association</strong></font>
</td>
</tr>
</table>

</div>
					</div>
				</div>
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
</div>
</body></html>';
			}
		} else {
			header("Location: error.php?ref=index"); // Err Page
		}
	} else {
	$query = "SELECT reg_no FROM login_table WHERE reg_no = '$regOther'";
	$result = mysqli_query($cxn, $query);
	if($result) {
	if(mysqli_num_rows($result)) {
		$query1 = "SELECT pass FROM login_table WHERE reg_no = '$regOther'";
		$result1 = mysqli_query($cxn, $query1);
		if($result1) {
		$row = mysqli_fetch_assoc($result1);
		extract($row);
		if($pass == md5($SECURE.$pwd)) {
			$_SESSION['loggedIn'] = "yes";
			if(isset($_COOKIE['reg'])) {
				// Deleting Previous Cookie
				setcookie('reg', $regOther, time() - 2592000);
			}
			// Setting Cookie
			setcookie('reg', $regOther, time() + 1800);
			header("Location: testmep.php");
		} else {
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
<link href="css/stylesh.css" rel="stylesheet" type="text/css">
<script type = "text/javascript">
	function changeColor(){
		document.getElementById("ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword").style.border = "1px solid hsl(0, 0%, 67%)";
	}
</script>
<style type = "text/css">
	
			span.new_mem a:link, a:visited
			{
				display:inline;
				font-weight:bold;
				color:black;
				background-color:hsl(37, 42%, 54%);
				width:110px;
				text-align:center;
				padding:6px;
				text-decoration:none;
				border-radius:5px;
			}
			span.new_mem a:hover
			{
				background-color:hsl(31, 53%, 48%);
				box-shadow : 1px 1px 1px 0px;
			}
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
							<li><font color="white">Alumni Login</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitregistration.php">Alumni Registration</a></div>
								<div class="bot"></div>
							</li>	
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
				<!-- Image Collage -->
				<br />
				<span id = "collage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2" style = "font-weight:bold; color:#b57f47;">Gallery</font><br /><hr color = "#CCC" /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "gallery.php"><img src = "collage.jpg" style = "border:solid 1px #CCC;" /></a>
				</span>
				<!-- Collage Ends -->
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Login</div>
</div>
<br>
                    <div class="main_head">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2">INCORRECT REG NO. AND PASSWORD COMBO</font></span>&nbsp;
                    </div>	
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />	
<form action = "loginProcess.php" name = "login_validate" method = "post">			
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border: #905a2b 0px solid;">
	<tr>
		<td style="border: #905a2b 1px solid;border-radius:10px;">
			<table width="80%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="35%">
					&nbsp;
					</td>
					<td width="35%">
						&nbsp;
					</td>
					<td width="12%">
						&nbsp;
					</td>
				</tr>
				<tr>
					<tr>
					<td align="right">
						<span class="style8"><font color = "#b57f47"><b>Reg No. : </b></font></span>
					</td>
					<td>
						<input name="regist" type="text" value = "'.htmlspecialchars($reg).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" required />
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td align="right" class="style8">
						<font color = "#b57f47"><b>Password : </b></font>
					</td>
					<td>
						<input name="pwd" type="password" value = "'.htmlspecialchars($pwd).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:250px;border:1px solid red;height:20px;padding-left:3px;" onFocus = "changeColor()" required />
					</td>
					<td>
						<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" onclick="return validateForm();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<span class="style4"><a href="forgot.php" class="style4" style = "text-decoration:underline;"><font color = "#b57f47"><b>Forgot Password </b></font></a>&nbsp;</span>
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td class="style3 style6">
						<font color = "#b57f47"><b>New User ? &nbsp;</b></font><span class="new_mem"><a href="smitregistration.php"><font color = "#FFFFFF">Register</font></a></span>
						<!-- class="style5" -->
						<br /><br />
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</table></form>
<br />
<br />
<div class="content"><em><p style="float: right; font-weight:bold;"><img src = "quote1.png" valign = "bottom" height = "30" />&nbsp;&nbsp;<span style="font-family: ">Welcome to the SMU Alumni Association of Sikkim Manipal Institute of Technology. We would look forward to your continued interaction and association to help improve the quality of our Academic programme, industry collaborations and various facets of our operations to ensure continuous improvements and exemplary standards of services to our present and past student community.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Our alumni have played an important role in building the credibility of our university and have contributed immensely to the growth of the university. The alumni continue to bring laurels to our university.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">The university on its part is keen to strengthen the bonds with its alumni. Our new website has features that will ensure that alumni can register themselves and keep appraised of various activities. Your active participation, and support in the activities of the SMU Alumni Association and the website will help us work together to take SMU forward in the years to come. We also look forward to feedback and suggestions from alumni on the website to carry forward this initiative. It is just a small step to bringing the alumni closer to their past.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Please pass the word around to your friends and batch mates to go to our website and register in order to enjoy the benefits of keeping in touch. The alumni&nbsp;organizes meetings and get together and publish on-line newsletters with the support of the university, thus strengthening and re-kindling the sense of community and companionship.<o:p></o:p></span>&nbsp;&nbsp;<img src = "quote.jpg" valign = "top" height = "30" /></p></em>

<table border = "0" style = "border-collapse : collapse;">
<tr>
<td width = "550"></td>
<td align = "right" colspan = "2" width = "81">
<font size = "2" color = "#b57f47"><strong>-</strong></font>&nbsp; <font size = "2" color = "#b57f47"><strong>Prof.(Dr.) B. B. Pradhan</strong></font>&nbsp;&nbsp;<br />
<font size = "2" color = "#b57f47"><b></strong>Secretary,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></b></font>
<br /><font size = "2" color = "#b57f47"><strong>SMIT Alumni Association</strong></font>
</td>
</tr>
</table>

</div>
					</div>
				</div>
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
</div>
</body></html>';
		}
		} else {
			header("Location: error.php?ref=index"); // Err Page
		}
	} else {
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
<link href="css/stylesh.css" rel="stylesheet" type="text/css">
<script type = "text/javascript">
	function changeColor(){
		document.getElementById("ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName").style.border = "1px solid hsl(0, 0%, 67%)";
	}
</script>
<style type = "text/css">
	
			span.new_mem a:link, a:visited
			{
				display:inline;
				font-weight:bold;
				color:black;
				background-color:hsl(37, 42%, 54%);
				width:110px;
				text-align:center;
				padding:6px;
				text-decoration:none;
				border-radius:5px;
			}
			span.new_mem a:hover
			{
				background-color:hsl(31, 53%, 48%);
				box-shadow : 1px 1px 1px 0px;
			}
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
							<li><font color="white">Alumni Login</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitregistration.php">Alumni Registration</a></div>
								<div class="bot"></div>
							</li>	
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
				<!-- Image Collage -->
				<br />
				<span id = "collage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2" style = "font-weight:bold; color:#b57f47;">Gallery</font><br /><hr color = "#CCC" /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "gallery.php"><img src = "collage.jpg" style = "border:solid 1px #CCC;" /></a>
				</span>
				<!-- Collage Ends -->
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Login</div>
</div>
<br>
                    <div class="main_head">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2">INCORRECT REG NO. AND PASSWORD COMBO</font></span>&nbsp;
                    </div>	
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />	
<form action = "loginProcess.php" name = "login_validate" method = "post">			
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border: #905a2b 0px solid;">
	<tr>
		<td style="border: #905a2b 1px solid;border-radius:10px;">
			<table width="80%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="35%">
						&nbsp;
					</td>
					<td width="35%">
						&nbsp;
					</td>
					<td width="12%">
						&nbsp;
					</td>
				</tr>
				<tr>
					<tr>
					<td align="right">
						<span class="style8"><font color = "#b57f47"><b>Reg No. : </b></font></span>
					</td>
					<td>
						<input name="regist" type="text" value = "'.htmlspecialchars($reg).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;border:1px solid red;height:20px;padding-left:3px;" onFocus = "changeColor()" required />
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td align="right" class="style8">
						<font color = "#b57f47"><b>Password : </b></font>
					</td>
					<td>
						<input name="pwd" type="password" value = "'.htmlspecialchars($pwd).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:250px;height:20px;padding-left:3px;" required />
					</td>
					<td>
						<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" onclick="return validateForm();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<span class="style4"><a href="forgot.php" class="style4" style = "text-decoration:underline;"><font color = "#b57f47"><b>Forgot Password </b></font></a>&nbsp;</span>
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td class="style3 style6">
						<font color = "#b57f47"><b>New User ? &nbsp;</b></font><span class="new_mem"><a href="smitregistration.php"><font color = "#FFFFFF">Register</font></a></span>
						<!-- class="style5" -->
						<br /><br />
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</table></form>
<br />
<br />
<div class="content"><em><p style="float: right; font-weight:bold;"><img src = "quote1.png" valign = "bottom" height = "30" />&nbsp;&nbsp;<span style="font-family: ">Welcome to the SMU Alumni Association of Sikkim Manipal Institute of Technology. We would look forward to your continued interaction and association to help improve the quality of our Academic programme, industry collaborations and various facets of our operations to ensure continuous improvements and exemplary standards of services to our present and past student community.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Our alumni have played an important role in building the credibility of our university and have contributed immensely to the growth of the university. The alumni continue to bring laurels to our university.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">The university on its part is keen to strengthen the bonds with its alumni. Our new website has features that will ensure that alumni can register themselves and keep appraised of various activities. Your active participation, and support in the activities of the SMU Alumni Association and the website will help us work together to take SMU forward in the years to come. We also look forward to feedback and suggestions from alumni on the website to carry forward this initiative. It is just a small step to bringing the alumni closer to their past.<o:p></o:p></span></p>
<p style="text-align: centre; font-weight:bold;"><span style="font-family: ">Please pass the word around to your friends and batch mates to go to our website and register in order to enjoy the benefits of keeping in touch. The alumni&nbsp;organizes meetings and get together and publish on-line newsletters with the support of the university, thus strengthening and re-kindling the sense of community and companionship.<o:p></o:p></span>&nbsp;&nbsp;<img src = "quote.jpg" valign = "top" height = "30" /></p></em>

<table border = "0" style = "border-collapse : collapse;">
<tr>
<td width = "550"></td>
<td align = "right" colspan = "2" width = "81">
<font size = "2" color = "#b57f47"><strong>-</strong></font>&nbsp; <font size = "2" color = "#b57f47"><strong>Prof.(Dr.) B. B. Pradhan</strong></font>&nbsp;&nbsp;<br />
<font size = "2" color = "#b57f47"><b></strong>Secretary,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></b></font>
<br /><font size = "2" color = "#b57f47"><strong>SMIT Alumni Association</strong></font>
</td>
</tr>
</table>

</div>
					</div>
				</div>
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
</div>
</body></html>';
	}
	} else {
		header("Location: error.php?ref=index"); // Err Page
	}
	
	}
	
?>