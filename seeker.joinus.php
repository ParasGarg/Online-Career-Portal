<?php
	session_start();
	$_SESSION['captcha'] = rand(1000, 9999);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/join.us.css" type="text/css" />
	<script type="text/javascript" src="js/SeekRegistrationValidate.js" ></script>
</head>

<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'title_bar.loggedin.php'; include 'navigation.navi.bar.php'; }
	else {	include 'title_bar.php'; include 'navigation_bar.php'; }
?>

<body onload="SeekerPageLoad()">
	<!-- Start of Body Struct Div -->
	<div id="body_struct">
	
		<!-- Start of Employer Div -->
		<div id="seeker" style="background-image:url(images/join_seeker.jpg); height:1450px">
		<font color="#222f50">
					
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left; width: 96%">New Member Registration</div>
				<div style="float: left; width: 1%">
					<a href="career.us.php" style="text-decoration:none; color:#FF0000">&laquo;</a></div>
				<div style="float: left; width: 1%">
					<a href="seeker.login.php" style="text-decoration:none; color:#FF0000">&bull;</a>
				</div>
				<div style="float: left; width: 1%">
					<a href="search.jobs.php" style="text-decoration:none; color:#FF0000">&raquo;</a>
				</div><br /><br />
				<div style="float: left;font-size:16px">Login Details</div>
			</div id="joinus_heading">
			<!-- End of Body Heading Div -->
		
			<!-- Start of Employer Join Div -->
			<div id="ejoin">
			
				<!-- Start of Form Employer Join Us Div -->
				<form action="seeker.joinus.register.php" method="post" name="form_registerseeker" onsubmit="return SeekerValidate()" 
					enctype="multipart/form-data">
					
					<br /><br /><br /><br />
					<!-- Start of Email-Id Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Email-Id<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right"><input id="textbox" type="text" name="user_email" placeholder="Email-Id"/></div>
					</div>
					<!-- End of Email-Id Div -->
						
					<!-- Start of Email Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Confirm Email-Id<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_reemail" placeholder="Confirm Email-Id" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Email Div -->
						
					<!-- Start of Password Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Password<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right"><input id="textbox" type="password" name="user_pass" placeholder="Password" /></div>
					</div id="left_part">
					<!-- End of Password Div -->
					
					<!-- Start of Confirm Password Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Confirm Password<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="password" name="user_repass" placeholder="Confirm Password" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Confirm Password Div -->
				
			</div id="ejoin">
			<!-- End of Employer Join Us Div -->		
			
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left;font-size:16px">Contact Details</div>
			</div id="joinus_heading">
			<!-- End of Body Heading Div -->
					
			<!-- Start of Employer Join Div -->
			<div id="ejoin">
					
					<br /><br />
					<!-- Start of First Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							First Name<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_fname" placeholder="Your Good Name" />
						</div>
					</div id="left_part">
					<!-- End of First Name Div -->
					
					<!-- Start of Surname Type Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Surname<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_lname" placeholder="Your last name" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Surname Div -->
					
					<!-- Start of Gender Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Gender<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="radio" name="seeker_gender" value="Male" />Male
							<input type="radio" name="seeker_gender" value="Female" />Female
						</div>
					</div id="left_part">
					<!-- End of Gender Div -->
					
					<!-- Start of Marriage Status Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Marriage Status
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="radio" name="seeker_marriage" value="Single" />Single
							<input type="radio" name="seeker_marriage" value="Married" />Married
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Marriage Status Div -->
					
					<!-- Start of Contact Number Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Contact Number<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_mob" placeholder="Your Personal Number" />
						</div>
					</div id="left_part">
					<!-- End of Contact Number Div -->
					
					<!-- Start of Home Number Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Home Number
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_home" placeholder="Your Home Number" />
						</div>
					</div id="right_part"><br /><br /><br />
					<!-- End of Home Number Div -->
					
					<!-- Start of Address Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Address
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<textarea rows="8" cols="50" id="textbox" name="user_add" style="width: 62%"></textarea>
						</div>
					</div id="left_part">
					<!-- End of Address Div -->
					
					<!-- Start of Country Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Country
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_country" placeholder="Your Country Name" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Country Div -->
					
					<!-- Start of State Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							State
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_state" placeholder="Your State Name" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of State Div -->
					
					<!-- Start of City Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							City<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_city" placeholder="Your City Name" />
						</div>
					</div id="left_part"><br /><br />
					<!-- End of City Div -->
					
					<!-- Start of Pin-Code Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Pin-Code<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_pincode" placeholder="Your Area Pin-Code" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Pin-Code Div -->
			
			</div id="ejoin">
			<!-- End of Employer Join Us Div -->		
			
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left;font-size:16px">Current Employment Details</div>
			</div id="joinus_heading"><br /><br />
			<!-- End of Body Heading Div -->
			
			<!-- Start of Employer Join Div -->
			<div id="ejoin">
			
					<!-- Start of Key Skills Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Key Skills<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="user_key_skill" placeholder="Key Skills such as C, Java, etc." />
						</div>
					</div id="left_part">
					<!-- End of Key Skills Div -->
					
					<!-- Start of Experience Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Experience<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<select class="dropdownlist" name="seeker_exp_ddl" onchange="ChangeExperienceDDL()">
								<option value="-1">Select</option>
								<option value="0">Fresher</option>
								<option value="1">1 Year</option>
								<option value="2">2 Years</option>
								<option value="3">3 Years</option>
								<option value="4">4 Years</option>
								<option value="5">5 Years</option>
								<option value="6">6 Years</option>
								<option value="7">7 Years</option>
								<option value="8">8 Years</option>
								<option value="9">9 Years</option>
								<option value="10">10 Years</option>
								<option value="11">11 Years</option>
								<option value="12">12 Years</option>
								<option value="13">13 Years</option>
								<option value="14">14 Years</option>
								<option value="15">15 Years</option>
								<option value="16">16 Years</option>
								<option value="17">17 Years</option>
								<option value="18">18 Years</option>
								<option value="19">19 Years</option>
								<option value="20">20 Years</option>
								<option value="21">21 Years</option>
								<option value="22">22 Years</option>
								<option value="23">23 Years</option>
								<option value="24">24 Years</option>
								<option value="25">25 Years</option>
								<option value="26">26 Years</option>
								<option value="27">27 Years</option>
								<option value="28">28 Years</option>
								<option value="29">29 Years</option>
								<option value="30">30+ Years</option>
							</select>
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Experience Div -->
					
					<!-- Start of Industry Type Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Industry Type
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<select class="dropdownlist" name="seeker_industry_type_ddl" >
									<option value="-1">Select</option>
									<option value="0">Accounting / Finance</option>
									<option value="1">Advertising / PR / MR / Event Management</option>
									<option value="2">Agriculture / Dairy</option>
									<option value="3">Animation / Gaming</option>
									<option value="4">Architecture / Interior Design</option>
									<option value="5">Automobile / Auto Anciliary / Auto Components</option>
									<option value="6">Aviation / Aerospace Firms</option>
									<option value="7">Banking / Financial Services / Broking</option>
									<option value="8">BPO / Call Centre / ITES</option>
									<option value="9">Brewery / Distillery</option>
									<option value="10">Ceramics / Sanitary ware</option>
									<option value="11">Chemicals / PetroChemical / Plastic / Rubber</option>
									<option value="12">Construction / Engineering / Cement / Metals</option>
									<option value="13">Consumer Electronics / Appliances / Durables</option>
									<option value="14">Courier / Transportation / Freight / Warehousing</option>
									<option value="15">Education / Teaching / Training</option>
									<option value="16">Electricals / Switchgears</option>
									<option value="17">Export / Import</option>
									<option value="18">Facility Management</option>
									<option value="19">Fertilizers / Pesticides</option>
									<option value="20">FMCG / Foods / Beverage</option>
									<option value="21">Food Processing</option>
									<option value="22">Fresher / Trainee / Entry Level</option>
									<option value="23">Gems / Jewellery</option>
									<option value="24">Glass / Glassware</option>
									<option value="25">Government / Defence</option>
									<option value="26">Heat Ventilation / Air Conditioning</option>
									<option value="27">Industrial Products / Heavy Machinery</option>
									<option value="28">Insurance</option>
									<option value="29">Iron and Steel</option>
									<option value="30">IT-Hardware &amp; Networking</option>
									<option value="31">IT-Software / Software Services</option>
									<option value="32">KPO / Research / Analytics</option>
									<option value="33">Legal</option>
									<option value="34">Media / Entertainment / Internet</option>
									<option value="35">Internet / Ecommerce</option>
									<option value="36">Medical / Healthcare / Hospitals</option>
									<option value="37">Mining / Quarrying</option>
									<option value="38">NGO / Social Services / Regulators / Industry Associations</option>
									<option value="39">Office Equipment / Automation</option>
									<option value="40">Oil and Gas / Energy / Power / Infrastructure</option>
									<option value="41">Pulp and Paper</option>
									<option value="42">Pharma / Biotech / Clinical Research</option>
									<option value="43">Printing / Packaging</option>
									<option value="44">Publishing</option>
									<option value="45">Real Estate / Property</option>
									<option value="46">Recruitment / Staffing</option>
									<option value="47">Retail / Wholesale</option>
									<option value="48">Security / Law Enforcement</option>
									<option value="49">Semiconductors / Electronics</option>
									<option value="50">Shipping / Marine</option>
									<option value="51">Strategy / Management Consulting Firms</option>
									<option value="52">Telcom / ISP</option>
									<option value="53">Textiles / Garments / Accessories</option>
									<option value="54">Travel / Hotels / Restaurants / Airlines / Railways</option>
									<option value="55">Tyres</option>
									<option value="56">Water Treatment / Waste Management</option>
									<option value="57">Wellness / Fitness / Sports</option>
									<option value="58">Other</option>
								</select>
						</div>
					</div id="left_part">
					<!-- End of Industry Type Div -->
					
					<!-- Start of Functional Area Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Functional Area
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<select class="dropdownlist" name="seeker_func_area_ddl">
								<option value="-1">Select</option>
								<option value="0"><li>Accounts / Finance / Tax / CS / Audit</li></option>
								<option value="1"><li>Agent</li></option>
								<option value="2"><li>Analytics &amp; Business Intelligence</li></option>
								<option value="3"><li>Architecture / Interior Design</li></option>
								<option value="4"><li>Banking / Insurance</li></option>
								<option value="5"><li>Content / Journalism</li></option>
								<option value="6"><li>Corporate Planning / Consulting</li></option>
								<option value="7"><li>Engineering Design / R&amp;D</li></option>
								<option value="8"><li>Export / Import / Merchandising</li></option>
								<option value="9"><li>Fashion / Garments / Merchandising</li></option>
								<option value="10"><li>Guards / Security Services</li></option>
								<option value="11"><li>Hotels / Restaurants</li></option>
								<option value="12"><li>HR / Administration / IR</li></option>
								<option value="13"><li>IT Software - Application Programming / Maintenance</li></option>	
								<option value="14"><li>IT Software - Client Server</li></option>
								<option value="15"><li>IT Software - Mainframe</li></option>
								<option value="16"><li>IT Software - Middleware</li></option>
								<option value="17"><li>IT Software - Mobile</li></option>
								<option value"18"><li>IT Software - Other</li></option>
								<option value"19"><li>IT Software - System Programming</li></option>
								<option value"20"><li>IT Software - Telecom Software</li></option>
								<option value"21"><li>IT Software - DBA / Datawarehousing</li></option>
								<option value"22"><li>IT Software - E-Commerce / Internet Technologies</li></option>
								<option value"23"><li>IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</li></option>
								<option value"24"><li>IT Software - ERP / CRM</li></option>
								<option value"25"><li>IT Software - Network Administration / Security</li></option>
								<option value"26"><li>IT Software - QA &amp; Testing</li></option>
								<option value"27"><li>IT Software - Systems / EDP / MIS</li></option>
								<option value"28"><li>IT- Hardware / Telecom / Technical Staff / Support</li></option>
								<option value="29"><li>ITES / BPO / KPO / Customer Service / Operations</li></option>
								<option value"30"><li>Legal</li></option>
								<option value"31"><li>Marketing / Advertising / MR / PR</li></option>
								<option value"32"><li>Packaging</li></option>
								<option value"33"><li>Pharma / Biotech / Healthcare / Medical / R&amp;D</li></option>
								<option value="34"><li>Production / Maintenance / Quality</li></option>
								<option value"35"><li>Purchase / Logistics / Supply Chain</li></option>
								<option value"36"><li>Sales / BD</li></option>
								<option value"37"><li>Secretary / Front Office / Data Entry</li></option>
								<option value"38"><li>Self Employed / Consultants</li></option>
								<option value"39"><li>Shipping</li></option>
								<option value"40"><li>Site Engineering / Project Management</li></option>
								<option value"41"><li>Teaching / Education</li></option>
								<option value"42"><li>Ticketing / Travel / Airlines</li></option>
								<option value"43"><li>Top Management</li></option>
								<option value"44"><li>TV / Films / Production</li></option>
								<option value"45"><li>Web / Graphic Design / Visualiser</li></option>
								<option value"46"><li>Other</li></option>
							</select>
					</div id="right_part">
					<!-- End of Functional Area Div -->
			
			</div id="ejoin"><br /><br />
			<!-- End of Employer Join Us Div -->		
			
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left;font-size:16px">Education Details</div>
			</div id="joinus_heading"><br /><br />
			<!-- End of Body Heading Div -->
			
			<!-- Start of Employer Join Div -->
			<div id="ejoin">		
			
					<!-- Start of Highest Education Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Highest Education<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<select class="dropdownlist" name="seeker_highest_course" onchange="ChangeHighestCourse()">
								<option value="-1">Select</option>
								<option value="0">Not Pursued Graduation</option>
								<option value="1">Graduation</option>
								<option value="2">Post-Graduation</option>
								<option value="3">Others</option>								
							</select>
						</div>
					</div id="left_part">
					<!-- End of Highest Education Div -->
					
					<!-- Start of Highest Education Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Others
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" placeholder="Describe your education" name="seeker_edu_describe" />
						</div>
					</div id="left_part"><br /><br /><br />
					<!-- End of Highest Education Div -->

