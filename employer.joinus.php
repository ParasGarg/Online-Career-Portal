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
	<script type="text/javascript" src="js/EmpRegistrationValidate.js" ></script>
</head>

<!-- Start of title and navigation bar div -->
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'title_bar.loggedin.php'; include 'navigation.navi.bar.php'; }
	else {	include 'title_bar.php'; include 'navigation_bar.php'; }
?>
<!-- End of title and navigation bar div -->

<!-- checking for unique email id and username in database --
php 
	
	if(isset($_POST['emp_user_name']) && isset($_POST['emp_email']))
	{
		$emp_username = $_POST['emp_user_name'];
		$emp_email_id = $_POST['emp_email'];
		
		if(!empty($emp_username) && !empty($emp_email_id))
		{
			$query_username = "SELECT username FROM job_details WHERE username = '$emp_username'";
			$query_email = "SELECT email_id FROM job_details WHERE email_id = '$emp_email_id'";
						
			if($query_run_username = mysql_query($query))
			{
				$query_run_num_username = mysql_num_rows($query_run_username);
				
				if($query_run_num_username == 0)
				{
					echo '<script> alert("Username Is Available"); </script>';
				}
				
				else
				{
					echo '<script> alert("Username Is not Available"); </script>';
				}
			}
		}
	}
?>  -->

<body onload="LoadPage()">
	<!-- Start of Body Struct Div -->
	<div id="body_struct">
	
		<!-- Start of Employer Div -->
		<div id="employer" style="height:520px;">
		<font color="#222f50">
			
			<!-- Start of Body Heading Div -->
			<div id="joinus_heading">
				<div style="float: left; width: 98%">New Client Registration</div>
				<div style="float: left; width: 1%">
					<a href="employer.login.php" style="text-decoration:none; color:#FF0000;">&bull;</a>
				</div>
			</div id="joinus_heading">
			<!-- End of Body Heading Div -->	
		
			<!-- Start of Employer Join Div -->
			<div id="ejoin">
			
				<!-- Start of Details Div -->
				<div><br /><br />
				
				<!-- Start of Form Employer Join Us Div -->
				<form method="post" action="employer.joinus.register.php" onclick="return EmpValidate()" name="form_empjoinus" >
					
					<!-- Start of Username Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Username<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right"><input id="textbox" type="text" name="emp_user_name" placeholder="Username" /></div>
					</div>
					<!-- End of Username Div -->
					
					<!-- Start of Email Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Email-Id<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right"><input id="textbox" type="text" name="emp_email" placeholder="Email-Id"/></div>
					</div><br /><br />
					<!-- End of Email Div -->
						
					<!-- Start of Password Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Password<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right"><input id="textbox" type="password" name="emp_pass" placeholder="Password" /></div>
					</div id="left_part">
					<!-- End of Password Div -->
					
					<!-- Start of Confirm Password Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Confirm Password<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="password" name="emp_repass" placeholder="Confirm Password" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Confirm Password Div -->
					
					<!-- Start of Company Name Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Company Name<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_cmpname" placeholder="Name of Company" />
						</div>
					</div id="left_part">
					<!-- End of Company Name Div -->
					
					<!-- Start of Company Type Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Company Type<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="radio" name="emp_cmptype" value="Company" />Company
							<input type="radio" name="emp_cmptype" value="Consultant" />Consultant
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Company Type Div -->
					
					<!-- Start of Industry Type Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Industry Type<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<select class="dropdownlist" name="emp_industry_type">
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
					
					<!-- Start of Gender Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Gender<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input type="radio" name="emp_gender" value="Male" />Male
							<input type="radio" name="emp_gender" value="Female" />Female
						</div>
					</div><br /><br />
					<!-- End of Gender Div -->
					
					<!-- Start of Address Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Address<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<textarea rows="5" cols="50" id="textbox" name="emp_add" style="width: 62%"></textarea>
						</div>
					</div id="left_part">
					<!-- End of Address Div -->
					
					<!-- Start of Capta Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Captcha Code<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<div>
								<img src="captcha.php" />
							</div><br />
							<div>
								<input id="textbox" type="text" name="emp_captcha" placeholder="Enter Captcha Value" /></div>
								<input id="textbox" type="hidden" name="emp_hidden_captcha" value="<?php echo $_SESSION['captcha'] ?>" />
						</div>
					</div id="right_part"><br /><br /><br /><br /><br />
					<!-- End of Capta Div -->
					
					<!-- Start of City Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							City<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_city" placeholder="Your City Name" />
						</div>
					</div id="left_part">
					<!-- End of City Div -->
					
					<!-- Start of State Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							State<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_state" placeholder="Your State Name" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of State Div -->
					
					<!-- Start of Country Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Country<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_country" placeholder="Your Country Name" />
						</div>
					</div id="left_part">
					<!-- End of Country Div -->
					
					<!-- Start of Pin-Code Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Pin-Code<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_pincode" placeholder="Your Area Pin-Code" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Pin-Code Div -->
					
					<!-- Start of Contact Number Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							Contact Number<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<!--<input id="textbox" type="text" name="emp_phno_ext" placeholder="Ext." style="width:15%"/>-->
							<input id="textbox" type="text" name="emp_phno" placeholder="Your Contact Number" />
						</div>
					</div id="left_part">
					<!-- End of Contact Number Div -->
					
					<!-- Start of Contact Person Div -->
					<div id="right_part">
						<div align="right" class="div_left">
							Contact Person<font color="#FF0000">&nbsp;*</font>
						</div>
						<div align="center" class="div_center"><b>:</b></div>
						<div align="left" class="div_right">
							<input id="textbox" type="text" name="emp_name" placeholder="Contact Person Name" />
						</div>
					</div id="right_part"><br /><br />
					<!-- End of Contact Person Div -->
					
					<!-- Start of Agreement Div -->
					<div id="left_part">
						<div align="right" class="div_left">
							<input type="checkbox" name="emp_agree" onclick="LoadPage()"/>
						</div>
						<div align="left" class="div_right">
							I agree on <a href="index.php" style="text-decoration:none; color:#0000FF">Terms &amp; Conditions</a>
							<font color="#FF0000">&nbsp;*</font>
						</div>
					</div id="left_part"><br /><br /><br />
					<!-- End of Agreement Div -->
					
					<!-- Start of Register Me Button Div -->
					<div id="register">
						<input type="submit" value="Register Me" id="button" name="emp_btn_register" onclick="EmpValidate()"
								style="background-color:#C1D5E0; color:#222f50; margin-left: 42.5%; width:15%;"/>
					</div>
					<!-- End of Register Me Button Div -->
				
					<!-- Start of hidden fields -->
					<div>
						<input type="hidden" value="<?php echo $query_run_num_username; ?>" name="emp_hddn_username" /> 
					</div>
					<!-- End of hidden fields -->
				
				</form>
				<!-- End of the form Employer Join Us Div -->
				
				</div>
				<!-- End of Details Div -->
		
			</div id="ejoin">
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


<!-- Some Codes
	
	//Use to display new captcha value on page load by the help of JavaScript inside PHP
	echo '<script>alert("New Captcha Value = " + "'.$_SESSION['captcha'].'");</script>'; 
	
	//Assigning session & captcha value in Javascript
	echo '<script> var SessionVal ='.$_SESSION['captcha'].'; </script>';
	echo '<script> var CaptchaVal ='.$_POST['emp_captcha'].'; </script>';
	
	//Setting cookie in JavaScript using PHP
	echo '<script>setcookie("session_id", "'.$_SESSION['captcha'].'", 60);/script>';
-->