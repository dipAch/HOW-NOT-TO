<?php

/*if ($_SESSION[‘isLoggedIn’]) && $_SESSION[‘isLoggedIn’]
== true)*/

/*$ses=$http_session();
if($ses!=0)*/


session_start();
if ($_SESSION[‘isLoggedIn’]= true)
{
	if(!(isset($_POST['submit'])))
	{

	echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jS/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jS/jquery-ui-1.9.2.custom.min.js"></script>
<!--<link rel="stylesheet" href="jS/jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" />-->
<style type="text/css">
<!--
.style1 {
	color: #b57f47;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	color: #333333;
	font-family: "Times New Roman", Times, serif;
}
#apDiv1 {
	position:absolute;
	width:710px;
	height:754px;
	z-index:1;
	left: 441px;
	top: 342px;
	visibility: visible;
}
-->
</style>

 <script type="text/javascript">
function checkForEmpty()
{
	if(checkRadio("RadioGroup1")&&checkRadio("RadioGroup2")&&checkRadio("RadioGroup3")&&checkRadio("RadioGroup4")&&checkRadio("RadioGroup5")&&checkRadio("RadioGroup6")&&checkRadio("RadioGroup7")&&checkRadio("RadioGroup8")&&checkRadio("RadioGroup9")&&checkRadio("RadioGroup10")&&checkRadio("RadioGroup11")&&checkRadio("RadioGroup12"))
	{
		return true;
	}
	else
	{
		alert("Please fill the boxes correctly .");
         return false;	
	}
}

function checkRadio(name){
  var radio =
document.forms.feed[name];
  for (var option in radio){
    if(radio[option].checked){
      return true;
    }
  }
  return false;
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
	<div class="menu">
		<ul>
			<li class="seprator"></li>
					<li><a href="http://smu.edu.in/home.php?t=p">Home</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMU_WELCOME&t=h">Alumni Events</a></li>
					<li class="seprator"></li>
					
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUADMSN&t=h">Gallery</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/s.php?c=SMUUCONSFSTU&t=h">Alumni News</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTU&t=h">Downloads</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTF&t=h">Current Staff</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/media_home.php?t=p">Chapters</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/institutes.php?t=p">Contribute</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Jobs</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Help</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Designers</a></li>
					<li class="seprator"></li>

		</ul>
	</div>
	<div class="wrapper">
		<div class="ticker">
			<div class="lt">Important Announcements</div>
			<div class="rt">
				<marquee onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1" truespeed="20" scrollamount="1" scrolldelay="20">
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
				<span></span>			</div>
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
								<div class="mid"><a href="smitlogin.php">Profile</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Contribute</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Achievments</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Downloads</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="invite.php">Invite Friends</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Account Options</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Logout</a></div>
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
<div class="rt">FEEDBACK FORM</div>
</div>

<br>
<form action = "fd.php" name = "feed" method = "post" onSubmit = "return checkForEmpty();">
<br/>
<div class="addBorder” id="apDiv1">
	
  <table width="715" height="806" border="1" cellpadding="0" cellSpacing="0" style="border: #905a2b 2px solid; border-radius:8px;" align="right">
    <tr>
      <th width="198" scope="col">CLICK ON THE BUTTONS TO GIVE YOUR FEEDBACK</th>
      <th width="65" scope="col"><div align="center">1.POOR</div></th>
      <th width="65" scope="col"><div align="center">2.SATISFACTORY</div></th>
      <th width="65" scope="col"><div align="center">3.GOOD</div></th>
      <th width="65" scope="col"><div align="center">4.VERY GOOD</div></th>
      <th width="65" scope="col"><div align="center">5.EXCELLENT</div></th>
    </tr>
    <tr>
    <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="EXCELLENT" /></div></td>
    </tr>
  <tr height="62" align = "center">
      <td colspan = "6">
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;" />&nbsp&nbsp
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;" />  
	  </td></tr> 
	</table>	
  </form>
  </div>
<br />
		<br />
		
		<div id="footer">
			<div id="footer_wrapper">
				<div class="lt">
					<p><a href="http://smu.edu.in/contact.php">Contact Us</a> &nbsp;| &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_PRIVACY_POLICY">Privacy</a> &nbsp; | &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_TERMS">Terms And Conditions</a><br>© 2007-2014 Sikkim Manipal University</p>
				</div>
				<div class="rt"><span>Powered by:<br></span><b><a>Alumni I.T. Cell</a></b></div>
			</div>
		</div>
	</div>
</div>

</div>

</body></html>';
	}
	else
	{
$feed = $_POST['feedback'];
$s_id=$_POST["senderid"];

$to= "http://www.smit.smu.edu.in";
$subject= "FEEDBACK";
$message= "$feed";
$from= "$s_id";
$headers= "From:".$from;

$reg=$_HTTP_VARS['regno'];


	if($reg)
	{
	mail($to,$subject,$message,$headers);
	$success = "Thank you for giving us your Feedback!";
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
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jS/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jS/jquery-ui-1.9.2.custom.min.js"></script>
<!--<link rel="stylesheet" href="jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" />-->
<style type="text/css">
<!--
.style1 {
	color: #b57f47;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	color: #333333;
	font-family: "Times New Roman", Times, serif;
}
#apDiv1 {
	position:absolute;
	width:710px;
	height:754px;
	z-index:1;
	left: 441px;
	top: 342px;
	visibility: visible;
}
-->
</style>

 <script type="text/javascript">
function checkForEmpty()
{
	if(checkRadio("RadioGroup1")&&checkRadio("RadioGroup2")&&checkRadio("RadioGroup3")&&checkRadio("RadioGroup4")&&checkRadio("RadioGroup5")&&checkRadio("RadioGroup6")&&checkRadio("RadioGroup7")&&checkRadio("RadioGroup8")&&checkRadio("RadioGroup9")&&checkRadio("RadioGroup10")&&checkRadio("RadioGroup11")&&checkRadio("RadioGroup12"))
	{
		return true;
	}
	else
	{
		alert("Please fill the boxes correctly .");
         return false;	
	}
}
function checkRadio(name){
  var radio =
document.forms.feed[name];
  for (var option in radio){
    if(radio[option].checked){
      return true;
    }
  }
  return false;
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
	<div class="menu">
		<ul>
			<li class="seprator"></li>
					<li><a href="http://smu.edu.in/home.php?t=p">Home</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMU_WELCOME&t=h">Alumni Events</a></li>
					<li class="seprator"></li>
					
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUADMSN&t=h">Gallery</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/s.php?c=SMUUCONSFSTU&t=h">Alumni News</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTU&t=h">Downloads</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTF&t=h">Current Staff</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/media_home.php?t=p">Chapters</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/institutes.php?t=p">Contribute</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Jobs</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Help</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Designers</a></li>
					<li class="seprator"></li>

		</ul>
	</div>
	<div class="wrapper">
		<div class="ticker">
			<div class="lt">Important Announcements</div>
			<div class="rt">
				<marquee onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1" truespeed="20" scrollamount="1" scrolldelay="20">
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
				<span></span>			</div>
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
								<div class="mid"><a href="smitlogin.php">Profile</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Contribute</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Achievments</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Downloads</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="invite.php">Invite Friends</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Account Options</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Logout</a></div>
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
<div class="rt">FEEDBACK FORM</div>
</div>

<br>
<font color = "green"><b>'.$success.'</b></font>
<form action = "fd.php" name = "feed" method = "post" onSubmit = "return checkForEmpty();">
<br/>
<div class="addBorder” id="apDiv1">
	
  <table width="715" height="806" border="1" cellpadding="0" cellSpacing="0" style="border: #905a2b 2px solid; border-radius:8px;" align="right">
    <tr>
      <th width="198" scope="col">CLICK ON THE BUTTONS TO GIVE YOUR FEEDBACK</th>
      <th width="65" scope="col"><div align="center">1.POOR</div></th>
      <th width="65" scope="col"><div align="center">2.SATISFACTORY</div></th>
      <th width="65" scope="col"><div align="center">3.GOOD</div></th>
      <th width="65" scope="col"><div align="center">4.VERY GOOD</div></th>
      <th width="65" scope="col"><div align="center">5.EXCELLENT</div></th>
    </tr>
    <tr>
    <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="EXCELLENT" /></div></td>
    </tr>
  <tr height="62" align = "center">
      <td colspan = "6">
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;"  />&nbsp&nbsp
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;" />  
	  </td></tr> 
	</table>	
  </form>
  </div>

<br />
		<br />
		
		<div id="footer">
			<div id="footer_wrapper">
				<div class="lt">
					<p><a href="http://smu.edu.in/contact.php">Contact Us</a> &nbsp;| &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_PRIVACY_POLICY">Privacy</a> &nbsp; | &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_TERMS">Terms And Conditions</a><br>© 2007-2014 Sikkim Manipal University</p>
				</div>
				<div class="rt"><span>Powered by:<br></span><b><a>Alumni I.T. Cell</a></b></div>
			</div>
		</div>
	</div>
</div>

</div>

</body></html>';
	}
	else
	{
$failure = "Please try again later!";
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
<link href="cssstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jS/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jS/jquery-ui-1.9.2.custom.min.js"></script>
<!--<link rel="stylesheet" href="jS/jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" />-->
<style type="text/css">
<!--
.style1 {
	color: #b57f47;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	color: #333333;
	font-family: "Times New Roman", Times, serif;
}
#apDiv1 {
	position:absolute;
	width:710px;
	height:754px;
	z-index:1;
	left: 441px;
	top: 342px;
	visibility: visible;
}
-->
</style>

 <script type="text/javascript">
function checkForEmpty()
{
	if(checkRadio("RadioGroup1")&&checkRadio("RadioGroup2")&&checkRadio("RadioGroup3")&&checkRadio("RadioGroup4")&&checkRadio("RadioGroup5")&&checkRadio("RadioGroup6")&&checkRadio("RadioGroup7")&&checkRadio("RadioGroup8")&&checkRadio("RadioGroup9")&&checkRadio("RadioGroup10")&&checkRadio("RadioGroup11")&&checkRadio("RadioGroup12"))
	{
		return true;
	}
	else
	{
		alert("Please fill the boxes correctly .");
        return false;	
	}
}
function checkRadio(name){
  var radio =
document.forms.feed[name];
  for (var option in radio){
    if(radio[option].checked){
      return true;
    }
  }
  return false;
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
	<div class="menu">
		<ul>
			<li class="seprator"></li>
					<li><a href="http://smu.edu.in/home.php?t=p">Home</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMU_WELCOME&t=h">Alumni Events</a></li>
					<li class="seprator"></li>
					
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUADMSN&t=h">Gallery</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/s.php?c=SMUUCONSFSTU&t=h">Alumni News</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTU&t=h">Downloads</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUUCONSCSTF&t=h">Current Staff</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/media_home.php?t=p">Chapters</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/institutes.php?t=p">Contribute</a></li>
					<li class="seprator"></li>
					<li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Jobs</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Help</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></li>
					<li class="seprator"></li>
                                        <li><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Designers</a></li>
					<li class="seprator"></li>

		</ul>
	</div>
	<div class="wrapper">
		<div class="ticker">
			<div class="lt">Important Announcements</div>
			<div class="rt">
				<marquee onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1" truespeed="20" scrollamount="1" scrolldelay="20">
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
				<span></span>			</div>
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
								<div class="mid"><a href="smitlogin.php">Profile</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Contribute</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Achievments</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Downloads</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="invite.php">Invite Friends</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Account Options</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="http://smu.edu.in/viewpage.php?c=SMUFUTSTUFF&t=h">Feedback</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="smitlogin.php">Logout</a></div>
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
<div class="rt">FEEDBACK FORM</div>
</div>

<br>
<font color = "red"><b>'.$failure.'</b></font>
<form action = "fd.php" name = "feed" method = "post" onSubmit = "return checkForEmpty();">
<br/>
<div class="addBorder” id="apDiv1">
	
  <table width="715" height="806" border="1" cellpadding="0" cellSpacing="0" style="border: #905a2b 2px solid; border-radius:8px;" align="right">
    <tr>
      <th width="198" scope="col">CLICK ON THE BUTTONS TO GIVE YOUR FEEDBACK</th>
      <th width="65" scope="col"><div align="center">1.POOR</div></th>
      <th width="65" scope="col"><div align="center">2.SATISFACTORY</div></th>
      <th width="65" scope="col"><div align="center">3.GOOD</div></th>
      <th width="65" scope="col"><div align="center">4.VERY GOOD</div></th>
      <th width="65" scope="col"><div align="center">5.EXCELLENT</div></th>
    </tr>
    <tr>
    <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup1" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup2" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup3" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup4" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup5" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup6" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup7" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup8" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup9" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup10" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup11" type="radio" value="EXCELLENT" /></div></td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="POOR" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="SATISFACTORY" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="VERY GOOD" /></div></td>
    <td><div align="center"><input name="RadioGroup12" type="radio" value="EXCELLENT" /></div></td>
    </tr>
  <tr height="62" align = "center">
      <td colspan = "6">
			<input type= "submit" name="submit" value = "Submit" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;"  />&nbsp&nbsp
			<input type= "reset" name="reset" value = "Reset" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;" />  
	  </td></tr> 
	</table>	
  </form>
  </div>


<br />
		<br />
		
		<div id="footer">
			<div id="footer_wrapper">
				<div class="lt">
					<p><a href="http://smu.edu.in/contact.php">Contact Us</a> &nbsp;| &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_PRIVACY_POLICY">Privacy</a> &nbsp; | &nbsp; <a target="_blank" href="http://smu.edu.in/viewpage.php?t=h&c=SMU_TERMS">Terms And Conditions</a><br>© 2007-2014 Sikkim Manipal University</p>
				</div>
				<div class="rt"><span>Powered by:<br></span><b><a>Alumni I.T. Cell</a></b></div>
			</div>
		</div>
	</div>
</div>

</div>

</body></html>';

	}
}
}
else
{
	header("Location: http://smit.smu.edu.in/alumini_login");
	exit;
}


?>