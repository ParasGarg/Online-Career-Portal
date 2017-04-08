<?php
ob_start();
session_start();

require '../db.connect.php';

	$IndustryType = $_POST['job_industry_type'];
	
	$query ="INSERT INTO job_details VALUES('', '$IndustryType')";
	
	if($query_run = mysql_query($query))
	{
		echo 'success';
	}
	
	else { echo 'failed.'; }
?>