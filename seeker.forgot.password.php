<?php
	ob_start();
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<script type="text/javascript" src="js/login.check.js"></script>
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
	
		<!-- Start of seeker Login Div -->
		<div id="seeker">
			
			<!-- Start of sLogin Div -->
			<div id="slogin" style="height: 22%;">
			<font style="color: #CCBA96">			
				
				<!-- Start of Can't Access Form -->
				<form action="seeker.forgot.password.php" method="post" onsubmit="return SeekerForgetPassword()" name="form_seekerforgotpass">
				<br />
						<!-- Start of Username Div -->
						<div>
							<div align="right" class="div_left"><font color="#FF0000">*&nbsp;</font>Username</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input id="textbox" type="text" name="seeker_email_forgot" placeholder="Email-Id"/></div>
						</div><br /><br />
						<!-- End of Username Div -->
						
					<!-- Start of Can't Access Button Div -->
					<div>
					<input id="button" type="submit" name="seeker_btn_forgot" value="Send Password" style="color:#222f50" />
					</div>
					<!-- End of Can't Access Button Div -->
			
				</form>
				<!-- End of Can't Access Form -->
				
				<!-- Start of Login Form -->	
				<form action="seeker.login.php" method="post" name="form_seekerlogin">
			
					<!-- Start of Details Div -->
					<div>
									
						<!-- Start of seeker Login Button Div -->
						<div>
							<input id="button" type="submit" name="seeker_btn_login" value="Try to Login" style="color:#222f50" />
						</div>
						<!-- end of seeker Login Button Div -->
		
				</form>
				<!-- End of Login Form -->
				
				<!-- Start of Join Us Now Form -->
				<form action="seeker.joinus.php" method="post">
					
					<!-- Start of Join Us Now Button Div -->
					<div>
						<input id="button" type="submit" name="seeker_btn_join" value="Join Us Now" style="color:#222f50" />
					</div>
					<!-- End of Can't Access Button Div -->
				
				</form>
				<!-- End of Join Us Now Form -->
				
				</div>
				<!-- End of Detail Div -->
				
			</font>
			</div id="slogin">	
			<!-- End of sLogin Div -->	
		
		</div id="seeker">
		<!-- End seeker Login Div -->	
	
	</div id="body_struct">
	<!-- End of Body Struct Div -->
</body>

<?php
include 'footer_bar.php';
?>

</html>
