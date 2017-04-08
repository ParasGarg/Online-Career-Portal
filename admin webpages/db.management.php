<?php
ob_start();
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin :: Database Management</title>
	<link rel="stylesheet" href="../css/admin.master.css" type="text/css" />
</head>

<?php	
	//Including database connection files to the page
	require '../db.connect.php';
	
	//Including query page to modify database values by insert/update/delete.
	include 'db.query.php';
?>

<body>
	
	<!-- Start of Body Div -->
	<div class="admin_body">
					
		<!-- Start of Database Management Form -->
		<form action="db.management.php" method="get">
		
			<!-- Start of Heading Div -->
			<div>
				<center><h4>Admin :: Database Management</h4></center>
			</div><br />
			<!-- Start of Heading Div -->
			
			<!-- Start of Id Div -->
			<div class="div_body">
				<div align="right" class="div_left">Id</div>
				<div align="center" class="div_center"><b>:</b></div>
				<div align="left" class="div_right">
					<input type="text" name="job_id" placeholder="Indusrty Type"/>
				</div>
			</div><br /><br />
			<!-- End of Id Div -->
			
			<!-- Start of Indusrty Type Div -->
			<div class="div_body">
				<div align="right" class="div_left">Indusrty Type</div>
				<div align="center" class="div_center"><b>:</b></div>
				<div align="left" class="div_right">
					<input type="text" name="job_industry_type" placeholder="Indusrty Type"/>
				</div>
			</div><br /><br />
			<!-- End of Indusrty Type Div -->
			
			<!-- Start of Buttons Div -->
			<div class="div_body">
				<div align="right" style="float:left ;width: 40%">
					<input onclick="<?php InsertToDB(); ?>" type="submit" value="Insert" name="job_insert" style="height:25px;width:100px" />
				</div>
				<div align="center" style="float:left ;width:10%">
					<input onclick="<?php DeleteToDB(); ?>" type="submit" value="Update" name="job_update" style="height:25px;width:100px" />
				</div>
				<div align="left" style="float:left ;width:40%">
					<input onclick="<?php UpdateToDB(); ?>" type="submit" value="Delete" name="job_delete" style="height:25px;width:100px" />
				</div>
			</div><br /><br />
			<!-- End of Buttons Div -->
			
		</form>
		<!-- End of Database Management Form -->
		
	</div>
	<!-- End of Body Div -->

</body>

</html>
