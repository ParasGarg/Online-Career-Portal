<?php	session_start(); ?> <!-- PHP - Session functons -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!-- <meta http-equiv="refresh" content="5"/> //Use to refresh the page again and again -->
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<script type="text/javascript" src="js/ContactUsValidate.js"></script>
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
	
		<!-- Start of Contact Us Div -->
		<div id="contactus">	
		
				<!-- Start of Body Heading Div -->
				<div class="heading">
					<div style="float: left; width: 97%">Contact Us</div>
					<div style="float: left; width: 2%"><a href="career.us.php" style="text-decoration:none; color:#FF0000">&raquo;</a></div>
				</div clas="heading">
				<!-- End of Body Heading Div -->			
			
				<br /><br />
				<!-- Start of Left Part of Contact Us Body Div -->
				<div class="contact_left">
					
					<!-- Start of Form Contact Us Div -->
					<form action="contact.us.mail.php" method="post" name="form_contactus" onsubmit="return ContactUsValidate();">
					
						<!-- Start of Name Div -->
						<div>
							<div align="right" class="div_left">
								Name<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="contact_textbox" type="text" name="contact_name" placeholder="Your Good Name" />
							</div>
						</div><br /><br />
						<!-- End of Name Div -->
						
						<!-- Start of Email Div -->
						<div>
							<div align="right" class="div_left">
								Email-Id<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="contact_textbox" type="text" name="contact_email" placeholder="Email-Id" />
							</div><br /><br />
						</div>
						<!-- End of Email Div -->
						
						<!-- Start of Subject Div -->
						<div>
							<div align="right" class="div_left">
								Subject<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="contact_textbox" type="text" name="contact_sub" placeholder="Subject" />
							</div><br /><br />
						</div>
						<!-- End of Contact Number Div -->
						
						<!-- Start of Query Div -->
						<div>
							<div align="right" class="div_left">
								Query<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<textarea rows="5" cols="50" class="contact_query" name="contact_query" 
									style="width: 62%;-webkit-border-radius: 8px;"></textarea>
							</div>
						</div><br /><br /><br /><br /><br />
						<!-- End of Query Div -->
						
						<!-- Start of Contact Number Div -->
						<div>
							<div align="right" class="div_left">
								Mobile<font color="#FF0000">&nbsp;*</font>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input class="contact_textbox" type="text" name="contact_mob" placeholder="Contact Number"/>
							</div><br /><br />
						</div>
						<!-- End of Contact Number Div -->
			
						<!-- Start of Submit Query Button Div -->
						<div>
							<input class="contact_button" type="submit" value="Submit your Query" id="button" name="contact_query_button" />
						</div>
						<!-- End of Submit Query  Button Div -->
					
					</form>
					<!-- End of the form Contact Us Div -->
			
				</div class="contact_left">
				<!-- Start of Left Part of Contact Us Body Div -->
			
				<!-- Start of Right Part of Contact Us Body Div -->
				<div class="contact_right">
			
				</div class="contact_right">
				<!-- Start of Right Part of Contact Us Body Div -->
				
				<!-- Start of Body Heading Div -->
				<center>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<div class="heading">
					<div style="float: left; width: 96%">Customer Care Number (Toll-Free): 1800-958-2424-404</div>
				</div clas="heading">
				</center>
				<!-- End of Body Heading Div -->
		
		</div id="contactus">
		<!-- Start of Contact Us Div -->
	
	</div id="body_struct">
	<!-- End of Body Struct Div -->
	
</body>
<?php include 'footer_bar.php'; ?>
</html>
