<?php 
	
	//Including database connection files to the page.
	require 'db.connect.php';
	
	if(isset($_POST['search_keyword']) || isset($_POST['search_location']) || isset($_POST['search_salary_ddl']) || 
		isset($_POST['search_exp']) || isset($_POST['search_func_area_ddl']) || isset($_POST['search_industry_type_ddl']))
	{
	if(empty($_POST['search_keyword']) &&  empty($_POST['search_location']) && empty($_POST['search_salary_ddl']) && 
			empty($_POST['search_exp']) && ($_POST['search_func_area_ddl'] == -1) && ($_POST['search_industry_type_ddl'] == -1))
		{
			echo '<script> alert("Enter atleast any field for desire search"); </script>';
			echo '<script> window.location.href = "search.jobs.php"; </script>';
		}
			
		else if(!empty($_POST['search_keyword']) || !empty($_POST['search_location']) || !empty($_POST['search_salary_ddl']) || 
			!empty($_POST['search_exp']) || !empty($_POST['search_func_area_ddl']) || !empty($_POST['search_industry_type_ddl']))
		{
			//Initializing variables with the user inputs.
			$key = $_POST['search_keyword'];
			$location = $_POST['search_location'];
			$salary = $_POST['search_salary_ddl'] * 100000;
			$experience = $_POST['search_exp'];
			$func_area = $_POST['search_func_area_ddl'];
			$industry_type = $_POST['search_industry_type_ddl'];
			

							
			//Query which is going to execute to for database manipulation.
			$query = "SELECT * FROM job_details WHERE key_skill LIKE '%$key%' OR location='$location' OR
						ctc='$salary' OR func_area='$func_area' OR industry_type='$industry_type'";
			$query_search = mysql_query($query);
						
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
				
			$query_rows_num = mysql_num_rows($query_search);
			if($query_rows_num > 0)
			{		
				while($query_search_result = mysql_fetch_array($query_search))
				{	
					echo '	<table border="1">
								<tr>
									<td><center>'.$query_search_result['name'].'</center></td>
									<td><center>'.$query_search_result['profile'].'</center></td>
									<td><center>'.$query_search_result['key_skill'].'</center></td>
									<td><center>'.$query_search_result['location'].'</center></td>
									<td><center>'.$query_search_result['ctc'].'</center></td>
									<td><center>';								
							
							echo	'<a href="search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
									.$query_search_result['id']."', '_window');".'return false;">	
										Click for Details			
									</a>
									</center></td>
								</tr>';		
				echo'	</table>';
				}
			}
			else
			{	echo '<script> alert("No result Found. Search with different keywords"); </script>';	}
		}
	}
?>
