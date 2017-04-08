<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
</head>

<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'title_bar.loggedin.php'; include 'navigation.navi.bar.php'; }
	else {	include 'title_bar.php'; include 'navigation_bar.php'; }
?>

<body>
	<!-- Start of Body Struct Div -->
	<div id="body_struct">
	
		<!-- Start of Search Div -->
		<div id="dashboard_search">
		
			<!-- Start of Body Heading Div -->
			<div class="heading">
				<div style="float: left; width: 97%">Dash Board : Jobs You Applied For</div>
			</div class="heading">
			<!-- End of Body Heading Div -->
		
			<!-- Start of Search Body Div -->
			<div id="search_body">
			<br /><br />
			
				<!-- Start of table in which data displayed -->
				<!-- php code to fetching data from database -->
				<?php include 'seeker.dashboard.fetch.php';	?>
				<!-- End of table in which data displayed -->
				
			</div id="search_body">
			<!-- End of Search Body Div -->
		
		<!-- End of Search Div -->
		</div id="search">
		
	</div id="body_struct">
	<!-- End of Body Struct Div -->
</body>
<?php
include 'footer_bar.php';
?>
</html>
