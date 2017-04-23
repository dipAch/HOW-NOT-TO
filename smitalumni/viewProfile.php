<?php
	
	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
	@$reg = mysqli_real_escape_string($cxn, $_GET['reg_no']);
	$myreg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
	/*if(!(isset($reg))){
		header("Location: searchProcessGet.php?search_friend=foo");
	}*/
	$query = "SELECT * FROM al_det WHERE reg_no = '$reg'";
	$result = mysqli_query($cxn, $query);
	if($result) {
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	extract($row);
	$query_msg = "SELECT COUNT('read_status') FROM msg_pool WHERE msg_to = '$myreg' AND read_status = 1 AND copy_for = '$myreg'";
	$result_msg = mysqli_query($cxn, $query_msg);
	if($result_msg) {
		$row_msg = mysqli_fetch_row($result_msg);
		// Upper Casing.
		function ustrfirst($name_str) {
			$lower_case = strtolower($name_str);
			$lower_name_split = explode(" ", $lower_case);
			$final_name = Array();
			$i_name = 0;
			foreach ($lower_name_split as $lower_name) {
				$final_name[$i_name] = ucfirst($lower_name);
				$i_name += 1;
			}
			$first_cap_name = implode(" ", $final_name);
			return $first_cap_name;
		}
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
	
			span.im a:link, a:visited
			{
				background-color:#CCC;
				padding-left:6px; 
				padding-right:6px;
				padding-bottom:5px; 
				padding-top:4px; 
				border-radius : 5px; 
			}
			span.im a:hover
			{
				background-color:#DDD;
				color : #794916;
				padding-left:7px; 
				padding-right:7px;
				padding-bottom:6px; 
				padding-top:5px;
				box-shadow: 1px 1px 5px 0px #888888;
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
						  <li><font color="white">View Profile</font></li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href="testmep.php">Home</a></div>
								<div class="bot"></div>
							</li>
							<li class="act">
								<div class="top"></div>
								<div class="mid"><a href = "userprofile.php">My Profile</a></div>
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
<div class="rt">Profile Of <em>';
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
              <td width="300" height="100" ><img src = "photo/'.$photo_id.'" width="180" height="200" />
			  </td>
			<td>
			<table width="490" height="130" border="0">
			<br />
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="5" color="bf7678"><strong>'.$name.'</strong></font></em></td>
            </tr>
            <tr>
              <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
              <td height="15"><em><font size ="4">'.$branch.'</font></em></td>
            </tr>
			<tr>
                <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td height="15"><em><font size ="4">'.$email.'</font></em></td>
             </tr>';
			 if($phonePartial == "no") {
				echo '<tr>
					     <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
					     <td height="15" align = "left"><em><font size ="4">'.$mobile.'</font></em></td>
					</tr>';
			}
			if($reg != $myreg) {
			 echo '<tr>
                <td height="15"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                <td height="15"><span class = "im"><em><font size ="4"><a href = "createThread.php?reg_no='.$reg.'" style = "text-decoration : none;"> Message</a></font></em></span></td>
             </tr>';
			 }
		echo '<br/>
		<br/>
	 </td> 
</table>
	 </tr>
  </table>
  <br/>
  <br/>';
  
  if($partial == "no") {
		 echo '<ul class="tabs" data-persist="true">
            <li><a href="#view1">Extended Info</a></li>
            <li><a href="#view2">Current Details</a></li>
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
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547" >'.$dob.'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Website : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.strtolower($website).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Degree : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547" >'.$degree.'</font></em></td>
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
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547" >'.ustrfirst($addr).'</font></em></td>
			</tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current country : </strong></font></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" align="left" color="#bf7547">'.$country.'</font></em></td>
            </tr>
            <tr>
              <td height="23" width = "35%"><span class="style1"><font size="3"><strong>Current Job : </strong></span></td>
              <td height="23" align = "left" width = "55%"><em><font size ="3" color="#bf7547">'.ustrfirst($job).'</font></em></td>
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
        </div>';
		
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

	header("Location: error.php?ref=testmep"); // Err page

}

} else {

	$query_msg = "SELECT COUNT('read_status') FROM msg_pool WHERE msg_to = '$myreg' AND read_status = 1 AND copy_for = '$myreg'";
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
		<input type="text" name="search_friend" value = "'.htmlspecialchars($reg).'" placeholder = "Search a friend..." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;outline:none;"><br />
	</div>
</form>

<!-- Search Part Ends -->
<br /><font color = "#b57f47" size = "4" style = "font-weight : bold;">Search Results : </font><br /><hr color = "#ccc" /><br />';
echo '<table width = "741px" style = "border-left:solid 1px #CCC;border-right:solid 1px #CCC;border-bottom:solid 1px #CCC;border-left:solid 1px #FFF;border-radius:5px;">';
echo '<tr><td><span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2">Sorry could not find <b>'.htmlspecialchars($reg).'</b></font></span></td></tr>';
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

	header("Location: error.php?ref=testmep"); // Err page

}

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