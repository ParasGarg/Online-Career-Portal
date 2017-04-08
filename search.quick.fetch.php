<?php 
	
	//Including database connection files to the page.
	require 'db.connect.php';
	
	//Checking whether value of textbox does exist or not.
	if(isset($_POST['quick_key']) && isset($_POST['quick_location']))
	{
		//Initializing variables with the user inputs.
		$key = $_POST['quick_key'];
		$location = $_POST['quick_location'];
				
		//Checking whether value is empty or not in given textbox or not.
		if(!empty($key) && !empty($location))
		{
			//Query which is going to execute to for database manipulation.
			$query = "SELECT * FROM job_details WHERE location= '$location' OR key_skill LIKE '%$key%'";
			$query_quick = mysql_query($query);
						
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
				
			$query_rows_num = mysql_num_rows($query_quick);
			if($query_rows_num > 0)
			{		
				while($query_quick_result = mysql_fetch_array($query_quick))
				{	
					echo '	<table border="1">
								<tr>
									<td><center>'.$query_quick_result['name'].'</center></td>
									<td><center>'.$query_quick_result['profile'].'</center></td>
									<td><center>'.$query_quick_result['key_skill'].'</center></td>
									<td><center>'.$query_quick_result['location'].'</center></td>
									<td><center>'.$query_quick_result['ctc'].'</center></td>
									<td><center>';								
							
							echo	'<a href="search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
									.$query_quick_result['id']."', '_window');".'return false;">	
										Click for Details			
									</a>
									</center></td>
								</tr>';		
				echo'	</table>';
				}
			}
			else
			{
				echo '<script> alert("No result Found. Search with different keywords"); </script>';
			}
		}
		
		else if(empty($key) || empty($location))
		{
			header('Location: index.php');
		}
	}
?>
