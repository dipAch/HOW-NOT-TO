<?php

	include 'connection.php';
	include 'announcement.php';
	include 'copyrt.php';
	@$pin = mysqli_real_escape_string($cxn, $_POST['pin']);
	if(isset($_COOKIE['reg']) && $_SESSION['loggedIn'] == "yes") {
		$reg = mysqli_real_escape_string($cxn, $_COOKIE['reg']);
		if(!empty($pin)) {
		$query = "UPDATE al_det SET pin = '$pin' WHERE reg_no = '$reg'";
		$result = mysqli_query($cxn, $query);
		if(!$result) {
			header("Location: error.php?ref=accountSettings"); // Err Page
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
						    <li><font color="white">Account Settings</font></li>
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
<div class="rt">Change Your Details</div>
</div>
<br />
<!-- Search Friend Option -->

<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Search People...." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;"><br />
	</div>
</form>
<br /><br />
<div class="main_head">
                        <span id = "success"><img src = "tick.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;&nbsp;<font size = "2" color = "green">UPDATION SUCCESSFUL</font></span>&nbsp;
                    </div>
<br /><br />
		<!-- Setting Tab <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;"> -->
         <ul class="tabs" data-persist="true">
            <li><a href="#view1">Edit account details</a></li>
            <li><a href="#view2">Edit personal details</a></li>
            <li><a href="#view3">Change Profile Pic</a></li>
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
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />   	
<table width="500" border="0" cellpadding="0" cellspacing="0" style="">
	<tr>
		<td> 
			<table width="100%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody><tr>
					<td width="50%">
						&nbsp;
					</td>
					<td width="50%">
						&nbsp;</td>
					<td width="50%">
						&nbsp;
					</td>
				</tr>
				<tr><form name = "editEmail" action = "changeEmail.php" method = "post">
					<td align="right">
						<span class="style8"><font size = "2" color = "#b57f47"><b>Email-Id : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="email_id" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;"></td>
						<td>
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
					</form>
									</tr>
				<tr><form action = "changePass.php" name = "editPass" method = "post">
					<td align="right">
						<span class="style8"><font size ="2" color = "#b57f47"><b>Password : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="pass" type="password" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;border-radius:0px;">
					</td>				
					<td>
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
</table></form>
			
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
									
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br /> 	
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border: #905a2b 0px solid;">
	<tr>
		<td>
			<table width="150%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="20%">
						&nbsp;
					</td>
					<td width="20%">
						&nbsp;
					</td>
					<td width="20%">
						&nbsp;
					</td>
				</tr>
				<tr><form action = "changeCountry.php" name = "editCountry" method = "post">
					<td align="right">
						<span class="style8"><font size= "2"color = "#b57f47"><b>Present Country : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_country" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>				
					</form>
				</tr>
				<tr><form action = "changeJob.php" name = "editJob" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Present Job : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_job" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td></form>		
				</tr>
				<tr><form action = "changeCity.php" name = "editCity" method = "post">
					<td align="right">
						<span class="style8"><font size="2"color = "#b57f47"><b>Present City : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_city" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>				
					</form>
				</tr>
				<tr><form action = "changeWebsite.php" name = "editWebsite" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Website : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="website" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td>	
					</form>
				</tr>
				
				<tr><form action = "changeBlog.php" name = "editBlog" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Blog : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="blog" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td></form>
				</tr>
				<tr><form action = "changeMobile.php" name = "editMobile" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Mobile Number : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="mobile" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeQualification.php" name = "editQualification" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Qualification ++ : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="qualification" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeAddr.php" name = "editAddress" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Address : &nbsp;</b></font></span>
					</td>
					<td>
						<textarea name="addr" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:252px;padding-left:3px;padding-top:3px;"></textarea>			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changePin.php" name = "editPin" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Pin : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="pin" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeState.php" name = "editState" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>State : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="state" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeOrganisation.php" name = "editOrg" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Organisation : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="org" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr>
					<td>
					</br>
</br>					
			 
		&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
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
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div>
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />   	
<table width="500" border="0" cellpadding="0" cellspacing="0" style="">
	<tr>
		<td> 
			<table width="100%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody><tr>
					<td width="50%">
						&nbsp;
					</td>
					<td width="50%">
						&nbsp;</td>
					<td width="50%">
						&nbsp;
					</td>
				</tr>
				<tr><form name = "editProfilePic" action = "changePic.php" enctype = "multipart/form-data" method = "post">
					<td align="left">
						<span class="style8"><font size = "2" color = "#b57f47"><b>CHANGE PROFILE PHOTO : &nbsp;</b></font></span>
						<br /><br />
						<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" />
						<input type="file" name="picfile" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto" style="width:465px;">
						<br /><br />
						<span class="information">(You can upload a JPG, GIF, JPEG or BMP file (Maximum size of 1MB). Images dimension should</span><br>
						<span class="information">not be more than Width 300px Height 300px)</span>
						<br /><br />
						<input type= "submit" name="submit" value = "Update" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
					</td>
					</form>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
</table></form>
			
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
		}
		} else {
		$err = true;
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
<script type = "text/javascript">

function changeColor(){
	document.getElementById("ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin").style.border = "1px solid hsl(0, 0%, 67%)";
}

</script>
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
						    <li><font color="white">Account Settings</font></li>
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
<div class="rt">Change Your Details</div>
</div>
<br />
<!-- Search Friend Option -->

<form method="get" action="searchProcess.php"> <!-- onsubmit="return checkform(this);" -->
	<div class="search">
		<input type="text" name="search_friend" placeholder = "Search People...." class="input-txt" style = "width : 500px; height : 35px;padding-left:6px;font-size:19px; border-top: solid 2px #DDD; border-right: solid 2px #DDD; border-left: solid 2px #DDD; border-bottom: solid 2px #DDD;">&nbsp;&nbsp;
		<input type="image" name="ctl00$m$g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d$ctl00$ibtnSubmit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="search.png" style="height:38px;width:40px;border-width:0px;"><br />
	</div>
</form>
<br /><br />
<div class="main_head">
									<span id = "error"><img src = "cross.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2" color = "red"><b>UPDATE UNSUCCESSFUL</b></font></span>&nbsp;
							  </div>
<br /><br />
		<!-- Setting Tab <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;"> -->
         <ul class="tabs" data-persist="true">
            <li><a href="#view1">Edit account details</a></li>
            <li><a href="#view2">Edit personal details</a></li>
            <li><a href="#view3">Change Profile Pic</a></li>
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
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />
<br /><br /><!-- Err Handling --><br />
<br />							  
<table width="500" border="0" cellpadding="0" cellspacing="0" style="">
	<tr>
		<td> 
			<table width="100%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="50%">
						&nbsp;
					</td>
					<td width="50%">
						&nbsp;</td>
					<td width="50%">
						&nbsp;
					</td>
				</tr>
				<tr><form name = "editEmail" action = "changeEmail.php" method = "post">
					<td align="right">
						<span class="style8"><font size = "2" color = "#b57f47"><b>Email-Id : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="email_id" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;"></td>
						<td>
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
					</form>
									</tr>
				<tr><form action = "changePass.php" name = "editPass" method = "post">
					<td align="right">
						<span class="style8"><font size ="2" color = "#b57f47"><b>Password : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="pass" type="password" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;border-radius:0px;">
					</td>				
					<td>
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
</table></form>
			
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
									
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border: #905a2b 0px solid;">';
if($err) {
echo '<tr><td colspan = "3" align = "center"><div class="main_head">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id = "error"><img src = "caution.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font size = "2" color = "red"><b>FIELD CANNOT BE EMPTY</b></font></span>&nbsp;
							  </div>';
							  }
echo '</td></tr><br />
	<br />
	<tr>
		<td>
			<table width="150%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody>
					<td width="20%">
						&nbsp;
					</td>
					<td width="20%">
						&nbsp;
					</td>
					<td width="20%">
						&nbsp;
					</td>
				</tr>
				<tr><form action = "changeCountry.php" name = "editCountry" method = "post">
					<td align="right">
						<span class="style8"><font size= "2"color = "#b57f47"><b>Present Country : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_country" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>				
					</form>
				</tr>
				<tr><form action = "changeJob.php" name = "editJob" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Present Job : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_job" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td></form>		
				</tr>
				<tr><form action = "changeCity.php" name = "editCity" method = "post">
					<td align="right">
						<span class="style8"><font size="2"color = "#b57f47"><b>Present City : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="p_city" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					</td>				
					</form>
				</tr>
				<tr><form action = "changeWebsite.php" name = "editWebsite" method = "post">
					<td align="right">
						<span class="style8"><font size = "2" color = "#b57f47"><b>Website : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="website" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td>	
					</form>
				</tr>
				
				<tr><form action = "changeBlog.php" name = "editBlog" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Blog : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="blog" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName_blog" class="required" style="width:250px;height:20px;padding-left:3px;" />
					   <input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;">
					    
					</td></form>
				</tr>
				<tr><form action = "changeMobile.php" name = "editMobile" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Mobile Number : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="mobile" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;">			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeQualification.php" name = "editQualification" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Qualification ++ : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="qualification" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeAddr.php" name = "editAddress" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Address : &nbsp;</b></font></span>
					</td>
					<td>
						<textarea name="addr" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:252px;padding-left:3px;padding-top:3px;"></textarea>			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changePin.php" name = "editPin" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Pin : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="pin" type="text" value = "'.htmlspecialchars($_POST['pin']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin" class="required" style="width:250px;border:1px solid red;height:20px;padding-left:3px;"  onFocus = "changeColor()" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeState.php" name = "editState" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>State : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="state" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr><form action = "changeOrganisation.php" name = "editOrg" method = "post">
					<td align="right">
						<span class="style8"><font size = "2"color = "#b57f47"><b>Organisation : &nbsp;</b></font></span>
					</td>
					<td>
						<input name="org" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" />			
						<input type="image" name="submit" id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit" src="arrowbutton.jpg" style="height:26px;width:28px;border-width:0px;outline:none;"> 
				</td></form>
				</tr>
				<tr>
					<td>
					</br>
</br>					
			 
		&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
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
									<link href="css/regform.css" rel="stylesheet" type="text/css">
									<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">
									<div class="heading-line">
									</div>
<div id="ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_AlumniLoginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_e88eaf05_1c32_4c3e_ac47_cb38eaf84d5d_ctl00_ibtnSubmit&#39;)">
<br />   	
<table width="500" border="0" cellpadding="0" cellspacing="0" style="">
	<tr>
		<td> 
			<table width="100%" border="0"  align="center" cellpadding="5" cellspacing="4">
				<tbody><tr>
					<td width="50%">
						&nbsp;
					</td>
					<td width="50%">
						&nbsp;</td>
					<td width="50%">
						&nbsp;
					</td>
				</tr>
				<tr><form name = "editProfilePic" action = "changePic.php" enctype = "multipart/form-data" method = "post">
					<td align="left">
						<span class="style8"><font size = "2" color = "#b57f47"><b>CHANGE PROFILE PHOTO : &nbsp;</b></font></span>
						<br /><br />
						<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" />
						<input type="file" name="picfile" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto" style="width:465px;">
						<br /><br />
						<span class="information">(You can upload a JPG, GIF, JPEG or BMP file (Maximum size of 1MB). Images dimension should</span><br>
						<span class="information">not be more than Width 300px Height 300px)</span>
						<br /><br />
						<input type= "submit" name="submit" value = "Update" style="color : white; letter-spacing : 1px; background-image : url(\'submit.gif\'); font-weight:bold; width:100px; height : 30px; border-radius:2px; border-width : 1px;outline:none;" />
					</td>
					</form>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</tbody></table>		
		</td>
	</tr>
</table></form>
			
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
	}
	} else {
		ob_start();
		session_start();
		unset($_SESSION['loggedIn']);
		session_destroy();
		header("Location: index.php"); // Logout
	}

?>