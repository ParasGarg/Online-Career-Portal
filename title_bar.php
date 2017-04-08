<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="icon" href="images/logo.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/title_bar.css" type="text/css"  />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<script type="text/javascript" src="js/SearchValidate.js" ></script>
</head>

<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
	<!-- Start of Title Bar -->
	<div id="title_bar">

		<!-- Start of Quick Search Div in Title Bar -->
		<div id="title_quick_search">
			<form action="search.quick.php" method="post" name="form_quicksearch" onsubmit="return QuickSearchValidate()">
				<input id="textbox" type="text" placeholder="Key Skill" name="quick_key" />
				<input id="textbox" type="text" placeholder="Job Location" name="quick_location" />
				<input id="title_button" type="submit" value="Quick Job Search" />
			</form>
		</div id="title_quick_search">
		<!-- End of Quick Search Div in Title Bar -->
		
		<!-- Start of Home Div in Title Bar -->
		<div id="title_navigation" style="margin-left:13%">
			<a href="index.php">Home</a>
		</div id="title_navigation">
		<!-- End of Home Div in Title Bar -->
		
		<!-- Start of Separater "|" Div in Title Bar -->
		<div id="title_navigation">
			|
		</div id="title_navigation">
		<!-- End of Separater "|" Div in Title Bar -->
		
		<!-- Start of Job Seeker Zone Div in Title Bar -->
		<div id="title_navigation">
			<a href="seeker.login.php">Job Seeker Zone</a>
		</div id="title_navigation">
		<!-- End of Job Seeker Zone Div in Title Bar -->
		
		<!-- Start of Separater "|" Div in Title Bar -->
		<div id="title_navigation">
			|
		</div id="title_navigation">
		<!-- End of Separater "|" Div in Title Bar -->
		
		<!-- Start of Employer Zone Div in Title Bar -->
		<div id="title_navigation">
			<a href="employer.login.php">Employer Zone</a>
		</div id="title_navigation">
		<!-- End of Employer Zone Div in Title Bar -->
		
	</div id="title_bar">
	<!-- End of Title Bar -->
</body>

</html>
