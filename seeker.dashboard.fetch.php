<?php 
	
	//Including database connection files to the page.
	require 'db.connect.php';
	
	//Current Date
	$current_date = date('Y-m-d');
	
	echo '	<table border="1">
				<tr>
					<td><center><b>Name</center></b></td>
					<td><center><b>Profile</b></center></td>
					<td><center><b>Key Skill</b></center></td>
					<td><center><b>Location</b></center></td>
					<td><center><b>CTC</b></center></td>
					<td><center><b>More</b></center></td>
				</tr>
			</table>';
	
	$id = $_SESSION['SEEK_ID'];
	$query_seeker = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run_seeker = mysql_query($query_seeker);
	
	if(!empty($_SESSION['SEEK_ID']))
	{
		while($query_run_result_seeker = mysql_fetch_array($query_run_seeker))
		{
			$fname = $query_run_result_seeker['fname'];
			$lname = $query_run_result_seeker['lname'];
			$folder = 'upload\\seeker_job_applied\\';
			$filename = $folder.$id.'_'.$fname." ".$lname.".txt";
							
			if(file_exists($filename))
			{
				$applied_file = fopen($filename, 'r');
				
				while(!feof($applied_file))
				{	
					$applied_id = fgetc($applied_file);	
	
					//Query which is going to execute to for database manipulation.
					$query_jobs = "SELECT * FROM job_details WHERE id='$applied_id'";
					$query_run_jobs = mysql_query($query_jobs);
								
					while($query_jobs_result = mysql_fetch_array($query_run_jobs))
					{	
						echo '	<table border="1">
									<tr>
										<td><center>'.$query_jobs_result['name'].'</center></td>
										<td><center>'.$query_jobs_result['profile'].'</center></td>
										<td><center>'.$query_jobs_result['key_skill'].'</center></td>
										<td><center>'.$query_jobs_result['location'].'</center></td>
										<td><center>'.$query_jobs_result['ctc'].'</center></td>
										<td><center>';
								
						echo			'<a href="search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
												.$query_jobs_result['id']."', '_window');".'return false;">				
											Click for Details
										</a>
										</center></td>
									</tr>
								</table>';
					}
				}
			}
			
			else
			{
				echo 'not applied';
			}
		}
	}	
?>

<!-- 	
		'_window', 'MyWindow'
		
		_window or _tab use for opening the other page in new tab
		MyWindow seperates the tab from browser.