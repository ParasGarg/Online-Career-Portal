<?php
	ob_start();
	session_start();

	//Including database connection files to the page.
	require 'db.connect.php';
	
	$flag = 0;
	$email_check = strtolower($_POST['emp_email']);
	
	$query_select = "SELECT email_id FROM emp_details WHERE email_id='$email_check'";
	if($query_select_run = mysql_query($query_select))
	{
		$query_select_num = mysql_num_rows($query_select_run);
		if($query_select_num == 0)
		{
			$flag = 1;
		}
		
		else if($query_select_num >= 1)
		{
			$flag = 0;
		}
	}
	
	if($flag == 1)
	{

		//Checking whether value of textbox does exist or not.
		if(isset($_POST['emp_user_name']) && isset($_POST['emp_email']) && isset($_POST['emp_pass']) && isset($_POST['emp_cmpname']) 
			&& isset($_POST['emp_cmptype']) && isset($_POST['emp_add']) && isset($_POST['emp_city']) && isset($_POST['emp_state'])
			&& isset($_POST['emp_country']) && isset($_POST['emp_pincode']) && isset($_POST['emp_phno']) && isset($_POST['emp_name'])
			&& isset($_POST['emp_industry_type']) && isset($_POST['emp_gender']))
		{
			//Initializing variables with the user inputs.
			$name = $_POST['emp_name'];
			$username = $_POST['emp_user_name'];
			$email = strtolower($_POST['emp_email']);
			$password = md5($_POST['emp_pass']);
			$phone_no = $_POST['emp_phno'];
			$company_name = $_POST['emp_cmpname'];
			$company_type = $_POST['emp_cmptype'];
			$industry_type = $_POST['emp_industry_type'];
			$gender = $_POST['emp_gender'];
			$address = $_POST['emp_add'];
			$city = $_POST['emp_city'];
			$state = $_POST['emp_state'];
			$country = $_POST['emp_country'];
			$pin_code = $_POST['emp_pincode'];
			
			//Checking whether value is empty or not in given textbox or not.
			if(!empty($_POST['emp_user_name']) && !empty($_POST['emp_email']) && !empty($_POST['emp_pass']) && !empty($_POST['emp_cmpname']) 
				&& !empty($_POST['emp_cmptype']) && !empty($_POST['emp_add']) && !empty($_POST['emp_city']) && !empty($_POST['emp_state'])
				&& !empty($_POST['emp_country']) && !empty($_POST['emp_pincode']) && !empty($_POST['emp_phno']) && !empty($_POST['emp_name'])
				&& !empty($_POST['emp_industry_type']) && !empty($_POST['emp_gender']))
			{
				//Query which is going to execute to for database manipulation.
				$query = "INSERT INTO emp_details VALUES ('', '$name', '$username', '$email', '$password', '$gender', '$phone_no', 
							'$company_name', '$company_type', '$industry_type', '$address', '$city', '$state', '$country', '$pin_code')";
				$query_run = mysql_query($query);
				
				$_SESSION['EMP_JOINED'] = 1;
				//To relocate the webpage to other page without informing user.
				echo '<script> window.location.href = "employer.login.php"; </script>';
			}
			
			else
			{	
				echo '<script> alert("No file selected."); </script>';	
				echo '<script> window.location.href = "employer.joiunus.php"; </script>';
			}
		}
		
		else 
		{
			//To relocate the webpage to other page without informing user.
			header('Location: employer.joinus.php');
		}
	}
	
	else 
	{ 
		echo '<script> alert("You had already applied."); </script>';
		
		//To relocate the webpage to other page without informing user.
		//header('Location: employer.joinus.php');
	}
?>