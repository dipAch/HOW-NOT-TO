<?php 

include 'announcement.php';
include 'makeSecure.php';
include 'copyrt.php';

		if(!(isset($_POST['submit']))){	
	$INST = array("SMIT");
	$DEGREE = array("B.TECH", "M.TECH", "BCA", "MCA");
	$BRANCH = array("APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)",
					"COMPUTER SCIENCE AND ENGG. (CSE)",
					"CIVIL ENGG. (CE)",
					"ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)",
					"ELECTRICAL AND ELECTRONICS ENGG. (EEE)",
					"INFORMATION TECHNOLOGY (IT)",
					"MECHANICAL ENGG. (ME)");
	$COUNTRY = array("Afghanistan",
						"Africa",
						"Albania",
						"Algeria",
						"American Samoa",
						"Andorra",
						"Angola",
						"Anguilla",
						"Antarctica",
						"Antilles, Netherlands",
						"Arabia, Saudi",
						"Argentina",
						"Armenia",
						"Aruba",
						"Asia",
						"Australia",
						"Austria",
						"Azerbaijan",
						"Bahamas, The",
						"Bahrain",
						"Bangladesh",
						"Barbados",
						"Belarus",
						"Belgium",
						"Belize",
						"Benin",
						"Bermuda",
						"Bhutan",
						"Bolivia",
						"Bosnia and Herzegovina",
						"Botswana",
						"Bouvet Island",
						"Brazil",
						"British Indian Ocean T.",
						"British Virgin Islands",
						"Brunei Darussalam",
						"Bulgaria",
						"Burkina Faso",
						"Burundi",
						"Cambodia",
						"Cameroon",
						"Canada",
						"Cape Verde",
						"Caribbean, The",
						"Cayman Islands",
						"Central African Republic",
						"Central America",
						"Chad",
						"Chile",
						"China",
						"Christmas Island",
						"Cocos (Keeling) Islands",
						"Colombia",
						"Comoros",
						"Congo",
						"Cook Islands",
						"Costa Rica",
						"Croatia",
						"Cuba",
						"Cyprus",
						"Czech Republic",
						"Dem. Rep. of the Congo",
						"Denmark",
						"Djibouti",
						"Dominica",
						"Dominican Republic",
						"East Timor (Timor-Leste)",
						"Ecuador",
						"Egypt",
						"El Salvador",
						"Equatorial Guinea",
						"Eritrea",
						"Estonia",
						"Ethiopia",
						"Europe",
						"European Union",
						"Falkland Islands (Malvinas)",
						"Faroe Islands",
						"Fiji",
						"Finland",
						"France",
						"French Guiana",
						"French Polynesia",
						"French Southern Terr.",
						"Gabon",
						"Gambia, The",
						"Georgia",
						"Germany",
						"Ghana",
						"Gibraltar",
						"Greece",
						"Greenland",
						"Grenada",
						"Guadeloupe",
						"Guam",
						"Guatemala",
						"Guernsey and Alderney",
						"Guiana, French",
						"Guinea",
						"Guinea, Equatorial",
						"Guinea-Bissau",
						"Guyana",
						"Haiti",
						"Holy See (Vatican)",
						"Honduras",
						"Hong Kong, (China)",
						"Hungary",
						"Iceland",
						"India",
						"Indonesia",
						"Iran, Islamic Republic of",
						"Iraq",
						"Ireland",
						"Israel",
						"Italy",
						"Jamaica",
						"Japan",
						"Jersey",
						"Jordan",
						"Kazakhstan",
						"Kenya",
						"Kiribati",
						"Korea, (South) Republic of",
						"Kosovo",
						"Kuwait",
						"Kyrgyzstan",
						"Latvia",
						"Lebanon",
						"Lesotho",
						"Liberia",
						"Libyan Arab Jamahiriya",
						"Liechtenstein",
						"Lithuania",
						"Luxembourg",
						"Macao, (China)",
						"Macedonia, TFYR",
						"Madagascar",
						"Malawi",
						"Malaysia",
						"Maldives",
						"Mali",
						"Malta",
						"Man, Isle of",
						"Marshall Islands",
						"Martinique (FR)",
						"Mauritania",
						"Mauritius",
						"Mayotte (FR)",
						"Mexico",
						"Micronesia, Fed. States of",
						"Middle East",
						"Moldova, Republic of",
						"Monaco",
						"Mongolia",
						"Montenegro",
						"Montserrat",
						"Morocco",
						"Mozambique",
						"Myanmar (ex-Burma)",
						"Namibia",
						"Nauru",
						"Nepal",
						"Netherlands",
						"Netherlands Antilles",
						"New Caledonia",
						"New Zealand",
						"Nicaragua",
						"Niger",
						"Nigeria",
						"Niue",
						"Norfolk Island",
						"North America",
						"Northern Mariana Islands",
						"Norway",
						"Oceania",
						"Oman",
						"Others",
						"Pakistan",
						"Palau",
						"Palestinian Territory",
						"Panama",
						"Papua New Guinea",
						"Paraguay",
						"Peru",
						"Philippines",
						"Pitcairn Island",
						"Poland",
						"Portugal",
						"Puerto Rico",
						"Qatar",
						"Reunion (FR)",
						"Romania",
						"Russia (Russian Fed.)",
						"Rwanda",
						"Sahara, Western",
						"Saint Barthelemy (FR)",
						"Saint Helena (UK)",
						"Saint Kitts and Nevis",
						"Saint Lucia",
						"Saint Martin (FR)",
						"Samoa",
						"San Marino",
						"Sao Tome and Principe",
						"Saudi Arabia",
						"Senegal",
						"Serbia",
						"Seychelles",
						"Sierra Leone",
						"Singapore",
						"Slovakia",
						"Slovenia",
						"Solomon Islands",
						"Somalia",
						"South Africa",
						"South America",
						"Spain",
						"Sri Lanka",
						"Sudan",
						"Suriname",
						"Swaziland",
						"Sweden",
						"Switzerland",
						"Syrian Arab Republic",
						"Taiwan",
						"Tajikistan",
						"Tanzania, United Rep. of",
						"Thailand",
						"Timor-Leste (East Timor)",
						"Togo",
						"Tokelau",
						"Tonga",
						"Tunisia",
						"Turkey",
						"Turkmenistan",
						"Turks and Caicos Islands",
						"Tuvalu",
						"Uganda",
						"Ukraine",
						"United Arab Emirates",
						"United Kingdom",
						"United States",
						"Uruguay",
						"US Minor Outlying Isl.",
						"Uzbekistan",
						"Vanuatu",
						"Vatican",
						"Venezuela",
						"Viet Nam",
						"Virgin Islands, British",
						"Virgin Islands, U.S.",
						"Wallis and Futuna",
						"Western Sahara",
						"Yemen",
						"Zambia",
						"Zimbabwe");
	$STATE = array("Andhra Pradesh",
						"Arunachal Pradesh",
						"Assam",
						"Bihar",
						"Chandigarh (U.T.)",
						"Chhattisgarh",
						"Delhi",
						"Goa",
						"Gujarat",
						"Haryana",
						"Himachal Pradesh",
						"Jammu Kashmir",
						"Jharkhand",
						"Karnataka",
						"Kerala",
						"Lakshadweep (U.T.)",
						"Madhya Pradesh",
						"Maharashtra",
						"Manipur",
						"Meghalaya",
						"Mizoram",
						"Nagaland",
						"Orissa",
						"Pondicherry (U.T.)",
						"Punjab",
						"Rajasthan",
						"Sikkim",
						"Tamil Nadu",
						"Tripura",
						"Uttar Pradesh",
						"Uttaranchal",
						"West Bengal",
						"International");
		
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
<script src="jS/jquery.min.js"></script>
<script src="jS/jquery.paulund_modal_box.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$(\'.modal_login\').paulund_modal();
});
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
								<div class="mid">Alumni Registration</div>
								<div class="bot"></div>
							</li>
							<li><a href="#" class="modal_login">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Registration Form</div>
