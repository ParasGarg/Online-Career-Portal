<?php 
	ob_start();
	session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/search.view.css" type="text/css" />
</head>

<?php 
	$conn = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('jobsportal', $conn);
	if($conn == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
	if($db == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
?>

<body>
	<div align="center">
		<b><font color="#FFFFFF">Edit Contact Details</font></b>
	</div>
	
	<div id="body_struct" style="margin-top: 1.5%"><br />
<?php
	$id = $_SESSION['SEEK_ID'];
	$query = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run = mysql_query($query);
		
	while($query_result=mysql_fetch_array($query_run))
	{
		echo '	<div class="div_struct"><center><b>Edit Contact Details</b></center></div><br /><br />';
		
		echo'	<div class="div_left">';
			
			if(empty($_POST['edit_contact_btn']))
			{	
				echo'	<br /><br />';
				echo'	<div class="div_struct"><b>First Name : </b>'.$query_result['fname'].'</div><br />';
				echo'	<div class="div_struct"><b>Gender : </b>'.$query_result['gender'].'</div><br />';
				echo'	<div class="div_struct"><b>Mobile : </b>'.$query_result['mobile'].'</div><br />';
				echo'	<div class="div_struct"><b>Address : </b>'.$query_result['address'].'</div><br />';
				echo'	<div class="div_struct"><b>State : </b>'.$query_result['state'].'</div><br />';	
				echo'	<div class="div_struct"><b>Pin Code : </b>'.$query_result['pincode'].'</div><br /><br />';
			}
			
		echo'	</div class="div_left">';
		
		echo'	<div class="div_right">';
			
			if(empty($_POST['edit_contact_btn']))
			{
				echo'	<form action="contact.review.php" method="post"/>';
				echo'		<input type="submit" name="edit_contact_btn" value="Edit Details" style="float: right; margin-right: 10%" />';
				echo'	</font>';
				echo'	<br /><br />';
				echo'	<div class="div_struct"><b>Surname : </b>'.$query_result['lname'].'</div><br />';
				echo'	<div class="div_struct"><b>Marriage Status : </b>'.$query_result['marriage_status'].'</div><br />';
				echo'	<div class="div_struct"><b>Home Number : </b>'.$query_result['phone'].'</div><br />';
				echo'	<div class="div_struct"><b>City : </b>'.$query_result['city'].'</div><br />';
				echo'	<div class="div_struct"><b>Country : </b>'.$query_result['country'].'</div><br /><br />';
			}
			
		echo'	</div class="div_right">';
			
		echo'	<div class="div_left">';
		
			if(!empty($_POST['edit_contact_btn']))
			{
				echo'	<form action="contact.review.php" method="post"/>';
				
				echo'	<br /><br />';
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>First Name</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_fname" value="'.$query_result['fname'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Gender</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_gender" value="'.$query_result['gender'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Mobile</b></div>';
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_mobile" value="'.$query_result['mobile'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Address</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_address" value="'.$query_result['address'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>State</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_state" value="'.$query_result['state'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Pin-Code</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_pincode" value="'.$query_result['pincode'].'"/>
							</div>';
				echo' 	</div class="div_struct">';
			}
			
		echo'	</div class="div_left">';
		
		echo'	<div class="div_right">';
		
			if(!empty($_POST['edit_contact_btn']))
			{
				echo'		<input type="submit" name="save_contact_btn" value="Save Deatails" style="float: right; margin-right: 10%" />';
				echo'	</font>';
			
				echo'	<br /><br />';
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Surname</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_lname" value="'.$query_result['lname'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Marriage Status</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_marriage" value="'.$query_result['marriage_status'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Home Number</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_phone" value="'.$query_result['phone'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>City</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_city" value="'.$query_result['city'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
				
				echo'	<div class="div_struct">';
					echo' 	<div style="float:left;width: 30%"><b>Country</b></div>'; 
					echo'	<div style="float:left;width: 10%">:</div>';
					echo'	<div style="float:left;width: 60%">
								<input type="text" name="edit_contact_country" value="'.$query_result['country'].'"/>
							</div>';
				echo' 	</div class="div_struct"><br /><br />';
			
			}
			
		echo'	</div class="div_right">';	
	}
	
	echo'	<br /><br />';
	echo'	<label style="margin-left:40%;">
				<a href="seeker.edit.profile.php?id='.$id.'" style="text-decoration:none">Back</a>
			</label>';
	
		if(isset($_POST['save_contact_btn']))
		{
				$fname = $_POST['edit_contact_fname'];
				$gender = $_POST['edit_contact_gender'];
				$mobile = $_POST['edit_contact_mobile'];
				$address = $_POST['edit_contact_address'];
				$state = $_POST['edit_contact_state'];
				$pincode = $_POST['edit_contact_pincode'];
				$lname = $_POST['edit_contact_lname'];
				$marriage = $_POST['edit_contact_marriage'];
				$phone = $_POST['edit_contact_phone'];
				$city = $_POST['edit_contact_city'];
				$country = $_POST['edit_contact_country'];
				
				
				echo $fname;
			
				$query_update = "UPDATE seeker_details SET fname='$fname', gender='$gender', mobile='$mobile', address='$address', state='$state',
							 pincode='$pincode', lname='$lname', marriage_status='$marriage', phone='$phone', city='$city', country='$country'
							 WHERE id='$id' ";
				$query_run_update = mysql_query($query_update);
				
				echo	'<script> window.location.href = "contact.review.php"; </script>';
						
		}
?>
</html>