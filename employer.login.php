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
	
		<!-- Start of employer Login Div -->
		<div id="employer">
			
			<!-- Start of sLogin Div -->
			<div id="elogin">
			<font style="color: #222f50">			
			
				<!-- Start of Login Form -->	
				<form action="employer.login.check.php" method="post" name="form_emplogin" onsubmit="return EmpLogin()">
				<br />
			
					<!-- Start of Details Div -->
					<div>
					
						<!-- Start of Username Div -->
						<div>
							<div align="right" class="div_left"><font color="#FF0000">*&nbsp;</font>Username</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input id="textbox" type="text" name="emp_email_login" placeholder="Email-Id"/></div>
						</div><br /><br />
						<!-- End of Username Div -->
					
						<!-- Start of Password Div -->
						<div>
							<div align="right" class="div_left"><font color="#FF0000">*&nbsp;</font>Password</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input id="textbox" type="password" name="emp_pass_login" placeholder="Password" />
							</div>
						</div><br /><br />
						<!-- End of Password Div -->
						
						<!-- Start of employer Login Button Div -->
						<div>
							<input id="button" type="submit" name="emp_btn_login" value="Employer Login" style="color:#222f50" />
						</div>
						<!-- end of employer Login Button Div -->
		
				</form>
				<!-- End of Login Form -->
				
				<!-- Start of Can't Access Form -->
				<form action="employer.forgot.password.php" method="post">
			
					<!-- Start of Can't Access Button Div -->
					<div>
						<input id="button" type="submit" name="emp_btn_forgot" value="Forgot Password" style="color:#222f50" />
					</div>
					<!-- End of Can't Access Button Div -->
			
				</form>
				<!-- End of Can't Access Form -->
				
				<!-- Start of Join Us Now Form -->
				<form action="employer.joinus.php" method="post">
					
					<!-- Start of Join Us Now Button Div -->
					<div>
						<input id="button" type="submit" name="emp_btn_join" value="Join Us Now" style="color:#222f50" />
					</div>
					<!-- End of Can't Access Button Div -->
				
				</form>
				<!-- End of Join Us Now Form -->
				
				</div>
				<!-- End of Detail Div -->
				
			</font>
			</div id="elogin">	
			<!-- End of sLogin Div -->	
		
		</div id="employer">
		<!-- End employer Login Div -->	
	
	</div id="body_struct">
	<!-- End of Body Struct Div -->
</body>

<?php
include 'footer_bar.php';

if($_SESSION['flag_emp_logincheck'] == 2)
{	
	echo '<script> alert("Username and Password is inorrect."); </script>';
	$_SESSION['flag_emp_logincheck'] = 0;
	unset($_SESSION['flag_emp_logincheck']); 
}

if($_SESSION['emp_loggedin'] == 1)
{
	echo '<script> alert("You are already logged in"); </script>';
	$_SESSION['emp_loggedin'] = 0;
	unset($_SESSION['emp_loggedin']);
}

if($_SESSION['EMP_JOINED'] == 1)
{
	echo '<script> alert("You are now joined with us. Login to access your account."); </script>';
	$_SESSION['EMP_JOINED'] = 0;
	unset($_SESSION['EMP_JOINED']);
}
?>

</html>