<?php 
	session_start(); 
	$seekid = $_SESSION['SEEK_ID'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/navi.bar.css" type="text/css"  />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
</head>

<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
	<!-- Start of Title Bar -->
	<div id="navi_title_bar">
	
		<!-- Start of Job Seeker Zone Div in Title Bar -->
		<div id="navi_title_navigation" style="margin-left: 2.5%">
			<?php echo	'<a href="seeker.edit.profile.php" onClick="MyWindow=window.open
							('."'seeker.edit.profile.php?id=".$seekid."', '_window');".'return false;">
						Edit Profile
						</a>';
			?>
		</div id="title_navigation">
		<!-- End of Job Seeker Zone Div in Title Bar -->
		
		<!-- Start of Separater "|" Div in Title Bar -->
		<div id="navi_title_navigation">
			|
		</div id="title_navigation">
		<!-- End of Separater "|" Div in Title Bar -->
		
		<!-- Start of Employer Zone Div in Title Bar -->
		<div id="navi_title_navigation">
			<?php echo	'<a href="seeker.edit.profile.php" onClick="MyWindow=window.open
							('."'seeker.dashboard.php?id=".$seekid."', '_window');".'return false;">
						Dash Board
						</a>';
			?>
		</div id="title_navigation">
		<!-- End of Employer Zone Div in Title Bar -->
		
	</div id="navi_title_bar">
	<!-- End of Title Bar -->
</body>

</html>
