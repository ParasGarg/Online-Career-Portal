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
	$id = $_SESSION['SEEK_ID']; 
	$id=$_REQUEST['id'];
	$query = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run = mysql_query($query);
	
	while($query_result=mysql_fetch_array($query_run))
	{
		
		$experience = $query_result['experience'];
		$industry_type = $query_result['industry_type'];
		$func_area = $query_result['func_area'];
		$highest_course = $query_result['highest_course'];
		
		$query_exp = "SELECT experience FROM job_exp WHERE id='$experience'";
		$query_industry_type = "SELECT industry_type FROM job_industry_type WHERE id='$industry_type'";
		$query_func_area = "SELECT functional_area FROM job_func_area WHERE id='$func_area'";
		$query_highest_course = "SELECT course FROM highest_course WHERE id='$highest_course'";
		
		$query_run_exp = mysql_query($query_exp);
		$query_run_industy_type = mysql_query($query_industry_type);
		$query_run_func_area = mysql_query($query_func_area);
		$query_run_highest_course = mysql_query($query_highest_course);
		
		$query_exp_result = mysql_result($query_run_exp, 0, 'experience');
		$query_industy_type_result = mysql_result($query_run_industy_type, 0, 'industry_type');
		$query_func_area_result = mysql_result($query_run_func_area, 0, 'functional_area');
		$query_highest_course_result = mysql_result($query_run_highest_course, 0, 'course');
		
		echo '	<div><center><h2>Edit your profile</h2></center></div><br />';
		
		echo'	<div class="div_left">';
			
			echo '	<div class="div_struct"><b>Login Details</b></div><br />';
			echo'	<div class="div_struct"><b>Email Id : </b>'.$query_result['email_id'].'</div><br /><br />';
			
			echo '	<div class="div_struct"><b>Contact Details</b></div><br />';
			
			echo'	<div class="div_struct"><b>First Name : </b>'.$query_result['fname'].'</div><br />';
			echo'	<div class="div_struct"><b>Gender : </b>'.$query_result['gender'].'</div><br />';
			echo'	<div class="div_struct"><b>Mobile : </b>'.$query_result['mobile'].'</div><br />';
			echo'	<div class="div_struct"><b>Address : </b>'.$query_result['address'].'</div><br />';
			echo'	<div class="div_struct"><b>State : </b>'.$query_result['state'].'</div><br />';	
			echo'	<div class="div_struct"><b>Pin Code : </b>'.$query_result['pincode'].'</div><br /><br />';
			
			echo '	<div class="div_struct"><b>Employement Details</b></div><br />';
			echo'	<div class="div_struct"><b>Key Skills : </b>'.$query_result['key_skill'].'</div><br />';	
			echo'	<div class="div_struct"><b>Industry Type : </b>'.$query_industy_type_result.'</div><br /><br /><br/>';
			
			echo '	<div class="div_struct"><b>Education Details</b></div><br />';
			echo'	<div class="div_struct"><b>Highest Qualification : </b>'.$query_highest_course_result.'</div><br /><br />';
			echo'	<div class="div_struct"><b>HSC Board : </b>'.$query_result['hsc'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Percentage : </b>'.$query_result['hsc_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC School: </b>'.$query_result['hsc_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>SSC Board : </b>'.$query_result['ssc'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Percentage : </b>'.$query_result['ssc_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC School: </b>'.$query_result['ssc_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Bachelor Degree : </b>'.$query_result['bachelor'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Percentage : </b>'.$query_result['bachelor_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor College : </b>'.$query_result['bachelor_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Masters Degree : </b>'.$query_result['master'].'</div><br />';
			echo'	<div class="div_struct"><b>Masters Percentage : </b>'.$query_result['master_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>Masters College : </b>'.$query_result['master_college'].'</div>';
			
			echo' 	<br /><br />';
			echo '	<div class="div_struct"><b>RESUME</b></div><br />';
			
		echo'	</div class="div_left><br/>';
		
		echo'	<div class="div_right">';
			echo' 	<br /><br />';
			echo'	<div class="div_struct"><b>Change your Password</b></div><br /><br />';
			
			echo'	<label style="float: right; margin-right: 10%" />
						<a href="contact.review.php" style="text-decoration:none">Edit Contact Details</a>
					</label><br /><br />';
			echo'	<div class="div_struct"><b>Surname : </b>'.$query_result['lname'].'</div><br />';
			echo'	<div class="div_struct"><b>Marriage Status : </b>'.$query_result['marriage_status'].'</div><br />';
			echo'	<div class="div_struct"><b>Home Number : </b>'.$query_result['phone'].'</div><br />';
			echo'	<div class="div_struct"><b>City : </b>'.$query_result['city'].'</div><br />';
			echo'	<div class="div_struct"><b>Country : </b>'.$query_result['country'].'</div><br />';
			
			echo' 	<br /><br />';
			echo'	<label style="float: right; margin-right: 10%" />
						<a href="contact.review.php" style="text-decoration:none">Edit Employement Details</a>
					</label><br /><br /><br />';
			echo'	<div class="div_struct"><b>Experience : </b>'.$query_exp_result.'</div><br />';
			echo'	<div class="div_struct"><b>Functional Area : </b>'.$query_func_area_result.'</div><br />';
			
			echo' 	<br /><br />';
			echo'	<label style="float: right; margin-right: 10%" />
						<a href="contact.review.php" style="text-decoration:none">Edit Education Details</a>
					</label><br /><br />';
			echo'	<div class="div_struct"><b>Others : </b>'.$query_result['others'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>HSC Specialisation : </b>'.$query_result['hsc_special'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Roll Number : </b>'.$query_result['hsc_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Passing Batch: </b>'.$query_result['hsc_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>SSC Specialisation : </b>'.$query_result['ssc_special'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Roll Number : </b>'.$query_result['ssc_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Passing Batch: </b>'.$query_result['ssc_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Bachelor Specialisation : </b>'.$query_result['bachelor_special'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Roll Number : </b>'.$query_result['bachelor_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Passing Batch: </b>'.$query_result['bachelor_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Master Specialisation : </b>'.$query_result['master_special'].'</div><br />';
			echo'	<div class="div_struct"><b>Master Roll Number : </b>'.$query_result['master_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>Master Passing Batch: </b>'.$query_result['master_batch'].'</div>';
			
			echo' 	<br /><br /><br />';
			echo'	<label style="float: right; margin-right: 10%" />
						<a href="resume.review.php" style="text-decoration:none">Upload Resume</a>
					</label><br /><br />';
			
		echo'	</div class="div_right">';		
	}
?>
	
	</div>
</body>

</html>