<?php
	ob_start();
	session_start();

	//Including database connection files to the page.
	require 'db.connect.php';
	
	//Checking whether data already exist or not
	$flag = 0;
	$email_check = strtolower($_POST['user_email']);
	
	$query_select = "SELECT email_id FROM seeker_details WHERE email_id='$email_check'";
	
	if($query_select_run = mysql_query($query_select))
	{
		$query_select_num = mysql_num_rows($query_select_run);
		if($query_select_num == 0)
		{
			$flag = 1;
		}
		
		else if($query_select_num >= 1)
		{
			echo '<script> alert("You had already joined with us. Send request to regain your password."); </script>';
			echo '<script> window.location.href = "seeker.forgot.passwprd.php"; </script>';	
		}
	}

	//Identifing the Id for user input data
	$query_id = "SELECT MAX(id) FROM seeker_details";
	$query_run_id = mysql_query($query_id);
	$query_rows_id = mysql_num_rows($query_run_id);
	$db_id = 0;
	
	if($query_rows_id == 0)
	{
		$db_id = 1;
	}
	
	else
	{
		$db_id = mysql_result($query_run_id, 0, 'MAX(id)') + 1;
	}

	if($flag == 1)
	{
		//Checking whether value of textbox does exist or not.
		if(isset($_POST['user_email']) && isset($_POST['user_pass']) && isset($_POST['user_fname']) && isset($_POST['user_lname']) && 
			isset($_POST['user_mob']) && isset($_POST['user_city']) && isset($_POST['user_pincode']) && isset($_POST['user_key_skill']) && 
			isset($_POST['seeker_exp_ddl']) && isset($_POST['seeker_highest_course']) && isset($_POST['seeker_register']))
		{

			if(isset($_FILES['seeker_resume']))
			{	
				//Initializing variables with the user inputs.
				$email = strtolower($_POST['user_email']);
				$password = md5($_POST['user_pass']);
				$fname = $_POST['user_fname'];
				$lname = $_POST['user_lname'];
				$gender = $_POST['seeker_gender'];
				$marriage = $_POST['seeker_marriage'];
				$mobile = $_POST['user_mob'];
				$phone = $_POST['user_home'];
				$address = $_POST['user_add'];
				$country = $_POST['user_country'];
				$state = $_POST['user_state'];
				$city = $_POST['user_city'];
				$pincode = $_POST['user_pincode'];
				$key_skill = $_POST['user_key_skill'];
				$user_exp = $_POST['seeker_exp_dll'];
				$industry_type = $_POST['seeker_industry_type_ddl'];
				$func_area = $_POST['seeker_func_area_ddl'];
				$high_course = $_POST['seeker_highest_course'];
				$others = $_POST['seeker_edu_describe'];
				$hsc = $_POST['seeker_hsc'];
				$hsc_special = $_POST['seeker_hsc_special'];
				$hsc_percentage = $_POST['seeker_hsc_percentage'];
				$hsc_rollno = $_POST['seeker_hsc_rollno'];
				$hsc_college= $_POST['seeker_hsc_college'];
				$hsc_batch = $_POST['seeker_hsc_batch'];
				$ssc = $_POST['seeker_ssc'];
				$ssc_special = $_POST['seeker_ssc_special'];
				$ssc_percentage = $_POST['seeker_ssc_percentage'];
				$ssc_rollno = $_POST['seeker_ssc_rollno'];
				$ssc_college= $_POST['seeker_ssc_college'];
				$ssc_batch = $_POST['seeker_ssc_batch'];
				$bachelor = $_POST['seeker_bachelor'];
				$bachelor_special = $_POST['seeker_bachelor_special'];
				$bachelor_percentage = $_POST['seeker_bachelor_percentage'];
				$bachelor_rollno = $_POST['seeker_bachelor_rollno'];
				$bachelor_college= $_POST['seeker_bachelor_college'];
				$bachelor_batch = $_POST['seeker_bachelor_batch'];
				$master = $_POST['seeker_master'];
				$master_special = $_POST['seeker_master_special'];
				$master_percentage = $_POST['seeker_master_percentage'];
				$master_rollno = $_POST['seeker_master_rollno'];
				$master_college= $_POST['seeker_master_college'];
				$master_batch = $_POST['seeker_master_batch'];
				$agree = $_POST['seeker_agree'];
				$notification = $_POST['seeker_notifications'];
				$call_sms = $_POST['seeker_call_sms'];
				
				//Checking whether value is empty or not in given textbox or not.
				if(!empty($_POST['user_email']) && !empty($_POST['user_pass']) && !empty($_POST['user_fname']) && !empty($_POST['seeker_gender']) 
					&& !empty($_POST['user_mob']) && !empty($_POST['user_city']) && !empty($_POST['user_pincode']) && !empty($_POST['user_key_skill'])
					&& $_POST['seeker_exp_dll'] != -1 && $_POST['seeker_highest_course'] != -1 && !empty($_FILES['seeker_resume']))
				{
					//Initializing variables for the file uploading.
					
					$filename = $_FILES['seeker_resume']['name'];
					$new_filename = $db_id.'_'.$filename;
					$folder = 'upload/seeker_resume/';
					$format = substr($filename, strpos($filename, '.') + 1);
					$namefile = substr($filename, 0, strpos($filename, '.') - 1);
					
					$upload_cv = $folder.$db_id.'_'.$filename;				
					$upload_cv_txt = $folder.$db_id.'_'.$namefile.'.txt';
					
					if($format == doc || $format == docx)
					{
						move_uploaded_file($_FILES['seeker_resume']['tmp_name'], $folder.$new_filename);
					}
					
					else
					{ 
						echo '<script> alert("File not supported. Select only document file ie .doc or .docx"); </script>';
						echo '<script> window.location.href = "seeker.joinus.php"; </script>';
					}	

					//Query which is going to execute to for database manipulation.
					$query = "INSERT INTO seeker_details VALUES ('', '$email', '$password', '$fname', '$lname', '$gender', '$marriage', '$mobile',
								'$phone', '$address', '$country', '$state', '$city', '$pincode', '$key_skill', '$user_exp', '$industry_type',
								'$func_area', '$high_course', '$others', '$hsc', '$hsc_special', '$hsc_percentage', '$hsc_rollno', '$hsc_college',
								'$hsc_batch', '$ssc', '$ssc_special', '$ssc_percentage', '$ssc_rollno', '$ssc_college', '$ssc_batch', '$bachelor',
								'$bachelor_special', '$bachelor_percentage', '$bachelor_rollno', '$bachelor_college', '$bachelor_batch',
								'$master', '$master_special', '$master_percentage', '$master_rollno', '$master_college', '$master_batch',
								'$upload_cv', '$upload_cv_txt', '$agree', '$notification', '$call_sms')";
					
					$query_run = mysql_query($query);
					$_SESSION['SEEK_JOINED'] = 1;
					//To relocate the webpage to other page without informing user.
					echo '<script> window.location.href = "seeker.login.php"; </script>';
				}
				else
				{
					echo '<script> alert("Fill all required fields first"); </script>';
					echo '<script> window.location.href = "seeker.joinus.php"; </script>';
				}
			}
		
			else 
			{
				echo '<script> alert("File doesnot exist."); </script>';
				echo '<script> window.location.href = "seeker.joinus.php"; </script>';
			}
		}
	}
?>