</div>
<div class="content">
<!-- REGISTRATION FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">				
	<span class="register-heading">REGISTER</span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "smitregistration.php" name = "smitreg" enctype = "multipart/form-data" method = "post">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;" onBlur = "checkName();" required>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex">
				SEX&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="sex" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex" class="selectOne" style="width:230px;">
						<option selected="selected" value="">---- Please Select -----</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>

					</select>
		</li>
		<li>
			<div style="float: left">
				<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB">
					DATE OF BIRTH&nbsp;<span class="mandatory">*</span>
				</label>
			</div>
			<div style="clear: both">
			</div>
			<div style="float: left">
				<div style="float: left;">
					<input name="dob" type="text" maxlength="14" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB" placeholder = "DD / MM / YYYY" class="required date hasDatepicker" style="width:190px;" required>
				</div> 
				<div style="clear: both">
				</div>
			</div>
			<div style="clear: both">
			</div>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission">
				YEAR OF ADMISSION&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yoa" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission" class="selectOne" style="width:230px;">
						<option selected="selected" value="">---- Please Select -----</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>

					</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing">
				YEAR OF PASSING&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yop" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing" class="selectOne" style="width:230px;">
						<option selected="selected" value="">---- Please Select -----</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>

					</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute">
				INSTITUTE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="inst" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlInstitute\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute" class="selectOne" style="width:380px;">
						<option selected="selected" value="">----Please Select -----</option>';
						foreach ($INST as $inst) {
							echo "<option value = '$inst'>SIKKIM MANIPAL INSTITUTE OF TECHNOLOGY (SMIT)</option>";
						}
					echo '</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDegreeObtained">
				DEGREE OBTAINED
			</label>
			<br>
			<select name="degree" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option selected="selected" value="">---- Please Select -----</option>';
						foreach ($DEGREE as $degree) {
							echo "<option value = '$degree'>$degree</option>";
						}
					echo '</select>	
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH/SPECIALIZATION&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="brs" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option selected="selected" value="">----Please Select -----</option>';
						foreach ($BRANCH as $branch) {
							echo "<option value = '$branch'>$branch</option>";
						}
					echo '</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification">
				QUALIFICATIONS ACQUIRED AFTER PASSING OUT
			</label>
			<br>
			<input name="qap" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification" style="width:300px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
				COMMUNICATION ADDRESS&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="addr" rows="20" cols="20" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:380px;padding-left:3px;padding-top:3px;" required></textarea>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity">
				PRESENT CITY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="city" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity" class="required" style="width:230px;" required>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin">
				PIN</label>
			<br>
			<input name="pin" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry">
				PRESENT COUNTRY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="country" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry" class="selectOne" style="width:380px;">
						<option selected="selected" value="">---- Please Select -----</option>';
						foreach ($COUNTRY as $country) {
							echo "<option value = '$country'>$country</option>";
						}
					echo '</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState">
				PRESENT STATE&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="state" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState" class="selectOne" style="width:380px;">
						<option value="">---- Please Select -----</option>';
						foreach ($STATE as $state) {
							echo "<option value = '$state'>$state</option>";
						}
					echo '</select>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile">
				MOBILE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="mobile" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile" class="required MobileValid" style="width:230px;" onBlur = "checkPhone();" required>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax">
				FAX</label>
			<br>
			<input name="fax" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="email_id" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;" onBlur = "checkEmail();" required>
			<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite">
				WEBSITE/BLOG
			</label>
			<br>
			<input name="website" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite" class="urlValid" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation">
				CURRENT OCCUPATION</label>
			<br>
			<input name="curr_occu" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization">
				ORGANIZATION</label>
			<br>
			<input name="org" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto">
				UPLOAD PROFILE PHOTO<!--&nbsp;<span class="mandatory">*</span>--></label>
			<br>
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" />
			<input type="file" name="picfile" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto" style="width:465px;">
			<br>
			<span class="information">(You can upload a JPG, GIF, JPEG or BMP file (Maximum size of 1MB). Images dimension should</span><br>
			<span class="information">not be more than Width 300px Height 300px)</span>
			<br>
			
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;" onBlur = "checkReg();" required>
			<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword">
				PASSWORD&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="pwd" type="password" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:233px;height:20px;padding-left:2px;" onBlur = "checkPass();" required>
			<br>
			<span class="information">(Minimum 6 Characters)</span>
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
<!-- REGISTRATION ENDS -->
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

	} else {
	
	// Establish Connection
	
	include 'connection.php';
	
	// Recieve User Information & Check For Mandatory
	
	$error = false;
	$err_name = false;
	$err_name_format = false;
	$err_sex = false;
	$err_dob = false;
	$err_dob_format = false;
	$err_yoa = false;
	$err_yop = false;
	$err_inst = false;
	$err_brs = false;
	$err_addr = false;
	$err_city = false;
	$err_country = false;
	$err_state = false;
	$err_mobile = false;
	$err_mobile_format = false;
	$err_email_id = false;
	$err_email_id_format = false;
	// Pic Checker Flags
	$err_pic_size = false;
	$err_pic_type = false;
	$err_pic_width = false;
	$err_pic_height = false;
	$err_pic_format = false;
	$pic_format_found = false;
	$PIC_FORMAT = array("jpg", "bmp", "jpeg", "gif", "JPG", "BMP", "JPEG", "GIF");
	// Pic Checker Limit
	$err_reg = false;
	$err_pass = false;
	$err_len_pass = false;
	
	if(empty($_POST['name'])){
		$error = true;
		$err_name = true;
	}
	// Check format for name if not empty
	if(!(empty($_POST['name']))){
		if(!(preg_match("/^[A-Za-z' -]+\z/", $_POST['name']))){
			$error = true;
			$err_name_format = true;
		}
	}
	if(empty($_POST['sex'])){
		$error = true;
		$err_sex = true;
	}
	if(empty($_POST['dob'])){
		$error = true;
		$err_dob = true;
	}
	// Check format for DOB if not empty
	if(!(empty($_POST['dob']))){
		if(!(preg_match("/^[0-9]{1,2}[ ]*\/[ ]*[0-9]{1,2}[ ]*\/[ ]*[0-9]{4}\z/", $_POST['dob']))){
			$error = true;
			$err_dob_format = true;
		}
	}
	if(empty($_POST['yoa'])){
		$error = true;
		$err_yoa = true;
	}
	if(empty($_POST['yop'])){
		$error = true;
		$err_yop = true;
	}
	if(empty($_POST['inst'])){
		$error = true;
		$err_inst = true;
	}
	if(empty($_POST['brs'])){
		$error = true;
		$err_brs = true;
	}
	if(empty($_POST['addr'])){
		$error = true;
		$err_addr = true;
	}
	if(empty($_POST['city'])){
		$error = true;
		$err_city = true;
	}
	if(empty($_POST['country'])){
		$error = true;
		$err_country = true;
	}
	if(empty($_POST['state'])){
		$error = true;
		$err_state = true;
	}
	if(empty($_POST['mobile']) && strlen($_POST['mobile']) != 1){
		$error = true;
		$err_mobile = true;
	}
	// Check format for mobile if not empty
	if(!(empty($_POST['mobile'])) || strlen($_POST['mobile']) == 1){
		if(strlen($_POST['mobile']) < 9 || preg_match("/^(([A-Za-z]+|[0-9]*[A-Za-z]+)|([A-Za-z]+[0-9]*)|([0-9]*[A-Za-z]+[0-9]*)|([A-Za-z]+[0-9]*[A-Za-z]+))+\z/", $_POST['mobile'])){
			$error = true;
			$err_mobile_format = true;
		}
	}
	if(empty($_POST['email_id'])){
		$error = true;
		$err_email_id = true;
	}
	// Check format for email_id if not empty
	if(!(empty($_POST['email_id']))){
		if(!(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email_id']))){ // Email -> /^.+@.+\.[a-z]{2,3}\z/
			$error = true;
			$err_email_id_format = true;
		}
	}
	// Check Uploaded File Mandatory
	/*if($_FILES['picfile']['size'] == 0){
		$error = true;
		$err_pic_size = true;
	}*/
	
	if($_FILES['picfile']['size'] != 0) {
		if(!($err_pic_size)){
			if(!(preg_match("/image/", $_FILES['picfile']['type']))){
				$error = true;
				$err_pic_type = true;
			}
		}
		if(!($err_pic_size) && !($err_pic_type)){
			list($width, $height, $type, $attr) = getimagesize($_FILES['picfile']['tmp_name']);
			if($width > 3000) {
				$error = true;
				$err_pic_width = true;
			}
			if(!($err_pic_width)) {
				if($height > 3000) {
					$error = true;
					$err_pic_height = true;
				}
			}
			if(!($err_pic_width) && !($err_pic_height)) {
				$extension = pathinfo($_FILES['picfile']['name'], PATHINFO_EXTENSION);
				foreach ($PIC_FORMAT as $pic_format) {
					if($extension == $pic_format) {
						$pic_format_found = true;
						break;
					}
				}
				if(!($pic_format_found)) {
					$error = true;
					$err_pic_format = true;
				}
			}
		}
	}
	
	if(empty($_POST['regist'])){
		$error = true;
		$err_reg = true;
	}
	if(empty($_POST['pwd'])){
		$error = true;
		$err_pass = true;
	}
	// Check length of password if not empty
	if(strlen($_POST['pwd']) < 6 && !(empty($_POST['pwd']))){
		$error = true;
		$err_len_pass = true;
	}
	
	// Mandatory Check Complete
	
	// Array Declaration For Forms 
	
	$SEX = array("Male", "Female");
	$YOA = array("1997",
				 "1998",
				 "1999",
				 "2000",
				 "2001",
				 "2002",
				 "2003",
				 "2004",
				 "2005",
				 "2006",
				 "2007",
				 "2008",
				 "2009",
				 "2010",
				 "2011",
				 "2012",
				 "2013");
	$YOP = array("2002",
				 "2003",
				 "2004",
				 "2005",
				 "2006",
				 "2007",
				 "2008",
				 "2009",
				 "2010",
				 "2011",
				 "2012",
				 "2013");
	$INST = array("SMIT");
	$DEGREE = array("B.TECH", "M.TECH", "BCA", "MCA");
	$BRANCH = array("APPLIED ELECTRONICS AND INSTRUMENTATION (AEI)",
					"COMPUTER SCIENCE AND ENGG. (CSE)",
					"CIVIL ENGG. (CE)",
					"ELECTRONICS AND COMMUNICATIONS ENGG. (ECE)",
					"ELECTRICAL AND ELECTRONICS ENGG. (EEE)",
					"INFORMATION TECHNOLOGY (IT)",
					"MECHANICAL ENGG. (ME)");
	$COUNTRY = array("Afghanistan",
						"Africa",
						"Albania",
						"Algeria",
						"American Samoa",
						"Andorra",
						"Angola",
						"Anguilla",
						"Antarctica",
						"Antilles, Netherlands",
						"Arabia, Saudi",
						"Argentina",
						"Armenia",
						"Aruba",
						"Asia",
						"Australia",
						"Austria",
						"Azerbaijan",
						"Bahamas, The",
						"Bahrain",
						"Bangladesh",
						"Barbados",
						"Belarus",
						"Belgium",
						"Belize",
						"Benin",
						"Bermuda",
						"Bhutan",
						"Bolivia",
						"Bosnia and Herzegovina",
						"Botswana",
						"Bouvet Island",
						"Brazil",
						"British Indian Ocean T.",
						"British Virgin Islands",
						"Brunei Darussalam",
						"Bulgaria",
						"Burkina Faso",
						"Burundi",
						"Cambodia",
						"Cameroon",
						"Canada",
						"Cape Verde",
						"Caribbean, The",
						"Cayman Islands",
						"Central African Republic",
						"Central America",
						"Chad",
						"Chile",
						"China",
						"Christmas Island",
						"Cocos (Keeling) Islands",
						"Colombia",
						"Comoros",
						"Congo",
						"Cook Islands",
						"Costa Rica",
						"Croatia",
						"Cuba",
						"Cyprus",
						"Czech Republic",
						"Dem. Rep. of the Congo",
						"Denmark",
						"Djibouti",
						"Dominica",
						"Dominican Republic",
						"East Timor (Timor-Leste)",
						"Ecuador",
						"Egypt",
						"El Salvador",
						"Equatorial Guinea",
						"Eritrea",
						"Estonia",
						"Ethiopia",
						"Europe",
						"European Union",
						"Falkland Islands (Malvinas)",
						"Faroe Islands",
						"Fiji",
						"Finland",
						"France",
						"French Guiana",
						"French Polynesia",
						"French Southern Terr.",
						"Gabon",
						"Gambia, The",
						"Georgia",
						"Germany",
						"Ghana",
						"Gibraltar",
						"Greece",
						"Greenland",
						"Grenada",
						"Guadeloupe",
						"Guam",
						"Guatemala",
						"Guernsey and Alderney",
						"Guiana, French",
						"Guinea",
						"Guinea, Equatorial",
						"Guinea-Bissau",
						"Guyana",
						"Haiti",
						"Holy See (Vatican)",
						"Honduras",
						"Hong Kong, (China)",
						"Hungary",
						"Iceland",
						"India",
						"Indonesia",
						"Iran, Islamic Republic of",
						"Iraq",
						"Ireland",
						"Israel",
						"Italy",
						"Jamaica",
						"Japan",
						"Jersey",
						"Jordan",
						"Kazakhstan",
						"Kenya",
						"Kiribati",
						"Korea, (South) Republic of",
						"Kosovo",
						"Kuwait",
						"Kyrgyzstan",
						"Latvia",
						"Lebanon",
						"Lesotho",
						"Liberia",
						"Libyan Arab Jamahiriya",
						"Liechtenstein",
						"Lithuania",
						"Luxembourg",
						"Macao, (China)",
						"Macedonia, TFYR",
						"Madagascar",
						"Malawi",
						"Malaysia",
						"Maldives",
						"Mali",
						"Malta",
						"Man, Isle of",
						"Marshall Islands",
						"Martinique (FR)",
						"Mauritania",
						"Mauritius",
						"Mayotte (FR)",
						"Mexico",
						"Micronesia, Fed. States of",
						"Middle East",
						"Moldova, Republic of",
						"Monaco",
						"Mongolia",
						"Montenegro",
						"Montserrat",
						"Morocco",
						"Mozambique",
						"Myanmar (ex-Burma)",
						"Namibia",
						"Nauru",
						"Nepal",
						"Netherlands",
						"Netherlands Antilles",
						"New Caledonia",
						"New Zealand",
						"Nicaragua",
						"Niger",
						"Nigeria",
						"Niue",
						"Norfolk Island",
						"North America",
						"Northern Mariana Islands",
						"Norway",
						"Oceania",
						"Oman",
						"Others",
						"Pakistan",
						"Palau",
						"Palestinian Territory",
						"Panama",
						"Papua New Guinea",
						"Paraguay",
						"Peru",
						"Philippines",
						"Pitcairn Island",
						"Poland",
						"Portugal",
						"Puerto Rico",
						"Qatar",
						"Reunion (FR)",
						"Romania",
						"Russia (Russian Fed.)",
						"Rwanda",
						"Sahara, Western",
						"Saint Barthelemy (FR)",
						"Saint Helena (UK)",
						"Saint Kitts and Nevis",
						"Saint Lucia",
						"Saint Martin (FR)",
						"Samoa",
						"San Marino",
						"Sao Tome and Principe",
						"Saudi Arabia",
						"Senegal",
						"Serbia",
						"Seychelles",
						"Sierra Leone",
						"Singapore",
						"Slovakia",
						"Slovenia",
						"Solomon Islands",
						"Somalia",
						"South Africa",
						"South America",
						"Spain",
						"Sri Lanka",
						"Sudan",
						"Suriname",
						"Swaziland",
						"Sweden",
						"Switzerland",
						"Syrian Arab Republic",
						"Taiwan",
						"Tajikistan",
						"Tanzania, United Rep. of",
						"Thailand",
						"Timor-Leste (East Timor)",
						"Togo",
						"Tokelau",
						"Tonga",
						"Tunisia",
						"Turkey",
						"Turkmenistan",
						"Turks and Caicos Islands",
						"Tuvalu",
						"Uganda",
						"Ukraine",
						"United Arab Emirates",
						"United Kingdom",
						"United States",
						"Uruguay",
						"US Minor Outlying Isl.",
						"Uzbekistan",
						"Vanuatu",
						"Vatican",
						"Venezuela",
						"Viet Nam",
						"Virgin Islands, British",
						"Virgin Islands, U.S.",
						"Wallis and Futuna",
						"Western Sahara",
						"Yemen",
						"Zambia",
						"Zimbabwe");
	$STATE = array("Andhra Pradesh",
						"Arunachal Pradesh",
						"Assam",
						"Bihar",
						"Chandigarh (U.T.)",
						"Chhattisgarh",
						"Delhi",
						"Goa",
						"Gujarat",
						"Haryana",
						"Himachal Pradesh",
						"Jammu Kashmir",
						"Jharkhand",
						"Karnataka",
						"Kerala",
						"Lakshadweep (U.T.)",
						"Madhya Pradesh",
						"Maharashtra",
						"Manipur",
						"Meghalaya",
						"Mizoram",
						"Nagaland",
						"Orissa",
						"Pondicherry (U.T.)",
						"Punjab",
						"Rajasthan",
						"Sikkim",
						"Tamil Nadu",
						"Tripura",
						"Uttar Pradesh",
						"Uttaranchal",
						"West Bengal",
						"International");	
	
	// Array Declaration Ends
	
	if($error) {
	
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script src="jS/jquery.min.js"></script>
<script src="jS/jquery.paulund_modal_box.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$(\'.modal_login\').paulund_modal();
});
</script>
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
								<div class="mid">Alumni Registration</div>
								<div class="bot"></div>
							</li>
							<li><a href="#" class="modal_login">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Registration Form</div>
</div>
<div class="content">
<!-- REGISTRATION FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">				
	<span class="register-heading"><img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font color = "red">MANDATORY FIELDS MUST BE FILLED CORRECTLY</font></span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "smitregistration.php" name = "smitreg" enctype = "multipart/form-data" method = "post">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text"  value = "'.htmlspecialchars($_POST['name']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;';
			if($err_name || $err_name_format){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkName();" onFocus = "changeColor(this)"  required />&nbsp&nbsp';
			if($err_name) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_name_format) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>NOT A VALID NAME</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex">
				SEX&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="sex" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex" class="selectOne" style="width:230px;';
			if($err_sex){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">---- Please Select -----</option>';
						foreach ($SEX as $sex) {
							if($_POST['sex'] == $sex) {
								echo "<option selected = 'selected' value = '$sex'>$sex</option>";
							} else {
								echo "<option value = '$sex'>$sex</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_sex) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<div style="float: left">
				<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB">
					DATE OF BIRTH&nbsp;<span class="mandatory">*</span>
				</label>
			</div>
			<div style="clear: both">
			</div>
			<div style="float: left">
				<div style="float: left;">
					<input name="dob" type="text" value = "'.htmlspecialchars($_POST['dob']).'" maxlength="14" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB" placeholder = "DD / MM / YYYY" class="required date hasDatepicker" style="width:190px;';
					if($err_dob || $err_dob_format){
						echo "border:1px solid red;";
					}
					echo '" onFocus = "changeColor(this)" required>&nbsp&nbsp';
				if($err_dob){
					echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
				}
				if($err_dob_format){
					echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INCORRECT FORMAT</b></font>';
				}
				echo '</div> 
				<div style="clear: both">
				</div>
			</div>
			<div style="clear: both">
			</div>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission">
				YEAR OF ADMISSION&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yoa" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission" class="selectOne" style="width:230px;';
			if($err_yoa){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">---- Please Select -----</option>';
						foreach ($YOA as $yoa) {
							if($_POST['yoa'] == $yoa) {
								echo "<option selected = 'selected' value = '$yoa'>$yoa</option>";
							} else {
								echo "<option value = '$yoa'>$yoa</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_yoa){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing">
				YEAR OF PASSING&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yop" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing" class="selectOne" style="width:230px;';
			if($err_yop){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">---- Please Select -----</option>';
						foreach ($YOP as $yop) {
							if($_POST['yop'] == $yop) {
								echo "<option selected = 'selected' value = '$yop'>$yop</option>";
							} else {
								echo "<option value = '$yop'>$yop</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_yop){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute">
				INSTITUTE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="inst" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlInstitute\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute" class="selectOne" style="width:380px;';
			if($err_inst){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">----Please Select -----</option>';
						foreach ($INST as $inst) {
							if($_POST['inst'] == $inst) {
								echo "<option selected = 'selected' value = '$inst'>SIKKIM MANIPAL INSTITUTE OF TECHNOLOGY (SMIT)</option>";
							} else {
								echo "<option value = '$inst'>SIKKIM MANIPAL INSTITUTE OF TECHNOLOGY (SMIT)</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_inst){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDegreeObtained">
				DEGREE OBTAINED
			</label>
			<br>
			<select name="degree" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option value="">---- Please Select -----</option>';
						foreach ($DEGREE as $degree) {
							if($_POST['degree'] == $degree) {
								echo "<option selected = 'selected' value = '$degree'>$degree</option>";
							} else {
								echo "<option value = '$degree'>$degree</option>";
							}
						}
					echo '</select>	
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH/SPECIALIZATION&nbsp;<span class="mandatory">*</span>
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
					echo '</select>&nbsp;&nbsp;';
			if($err_brs){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification">
				QUALIFICATIONS ACQUIRED AFTER PASSING OUT
			</label>
			<br>
			<input name="qap" type="text" value = "'.htmlspecialchars($_POST['qap']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification" style="width:300px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
				COMMUNICATION ADDRESS&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="addr" rows="20" cols="20"  id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="';
			if($err_addr){
				echo "border:1px solid red;";
			} else {
				echo "border-color:hsl(0, 0%, 67%);";
			}
			echo 'height:70px;width:380px;padding-left:3px;padding-top:3px;" onFocus = "changeColor(this)" required>'.htmlspecialchars($_POST['addr']).'</textarea>&nbsp&nbsp';
			if($err_addr){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity">
				PRESENT CITY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="city" type="text" value = "'.htmlspecialchars($_POST['city']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity" class="required" style="width:230px;';
			if($err_city){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)" required>&nbsp&nbsp';
			if($err_city){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin">
				PIN</label>
			<br>
			<input name="pin" type="text" value = "'.htmlspecialchars($_POST['pin']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry">
				PRESENT COUNTRY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="country" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry" class="selectOne" style="width:380px;';
			if($err_country){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">---- Please Select -----</option>';
						foreach ($COUNTRY as $country) {
							if($_POST['country'] == $country) {
								echo "<option selected = 'selected' value = '$country'>$country</option>";
							} else {
								echo "<option value = '$country'>$country</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_country){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState">
				PRESENT STATE&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="state" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState" class="selectOne" style="width:380px;';
			if($err_state){
				echo "border:1px solid red;";
			}
			echo '" onFocus = "changeColor(this)">
						<option value="">---- Please Select -----</option>';
						foreach ($STATE as $state) {
							if($_POST['state'] == $state) {
								echo "<option selected = 'selected' value = '$state'>$state</option>";
							} else {
								echo "<option value = '$state'>$state</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_state){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<!--<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtTelephone">
				TELEPHONE</label>
			<br>
			<input name="ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$txtTelephone" type="text" maxlength="30" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtTelephone" class="number" style="width:230px;">
		</li>-->
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile">
				MOBILE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="mobile" type="text" value = "'.htmlspecialchars($_POST['mobile']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile" class="required MobileValid" style="width:230px;';
			if($err_mobile || $err_mobile_format){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkPhone();" onFocus = "changeColor(this)" required>&nbsp&nbsp';
			if($err_mobile){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_mobile_format){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INVALID MOBILE NUMBER</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax">
				FAX</label>
			<br>
			<input name="fax" type="text" value = "'.htmlspecialchars($_POST['fax']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="email_id" type="text" value = "'.htmlspecialchars($_POST['email_id']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;';
			if($err_email_id || $err_email_id_format){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkEmail();" onFocus = "changeColor(this)" required>&nbsp&nbsp';
			if($err_email_id){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_email_id_format){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INVALID EMAIL ID</b></font>';
			}
			echo '<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite">
				WEBSITE/BLOG
			</label>
			<br>
			<input name="website" type="text" value = "'.htmlspecialchars($_POST['website']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite" class="urlValid" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation">
				CURRENT OCCUPATION</label>
			<br>
			<input name="curr_occu" type="text" value = "'.htmlspecialchars($_POST['curr_occu']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization">
				ORGANIZATION</label>
			<br>
			<input name="org" type="text" value = "'.htmlspecialchars($_POST['org']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto">
				UPLOAD PROFILE PHOTO<!--&nbsp;<span class="mandatory">*</span>--></label>
			<br>
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" />
			<input type="file" name="picfile" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto" style="width:465px;" />';
			if($err_pic_size){
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>FILE SIZE ERROR</b></font><br>';
			}
			if($err_pic_type){
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>FILE NOT AN IMAGE</b></font><br>';
			}
			if($err_pic_width) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE WIDTH TOO LARGE</b></font><br>';
			}
			if($err_pic_height) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE HEIGHT TOO LARGE</b></font><br>';
			}
			if($err_pic_format) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE FORMAT NOT SUPPORTED</b></font><br>';
			}
			echo '<br>
			<span class="information">(You can upload a JPG, GIF, JPEG or BMP file (Maximum size of 1MB). Images dimension should</span><br>
			<span class="information">not be more than Width 300px Height 300px)</span>
			<br>
			
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" value = "'.htmlspecialchars($_POST['regist']).'" maxlength="50"  id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;';
			if($err_reg) {
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkReg();" onFocus = "changeColor(this)" required>&nbsp&nbsp';
			if($err_reg){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			echo '<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword">
				PASSWORD&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="pwd" type="password" value = "'.htmlspecialchars($_POST['pwd']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:233px;height:20px;padding-left:2px;';
			if($err_pass || $err_len_pass){
				echo "border:1px solid red;";
			}
			echo '" onBlur = "checkPass();" onFocus = "changeColor(this)" required>&nbsp&nbsp';
			if($err_pass){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_len_pass){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>LENGTH LESS THAN 6 CHARACTERS</b></font>';
			}
			echo '<br>
			<span class="information">(Minimum 6 Characters)</span>
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
<!-- REGISTRATION ENDS -->
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
</body></html>
';
	
	} else {
	
	// Escape Input
	
	$name = mysqli_real_escape_string($cxn, $_POST['name']); // Mandatory
	$sex = mysqli_real_escape_string($cxn, $_POST['sex']); // Mandatory
	$dob = mysqli_real_escape_string($cxn, $_POST['dob']); // Mandatory --> Date Of Birth
	$yoa = mysqli_real_escape_string($cxn, $_POST['yoa']); // Mandatory --> Year Of Admission
	$yop = mysqli_real_escape_string($cxn, $_POST['yop']); // Mandatory --> Year Of Passing
	$inst = mysqli_real_escape_string($cxn, $_POST['inst']); // Mandatory
	$degree = mysqli_real_escape_string($cxn, $_POST['degree']);
	$brs = mysqli_real_escape_string($cxn, $_POST['brs']); // Branch & Specialization
	$qap = mysqli_real_escape_string($cxn, $_POST['qap']); // Qualification After Passing
	$addr = mysqli_real_escape_string($cxn, $_POST['addr']); // Mandatory
	$city = mysqli_real_escape_string($cxn, $_POST['city']); // Mandatory
	$pin = mysqli_real_escape_string($cxn, $_POST['pin']);
	$country = mysqli_real_escape_string($cxn, $_POST['country']); // Mandatory
	$state = mysqli_real_escape_string($cxn, $_POST['state']); // Mandatory
	$mobile = mysqli_real_escape_string($cxn, $_POST['mobile']); // Mandatory
	$fax = mysqli_real_escape_string($cxn, $_POST['fax']);
	$email_id = mysqli_real_escape_string($cxn, $_POST['email_id']); // Mandatory
	$website = mysqli_real_escape_string($cxn, $_POST['website']);
	$occu = mysqli_real_escape_string($cxn, $_POST['curr_occu']);
	$org = mysqli_real_escape_string($cxn, $_POST['org']);
	// Profile Photo 
	$reg = mysqli_real_escape_string($cxn, $_POST['regist']); // Mandatory
	$pass = mysqli_real_escape_string($cxn, $_POST['pwd']); // Mandatory
	
	// Input Escaped
	
	// Check Name & Registration No. in Alumni database
	
	$db_err = false;
	
	// Name To Upper.
	$name = strtoupper($name);
	
	$query1 = "SELECT * FROM alumni WHERE reg_no = '$reg' and name = '$name'";
	
	$result = mysqli_query($cxn, $query1);
	
	if($result) {
	
	if(mysqli_num_rows($result) == 0){
		$db_err = true;
	}
	
	// Temporary Storage --> Alpha Testing
	if(!($err_pic_size) && !($err_pic_type) && !($error) && !($db_err) && ($_FILES['picfile']['size'] != 0)){
		// Mod Change Img Name
		$queryPic = "SELECT COUNT('person_id') FROM al_det";
		$resultPic = mysqli_query($cxn, $queryPic);
		if($resultPic) {
		$rowPic = mysqli_fetch_row($resultPic);
		$img_tmp_name = explode(".", $_FILES['picfile']['name']);
		$_FILES['picfile']['name'] = substr(uniqid(), -2).($rowPic[0] + 1).substr(uniqid(), 5).".".$img_tmp_name[1];
		// Change Reflected
		$dest_loc = "C:\\wamp\\www\\smitalumni\\photo\\".basename($_FILES['picfile']['name']);
		$temp_loc = $_FILES['picfile']['tmp_name'];
		move_uploaded_file($temp_loc, $dest_loc);
		} else {
			header("Location: error.php?ref=accountSettings"); // Err Page
		}
	}
	
	if($db_err){
	
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script src="jS/jquery.min.js"></script>
<script src="jS/jquery.paulund_modal_box.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$(\'.modal_login\').paulund_modal();
});
</script>
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
								<div class="mid">Alumni Registration</div>
								<div class="bot"></div>
							</li>
							<li><a href="#" class="modal_login">Alumni Login</a></li>
						</ul>
					</div>
					<div class="pnl-bot"><img src="lt_pnl_cont_bot.gif" alt=""></div>
				</div>
			</div>
<div class="mid-pnl">
<div class="page-heading">
<div class="lt">&nbsp;</div>
<div class="rt">Alumni Registration Form</div>
</div>
<div class="content">
<!-- REGISTRATION FORM -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td id="MSOZoneCell_WebPartWPQ2" valign="top"><table toplevel="" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td valign="top"><div webpartid="b5ace897-7501-4a4e-8c88-3c266a4ec979" haspers="false" id="WebPartWPQ2" width="100%" class="ms-WPBody" allowdelete="false" style="">
<link href="css/regform.css" rel="stylesheet" type="text/css">
<div id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_AlumniRegistrationForm" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_IbtnRegisterMe&#39;)">	
	<span class="register-heading"><img src = "caution1.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;<font color = "red">YOU HAVE NOT BEEN RECOGNIZED AS AN ALUMNI</font></span>
	<div class="heading-line">
	</div><br>
	<ul class="top-notes">
		<li>
			<ul>
				<span class="notes-gray">Fields marked with <span class="mandatory">*</span> are mandatory. </span>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</li>
	</ul>
	<form action = "smitregistration.php" name = "smitreg" enctype = "multipart/form-data" method = "post">
	<ul class="form">
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName">
				NAME&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="name" type="text"  value = "'.htmlspecialchars($_POST['name']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:300px;" onBlur = "checkName();" required>&nbsp&nbsp';
			if($err_name) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_name_format) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>NOT A VALID NAME</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex">
				SEX&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="sex" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlSex" class="selectOne" style="width:230px;">
						<option value="">---- Please Select -----</option>';
						foreach ($SEX as $sex) {
							if($_POST['sex'] == $sex) {
								echo "<option selected = 'selected' value = '$sex'>$sex</option>";
							} else {
								echo "<option value = '$sex'>$sex</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_sex) {
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<div style="float: left">
				<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB">
					DATE OF BIRTH&nbsp;<span class="mandatory">*</span>
				</label>
			</div>
			<div style="clear: both">
			</div>
			<div style="float: left">
				<div style="float: left;">
					<input name="dob" type="text" value = "'.htmlspecialchars($_POST['dob']).'" maxlength="14" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDOB" placeholder = "DD / MM / YYYY" class="required date hasDatepicker" style="width:190px;" required>&nbsp&nbsp';
				if($err_dob){
					echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
				}
				if($err_dob_format){
					echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INCORRECT FORMAT</b></font>';
				}
				echo '</div> 
				<div style="clear: both">
				</div>
			</div>
			<div style="clear: both">
			</div>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission">
				YEAR OF ADMISSION&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yoa" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfAddmission" class="selectOne" style="width:230px;">
						<option value="">---- Please Select -----</option>';
						foreach ($YOA as $yoa) {
							if($_POST['yoa'] == $yoa) {
								echo "<option selected = 'selected' value = '$yoa'>$yoa</option>";
							} else {
								echo "<option value = '$yoa'>$yoa</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_yoa){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing">
				YEAR OF PASSING&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="yop" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlYearOfPassing" class="selectOne" style="width:230px;">
						<option value="">---- Please Select -----</option>';
						foreach ($YOP as $yop) {
							if($_POST['yop'] == $yop) {
								echo "<option selected = 'selected' value = '$yop'>$yop</option>";
							} else {
								echo "<option value = '$yop'>$yop</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_yop){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute">
				INSTITUTE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="inst" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlInstitute\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlInstitute" class="selectOne" style="width:380px;">
						<option value="">----Please Select -----</option>';
						foreach ($INST as $inst) {
							if($_POST['inst'] == $inst) {
								echo "<option selected = 'selected' value = '$inst'>SIKKIM MANIPAL INSTITUTE OF TECHNOLOGY (SMIT)</option>";
							} else {
								echo "<option value = '$inst'>SIKKIM MANIPAL INSTITUTE OF TECHNOLOGY (SMIT)</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_inst){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtDegreeObtained">
				DEGREE OBTAINED
			</label>
			<br>
			<select name="degree" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlDegreeObtained\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlDegreeObtained" style="width:380px;">
						<option value="">---- Please Select -----</option>';
						foreach ($DEGREE as $degree) {
							if($_POST['degree'] == $degree) {
								echo "<option selected = 'selected' value = '$degree'>$degree</option>";
							} else {
								echo "<option value = '$degree'>$degree</option>";
							}
						}
					echo '</select>	
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtBranch">
				BRANCH/SPECIALIZATION&nbsp;<span class="mandatory">*</span>
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
					echo '</select>&nbsp;&nbsp;';
			if($err_brs){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification">
				QUALIFICATIONS ACQUIRED AFTER PASSING OUT
			</label>
			<br>
			<input name="qap" type="text" value = "'.htmlspecialchars($_POST['qap']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtQualification" style="width:300px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress">
				COMMUNICATION ADDRESS&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<textarea name="addr" rows="20" cols="20" value = "'.htmlspecialchars($_POST['addr']).'" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCAddress" class="required" style="border-color:hsl(0, 0%, 67%);height:70px;width:380px;padding-left:3px;padding-top:3px;" required>'.htmlspecialchars($_POST['addr']).'</textarea>&nbsp&nbsp';
			if($err_addr){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity">
				PRESENT CITY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="city" type="text" value = "'.htmlspecialchars($_POST['city']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCity" class="required" style="width:230px;" required>&nbsp&nbsp';
			if($err_city){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin">
				PIN</label>
			<br>
			<input name="pin" type="text" value = "'.htmlspecialchars($_POST['pin']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPin" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry">
				PRESENT COUNTRY&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<select name="country" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlCountry" class="selectOne" style="width:380px;">
						<option value="">---- Please Select -----</option>';
						foreach ($COUNTRY as $country) {
							if($_POST['country'] == $country) {
								echo "<option selected = 'selected' value = '$country'>$country</option>";
							} else {
								echo "<option value = '$country'>$country</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_country){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState">
				PRESENT STATE&nbsp;<span class="mandatory">*</span></label>
			<br>
			<select name="state" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_ddlState" class="selectOne" style="width:380px;">
						<option value="">---- Please Select -----</option>';
						foreach ($STATE as $state) {
							if($_POST['state'] == $state) {
								echo "<option selected = 'selected' value = '$state'>$state</option>";
							} else {
								echo "<option value = '$state'>$state</option>";
							}
						}
					echo '</select>&nbsp&nbsp';
			if($err_state){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>OPTION MUST BE SELECTED</b></font>';
			}
		echo '</li>
		<!--<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtTelephone">
				TELEPHONE</label>
			<br>
			<input name="ctl00$m$g_b5ace897_7501_4a4e_8c88_3c266a4ec979$ctl00$txtTelephone" type="text" maxlength="30" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtTelephone" class="number" style="width:230px;">
		</li>-->
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile">
				MOBILE&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="mobile" type="text" value = "'.htmlspecialchars($_POST['mobile']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtMobile" class="required MobileValid" style="width:230px;" onBlur = "checkPhone();" required>&nbsp&nbsp';
			if($err_mobile){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_mobile_format){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INVALID MOBILE NUMBER</b></font>';
			}
		echo '</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax">
				FAX</label>
			<br>
			<input name="fax" type="text" value = "'.htmlspecialchars($_POST['fax']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtFax" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID">
				EMAIL&nbsp;<span class="mandatory">*</span>
			</label>
			<br>
			<input name="email_id" type="text" value = "'.htmlspecialchars($_POST['email_id']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtEmailID" class="required email" style="width:230px;" onBlur = "checkEmail();" required>&nbsp&nbsp';
			if($err_email_id){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_email_id_format){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>INVALID EMAIL ID</b></font>';
			}
			echo '<br>
			<span class="information">(Enter Valid Email-Id)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite">
				WEBSITE/BLOG
			</label>
			<br>
			<input name="website" type="text" value = "'.htmlspecialchars($_POST['website']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtWebSite" class="urlValid" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation">
				CURRENT OCCUPATION</label>
			<br>
			<input name="curr_occu" type="text" value = "'.htmlspecialchars($_POST['curr_occu']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtCOccupation" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization">
				ORGANIZATION</label>
			<br>
			<input name="org" type="text" value = "'.htmlspecialchars($_POST['org']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtOrganization" style="width:230px;">
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto">
				UPLOAD PROFILE PHOTO<!--&nbsp;<span class="mandatory">*</span>--></label>
			<br>
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" />
			<input type="file" name="picfile" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_fuPhoto" style="width:465px;" />';
			if($err_pic_size){
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>FILE SIZE ERROR</b></font><br>';
			}
			if($err_pic_type){
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>FILE NOT AN IMAGE</b></font><br>';
			}
			if($err_pic_width) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE WIDTH TOO LARGE</b></font><br>';
			}
			if($err_pic_height) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE HEIGHT TOO LARGE</b></font><br>';
			}
			if($err_pic_format) {
				echo '<br><br><img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>IMAGE FORMAT NOT SUPPORTED</b></font><br>';
			}
			echo '<br>
			<span class="information">(You can upload a JPG, GIF, JPEG or BMP file (Maximum size of 1MB). Images dimension should</span><br>
			<span class="information">not be more than Width 300px Height 300px)</span>
			<br>
			
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName">
				REGISTRATION NO.&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="regist" type="text" value = "'.htmlspecialchars($_POST['regist']).'" maxlength="50"  id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtUserName" class="required email" style="width:230px;border:1px solid red" onBlur = "checkReg();" onFocus = "changeColor(this)" required>&nbsp;&nbsp;<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font color = "red"><b>REGISTRATION NO. INVALID</b></font>';
			if($err_reg){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			echo '<br>
			<span class="information">(Enter Valid Registration No.)</span>
		</li>
		<li>
			<label for="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword">
				PASSWORD&nbsp;<span class="mandatory">*</span></label>
			<br>
			<input name="pwd" type="password" value = "'.htmlspecialchars($_POST['pwd']).'" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:233px;height:20px;padding-left:2px;" onBlur = "checkPass();" required>&nbsp&nbsp';
			if($err_pass){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>CANNOT BE EMPTY</b></font>';
			}
			if($err_len_pass){
				echo '<img src = "cross.png" width = "15" height = "15" valign = "middle" />&nbsp;&nbsp;<font size = "1" color = "#FF0000"><b>LENGTH LESS THAN 6 CHARACTERS</b></font>';
			}
			echo '<br>
			<span class="information">(Minimum 6 Characters)</span>
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
<!-- REGISTRATION ENDS -->
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
</body></html>
';
	
	} else {
	
	if(empty($degree)) {
		$degree = "----------";
	}
	if(empty($qap)) {
		$qap = "----------";
	}
	if(empty($pin)) {
		$pin = "----------";
	}
	if(empty($fax)) {
		$fax = "----------";
	}
	if(empty($website)) {
		$website = "----------";
	}
	if(empty($occu)) {
		$occu = "----------";
	}
	if(empty($org)) {
		$org = "----------";
	}
	if($_FILES['picfile']['size'] == 0) {
		$image = "unknown.png";
	}
	
	if($_FILES['picfile']['size'] != 0) {
		$image = basename($_FILES['picfile']['name']);
	}
	
	// Function For Reverting Back Name.
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
	
	// Revert Back Name.
	$name = ustrfirst($name);
	
	$query100 = "insert into bck_up (email, pass, reg_no, reg_hash) values ('$email_id', '$pass', '$reg', '".md5($SECURE.$reg)."')";
	
	$result100 = mysqli_query($cxn, $query100);
	
	if($result100) {
	
	$pass = md5($SECURE.$pass);
	
	// Insert Into Database
	
	$query2 = "insert into al_det (name, sex, dob, yoa, yop, institute, degree, branch, qualification, addr, city, pin, country, state, mobile, fax, email, website, job, organisation, reg_no, pass, photo_id) values('$name', '$sex', '$dob', '$yoa', '$yop', '$inst', '$degree', '$brs', '$qap', '$addr', '$city', '$pin', '$country', '$state', '$mobile', '$fax', '$email_id', '$website', '$occu', '$org', '".md5($SECURE.$reg)."', '$pass', '$image')";
	
	$result2 = mysqli_query($cxn, $query2);
	
	if($result2) {
	
	$query4 = "INSERT INTO login_table (reg_no, pass) values('".md5($SECURE.$reg)."', '$pass')";
	
	$result4 = mysqli_query($cxn, $query4);
	
	if($result4) {
	
	$query_bday = "INSERT INTO upcoming_birthday (reg_no, dob) values('".md5($SECURE.$reg)."', '$dob')";
	
	$result_bday = mysqli_query($cxn, $query_bday);
	
	if($result_bday) {
	
	// Login Page
	
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id = "success"><img src = "tick.png" width = "25" height = "25" valign = "middle" />&nbsp;&nbsp;&nbsp;<font size = "2" color = "green">You Have Been Successfully Registered</font></span>&nbsp;
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
					<td align="right">
						<span class="style8"><font color = "#b57f47"><b>Reg No. : </b></font></span>
					</td>
					<td>
						<input name="regist" type="text" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtName" class="required" style="width:250px;height:20px;padding-left:3px;" required>
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
						<input name="pwd" type="password" maxlength="50" id="ctl00_m_g_b5ace897_7501_4a4e_8c88_3c266a4ec979_ctl00_txtPassword" class="required" style="width:250px;height:20px;padding-left:3px;" required>
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
						<span class="style4"><a href="forgot.php" class="style4"><font color = "#b57f47"><b>Forgot Password </b></font></a>&nbsp;</span>
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
<div class="content"></em><p style="float: right; font-weight:bold;"><img src = "quote1.png" valign = "bottom" height = "30" />&nbsp;&nbsp;<span style="font-family: ">Welcome to the SMU Alumni Association of Sikkim Manipal Institute of Technology. We would look forward to your continued interaction and association to help improve the quality of our Academic programme, industry collaborations and various facets of our operations to ensure continuous improvements and exemplary standards of services to our present and past student community.<o:p></o:p></span></p>
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

} else {

	header("Location: error.php?ref=smitregistration"); // Err Page

}

} else {

	header("Location: error.php?ref=smitregistration"); // Err Page

}

} else {

	header("Location: error.php?ref=smitregistration"); // Err Page

}

} else {

	header("Location: error.php?ref=smitregistration"); // Err Page

}

}

} else {

	header("Location: error.php?ref=smitregistration"); // Err Page

}

}

	mysqli_close($cxn);

	}
	
?>