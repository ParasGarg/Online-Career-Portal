<?php
	ob_start();
	session_start();
	
	$conn = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('jobsportal', $conn);
	if($conn == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
	if($db == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }	
	
	$job_id = $_REQUEST['job_id'];
	$id = $_SESSION['SEEK_ID'];
	$query = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run = mysql_query($query);
	
	if(!empty($_SESSION['SEEK_ID']))
	{
		while($query_run_result = mysql_fetch_array($query_run))
		{
			$fname = $query_run_result['fname'];
			$lname = $query_run_result['lname'];
			$folder = 'upload\\seeker_job_applied\\';
			$filename = $folder.$id.'_'.$fname." ".$lname.".txt";
			$flag = 0;
							
			if(file_exists($filename))
			{
				$applied_file = fopen($filename, 'r');
				while(!feof($applied_file))
				{	
					
					$applied = fgetc($applied_file);
					if($applied == $job_id)
					{
						$flag = 1;
					}
					
				}
				fclose($applied_file);
					
				if($flag == 1)	
				{
					$_SESSION['job_applied'] = 1;
					echo '<script> window.location.href = "search.jobs.view.php?id='.$job_id.'"; </script>';
				}
							
				else if($flag == 0)
				{
					$handle_append = fopen($filename, 'a');
					fwrite($handle_append, "\n".$job_id."\n");
					fclose($handle_append);
					$_SESSION['job_applied'] = 2;
					echo '<script> window.location.href = "search.jobs.view.php?id='.$job_id.'"; </script>';
				}				
			}
			
			else
			{
				$handle_write = fopen($filename, 'w');
				fwrite($handle_write, $job_id."\n");
				fclose($handle_write);
				$_SESSION['job_applied'] = 2;
				echo '<script> window.location.href = "search.jobs.view.php?id='.$job_id.'"; </script>';
			}
		}
	}
	
	else
	{
		$_SESSION['view_loggedin'] = 1;
		echo '<script> window.location.href = "search.jobs.view.php?id='.$job_id.'"; </script>';
	}
?>