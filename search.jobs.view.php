<?php
	ob_start();
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Drive Info</title>
	<link rel="stylesheet" href="css/search.view.css" type="text/css" />
</head>

<?php 
	$conn = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('jobsportal', $conn);
	if($conn == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
	if($db == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
?>

<body>
	
	<div id="body_struct">

<?php 
	$id=$_REQUEST['id'];
	$query = "SELECT * FROM job_details WHERE id='$id'";
	$query_run = mysql_query($query);
	
	while($query_result=mysql_fetch_array($query_run))
	{
		echo '	<div><center><h2>'.$query_result['name'].' Walk-in Information </h2></center></div><br />';
		
		echo'	<div class="div_left">';
			echo'	<div class="div_struct"><b>Company Name : </b>'.$query_result['name'].'</div><br />';
			echo'	<div class="div_struct"><b>Profile : </b>'.$query_result['profile'].'</div><br />';
			echo'	<div class="div_struct"><b>Key Skill Required : </b>'.$query_result['key_skill'].'</div><br />';
			echo'	<div class="div_struct"><b>Job Location : </b>'.$query_result['location'].'</div><br />';
			echo'	<div class="div_struct"><b>Cost To Company : </b>'.$query_result['ctc'].'</div><br />';				
	
			$experience = $query_result['exp_required'];
			$industry_type = $query_result['industry_type'];
			
			$query_exp = "SELECT experience FROM job_exp WHERE id='$experience'";
			$query_industry_type = "SELECT industry_type FROM job_industry_type WHERE id='$industry_type'";
			
			$query_run_exp = mysql_query($query_exp);
			$query_run_industy_type = mysql_query($query_industry_type);
			
			$query_exp_result = mysql_result($query_run_exp, 0, 'experience');
			$query_industy_type_result=mysql_result($query_run_industy_type, 0, industry_type);
				
			echo'	<div class="div_struct"><b>Experience Need : </b>'.$query_exp_result.'</div><br />';
			echo'	<div class="div_struct"><b>Industry Type : </b>'.$query_industy_type_result.'</div><br />';
			echo'	<div class="div_struct"><b>Number of Vacancies : </b>'.$query_result['vacancies'].'</div><br />';
			echo'	<div class="div_struct"><b>Tantative Date of Joining : </b>'.$query_result['join_date'].'</div><br />';
			echo'		<div class="div_struct"><b>Job Description : </b>'.$query_result['jd'].'</div><br />';
		echo'	</div class="div_left><br/>';
		
		echo'	<div class="div_right">';
			echo'	<div class="div_struct"><b>Organization Website : </b>'.$query_result['website'].'</div><br />';
			echo'	<div class="div_struct"><b>Last Date to Apply : </b>'.$query_result['expire_date'].'</div><br />';
			echo'	<div class="div_struct"><b>Job Post Date : </b>'.$query_result['post_date'].'</div><br />';	
			echo'	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
			
			echo'	<form action="search.job.applied.php?job_id='.$id.'" method="post">';
				echo'	<input type="submit" value="Apply for the Job" style="float: right; margin-right: 5%" />';
			echo'	</form>';
		echo'	</div class="div_right">';		
	}
?>
	
	</div>
</body>

<?php
	if($_SESSION['view_loggedin'] == 1)
	{
		echo '<script> alert("You are not logged in. Login then apply for this job"); </script>';
		$_SESSION['view_loggedin'] = 0;
		unset($_SESSION['view_loggedin']);
	}
	
	if($_SESSION['job_applied'] == 1)
	{
		echo '<script> alert("Already Applied"); </script>';
		$_SESSION['job_applied'] == 0;
		unset($_SESSION['job_applied']);
	}
	
	else if($_SESSION['job_applied'] == 2)
	{
		echo '<script> alert("Applied Successfully"); </script>';
		$_SESSION['job_applied'] == 0;
		unset($_SESSION['job_applied']);
	}
?>

</html>