<?php
	ob_start();	//To add the functionality of header() function.
	session_start();
	
	//Including database connection files to the page.
	require 'db.connect.php';
	
	//Variables for checking existance of id.
	$flag = 0;
	$email_check = $_POST['career_email'];
	
	//Checking where value exist or not
	$query_select = "SELECT email_id FROM career_post WHERE email_id='$email_check'";
	if($query_select_run = mysql_query($query_select))
	{
		$query_select_num = mysql_num_rows($query_select_run);
		if($query_select_num == 0)
		{
			$flag = 1;
		}
		
		else if($query_select_num >= 1)
		{
			echo '<script> alert("You had already posted your resume to us."); </script>';
			echo '<script> window.location.href = "career.us.php"; </script>';
		}
	}
	
	//Identifing the Id for user input data
	$query_id = "SELECT MAX(id) FROM career_post";
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
		
	if($flag == 1)		//Checking for existing user
	{
		//Checking whether value of textbox does exist or not.
		if(isset($_POST['career_name']) && isset($_POST['career_email']) && isset($_POST['career_mob']) && isset($_POST['career_exp']) 
			&& isset($_POST['career_func_area']) && isset($_POST['career_button']))	
		{		
			if(isset($_FILES['career_resume']))
			{
				//Initializing variables with the user inputs.
				$name = $_POST['career_name'];
				$email = $_POST['career_email'];
				$mobile = $_POST['career_mob'];
				$experience = $_POST['career_exp'];
				$func_area = $_POST['career_func_area'];
				
				//Checking whether value is empty or not in given textbox or not.
				if(!empty($_POST['career_name']) && !empty($_POST['career_email']) && !empty($_POST['career_mob']) && 
					!empty($_FILES['career_resume']) && $_POST['career_exp'] != -1 && $_POST['career_func_area'] != -1) 
				{
					//Initializing variables for the file uploading.
					$filename = $_FILES['career_resume']['name'];
					$new_filename = $db_id.'_'.$filename;
					$folder = 'upload//contactus_resume//';
					$format = substr($filename, strpos($filename, '.') + 1);
					$upload_cv = $folder.$db_id.'_'.$filename;
				
					if($format == doc || $format == docx)
					{
						move_uploaded_file($_FILES['career_resume']['tmp_name'], $folder.$new_filename);
						$_SESSION['flag_careerus'] = 1;
						echo '<script> window.location.href = "career.us.php"; </script>';
					}
					
					else
					{ 
						$_SESSION['flag_careerus'] = 2;
						echo '<script> window.location.href = "career.us.php"; </script>';
					}				
					
					//Query which is going to execute to for database manipulation.
					$query = "INSERT INTO career_post VALUES ('', '$name', '$email', '$mobile', '$experience', '$func_area', 
								'$upload_cv')";
					$query_run = mysql_query($query);
				}
						
				else
				{	
					echo '<script> alert("No file selected."); </script>';	
					echo '<script> window.location.href = "career.us.php"; </script>';
				}
			}
		
			else
			{	
				echo '<script> alert("File doesnot exist."); </script>';
				echo '<script> window.location.href = "career.us.php"; </script>';
			} 
		}	
	}
?>
