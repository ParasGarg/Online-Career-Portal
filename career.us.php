<?php 
	ob_start();
	session_start();	
?> <!-- PHP - Session functons -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!-- <meta http-equiv="refresh" content="5"/> //Use to refresh the page again and again -->
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<script type="text/javascript" src="js/CareerValidation.js"></script>
</head>

<!-- Start PHP - Including tittle bar and Navigation bar -->
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'title_bar.loggedin.php'; include 'navigation.navi.bar.php'; }
	else {	include 'title_bar.php'; include 'navigation_bar.php'; }
?>
<!-- End PHP - Including tittle bar and Navigation bar -->

<body>

	<!-- Start of Body Struct Div -->
	<div id="body_struct">

		<!-- Start of career Us Div -->
		<div id="careerus">	
		
			<!-- Start of Body Heading Div -->
			<div class="heading">
				<div style="float: left; width: 96%">Careers</div>
				<div style="float: left; width: 2%"><a href="contact.us.php" style="text-decoration:none; color:#FF0000">&laquo;</a></div>
				<div style="float: left; width: 1%"><a href="seeker.joinus.php" style="text-decoration:none; color:#FF0000">&raquo;</a></div>
			</div clas="heading">
			<!-- End of Body Heading Div -->			
		
			<!-- Start of Form career Us Div -->
			<form action="career.us.post.php" method="post" name="form_careerus" onsubmit="return Career()" enctype="multipart/form-data">
				
				<br /><br /><br /><br /><br /><br /><br /><br />
				<!-- Start of Left Part of career Us Body Div -->
				<div class="career_left">
										
						<!-- Start of Name Div -->
						<div>
							<div align="right" class="div_left">
								Name<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="career_textbox" type="text" name="career_name" placeholder="Your Good Name" />
							</div>
						</div><br /><br /><br />
						<!-- End of Name Div -->
						
						<!-- Start of Email Div -->
						<div>
							<div align="right" class="div_left">
								Email-Id<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="career_textbox" type="text" name="career_email" placeholder="Your Email-Id" />
							</div><br /><br /><br />
						</div>
						<!-- End of Email Div -->
										
						<!-- Start of career Number Div -->
						<div>
							<div align="right" class="div_left">
								Mobile<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="career_textbox" type="text" name="career_mob" placeholder="Contact Number"/>
							</div><br /><br /><br /><br />
						</div>
						<!-- End of career Number Div -->
			
						<!-- Start of Submit Query Button Div -->
						<div>
							<input class="career_button" type="submit" value="Submit your Request" name="career_button" 
							 	style="background:#80D1D8 ;height:30px; width: 40%; -webkit-border-radius: 8px;" />
						</div>
						<!-- End of Submit Query  Button Div -->
								
				</div class="career_left">
				<!-- Start of Left Part of career Us Body Div -->
			
				<!-- Start of Right Part of career Us Body Div -->
				<div class="career_right">
				
					<!-- Start of Experience Div -->
						<div>
							<div align="right" class="div_left">
								Experience<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
							<select id="textbox" class="dropdownlist" name="career_exp">
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
						</div><br /><br /><br />
						<!-- End of Experience Div -->
						
						<!-- Start of Functional Area Div -->
						<div>
							<div align="right" class="div_left">
								Functional Area<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
							<select id="textbox" class="dropdownlist" name="career_func_area">
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
							</div><br /><br /><br />
						</div>
						<!-- End of Functional Area Div -->
										
						<!-- Start of Upload Resume Div -->
						<div>
							<div align="right" class="div_left">
								Upload Resume<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
							<input type="file" name="career_resume" id="file" /><br />
							</div><br /><br /><br />
						</div>
						<!-- End of career Number Div -->
			
				</div class="career_right">
				<!-- Start of Right Part of career Us Body Div -->
				
			</form>
			<!-- End of the form career Us Div -->
				
				<!-- Start of Body Heading Div -->
				<center>
				<br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br />
				<div class="heading">
					<div style="float: left; width: 96%">For any queries or doubts. Please free to 
						<a href="contact.us.php" style="text-decoration:none">Contact Us.</a> 
					</div>
				</div clas="heading">
				</center>
				<!-- End of Body Heading Div -->
		
		</div id="careerus">
		<!-- Start of career Us Div -->
	
	</div id="body_struct">
	<!-- End of Body Struct Div -->
	
</body>

<?php include 'footer_bar.php'; 

if($_SESSION['flag_careerus'] == 1)
{	
		echo '<script> alert("Hello '.$name.', File has been successfully uploaded."); </script>';
		$_SESSION['flag_careerus'] = 0;
		unset($_SESSION['flag_careerus']); 
}

else if($_SESSION['flag_careerus'] == 2)
{
	echo '<script> alert("File not supported. Select only document file ie .doc or .docx"); </script>';
	$_SESSION['flag_careerus'] = 0; 
	unset($_SESSION['flag_careerus']);
}


?>

</html>