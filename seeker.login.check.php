<?php
	ob_start();
	session_start();
	
	require 'db.connect.php';
	
	if(empty($_SESSION['EMP_ID']) || empty($_SESSION['SEEK_ID']))
	{
		if(isset($_POST['seeker_email_login']) && isset($_POST['seeker_pass_login']))
		{
			$seeker_login_email = strtolower($_POST['seeker_email_login']);
			$seeker_login_pass = md5($_POST['seeker_pass_login']);
			
			if(!empty($_POST['seeker_email_login']) && !empty($_POST['seeker_pass_login']))
			{
				$query="SELECT id FROM seeker_details WHERE email_id='$seeker_login_email' AND password='$seeker_login_pass'";
				
				if($query_run = mysql_query($query))
				{
					$query_num_rows = mysql_num_rows($query_run);
					
					if($query_num_rows == 0)
					{
						$_SESSION['flag_seeker_logincheck'] = 0;
						echo '<script> window.location.href = "seeker.login.php"; </script>';
					}
					
					else if($query_num_rows == 1)
					{
						$_SESSION['SEEK_ID'] = mysql_result($query_run, 0, 'id');
						$_SESSION['flag_seeker_logincheck'] = 1;					
						echo '<script> window.location.href = "index.php"; </script>';
					}
				}
			}
		}
	}
	
	else
	{
		$_SESSION['seek_loggedin'] = 1;
		header('Location: seeker.login.php');
	}
?>