<!-- Start of HSC Div -->
<div id="hsc">
					<div id="left_part">
						<div align="right" class="div_left">
							HSC Board
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc" placeholder="Name of HSC Board"/>
						</div>
					</div>
					<!-- End of SSC Div -->
						
					<!-- Start of Specialisation Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Specialisation
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc_special" placeholder="Specialisation of HSC" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Specialisation Div -->
						
					<!-- Start of Percentage Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Percentage/CGPA
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc_percentage" placeholder="Score in HSC" />
						</div>
					</div id="left_part">
					<!-- End of Percentage Div -->
					
					<!-- Start of Roll Number Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Roll Number
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc_rollno" placeholder="HSC Roll Number" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Roll Number Div -->
					
					<!-- Start of School Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							School
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc_college" placeholder="Name of School" />
						</div>
					</div id="left_part">
					<!-- End of School Name Div -->
					
					<!-- Start of Passing Batch Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Passing Batch
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_hsc_batch" placeholder="Year of Passing" />
						</div>
					</div id="right_part"><br /><br /><br />
					<!-- End of Passing Batch Div -->
</div id="hsc">
<!-- HSC Degree -->	

<!-- SSC Degree -->	
					<!-- Start of SSC Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							SSC Board
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc" placeholder="Name of SSC Board"/>
						</div>
					</div>
					<!-- End of SSC Div -->
						
					<!-- Start of Specialisation Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Specialisation
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc_special" placeholder="Specialisation of SSC" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Specialisation Div -->
						
					<!-- Start of Percentage Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Percentage/CGPA
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc_percentage" placeholder="Score in SSC" />
						</div>
					</div id="left_part">
					<!-- End of Percentage Div -->
					
					<!-- Start of Roll Number Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Roll Number
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc_rollno" placeholder="SSC Roll Number" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Roll Number Div -->
					
					<!-- Start of School Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							School
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc_college" placeholder="Name of School" />
						</div>
					</div id="left_part">
					<!-- End of School Name Div -->
					
					<!-- Start of Passing Batch Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Passing Batch
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_ssc_batch" placeholder="Year of Passing" />
						</div>
					</div id="right_part"><br /><br /><br />
					<!-- End of Passing Batch Div -->
<!-- SSC Degree -->					

<!-- Bachelors Degree -->		
					<!-- Start of Bachelors Degree Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Bachelors Degree
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor" placeholder="Name of Degree Course"/>
						</div>
					</div>
					<!-- End of Bachelors Degree Div -->
						
					<!-- Start of Specialisation Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Specialisation
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor_special" placeholder="Specialisation of Degree" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Specialisation Div -->
						
					<!-- Start of Percentage Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Percentage/CGPA
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor_percentage" placeholder="Score Achieved" />
						</div>
					</div id="left_part">
					<!-- End of Percentage Div -->
					
					<!-- Start of Roll Number Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Roll Number
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor_rollno" placeholder="Degree Roll Number" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Roll Number Div -->
					
					<!-- Start of College Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							College
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor_college" placeholder="Name of College" />
						</div>
					</div id="left_part">
					<!-- End of College Name Div -->
					
					<!-- Start of Passing Batch Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Passing Batch
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_bachelor_batch" placeholder="Year of Passing" />
						</div>
					</div id="right_part"><br /><br /><br />
					<!-- End of Passing Batch Div -->
<!-- Bachelors Degree -->					
					
<!-- Masters Degree -->					
					<!-- Start of Masters Degree Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Masters Degree
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master" placeholder="Name of Degree Course"/>
						</div>
					</div>
					<!-- End of Masters Degree Div -->
						
					<!-- Start of Specialisation Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Specialisation
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master_special" placeholder="Specialisation of Degree" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Specialisation Div -->
						
					<!-- Start of Percentage Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Percentage/CGPA
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master_percentage" placeholder="Score Achieved" />
						</div>
					</div id="left_part">
					<!-- End of Percentage Div -->
					
					<!-- Start of Roll Number Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Roll Number
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master_rollno" placeholder="Degree Roll Number" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Roll Number Div -->
					
					<!-- Start of College Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							College
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master_college" placeholder="Name of College" />
						</div>
					</div id="left_part">
					<!-- End of College Name Div -->
					
					<!-- Start of Passing Batch Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Passing Batch
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="seeker_master_batch" placeholder="Year of Passing" />
						</div>
					</div id="right_part"><br />
					<!-- End of Passing Batch Div -->
<!-- Masters Degree -->
					
			</div id="ejoin"><br />
			<!-- End of Employer Join Us Div -->
					
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left;font-size:16px">Upload Resume</div>
				<div style="float: left;font-size:16px; margin-left: 42%;">Captcha</div>
			</div id="joinus_heading"><br /><br />
			<!-- End of Body Heading Div -->
			
			<!-- Start of Employer Join Div -->
			<div id="ejoin">
			
					<!-- Start of Upload File Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							<font style="margin-left:3%;">Upload your Document</font><font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="file" name="seeker_resume" id="file" /><br />
							</div>
					</div>
					<!-- End of Upload File Div -->
					
					<!-- Start of Captcha Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Captcha Code<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<div style="margin-left:16%"><img src="captcha.php" /></div>
							<div>
								<input id="textbox" type="text" name="seeker_captcha" placeholder="Enter Captcha Value" />
								<input type="hidden" value="<?php echo $_SESSION['captcha']; ?>" name="seeker_hddn_capta" />
							</div>
						</div>
					</div id="right_part">
					<!-- End of Captcha Div -->
					
			</div id="ejoin"><br /><br /><br />
			<!-- End of Employer Join Us Div -->
			
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left;font-size:16px">Agreement</div>
				<div style="float: left;font-size:16px; margin-left: 45%;">Registration</div>
			</div id="joinus_heading"><br />
			<!-- End of Body Heading Div -->
			
			<!-- Start of Employer Join Div -->
			<div id="ejoin">

					<!-- Start of Agreement Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							<input type="checkbox" name="seeker_agree"  onclick="SeekerPageLoad()" /><br />
							<input type="checkbox" name="seeker_notifications" /><br />
							<input type="checkbox" name="seeker_call_sms" />
						</div>
						<div align="left" class="div_right">
							I agree on 
							<a href="index.php" style="text-decoration:none; color:#0000FF">
									Terms &amp; Condition<font color="#FF0000">&nbsp;*</font>
							</a><br />
							Notifications from us.<br />
							Receive Call and SMS from us.
						</div>
					</div id="left_part"><br />
					<!-- End of Agreement Div -->
					
					<!-- Start of Registration Button Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Complete your Registration<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="submit" value="Register" id="button" name="seeker_register"
								style="background-color: #CCBA96;color: #222f50; width: 200px;" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Registration Button Div -->
					
					
					<!-- Start of Register Me Button Div -->
					<div id="right_part">
						
					</div>
					<!-- End of Register Me Button Div -->
				
				</form>
				<!-- End of the form Employer Join Us Div -->
			
			</div id="ejoin"></div>
			<!-- End of Employer Join Us Div -->		
	
		</font>
		</div id="employer">
		<!-- End of Employer Div -->
	
	</div id="body_struct">
	<!-- End of Body Struct Div -->
</body>
<?php
include 'footer_bar.php';
?>
</html>