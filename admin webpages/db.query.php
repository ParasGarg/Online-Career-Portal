<script type="text/javascript">
	function msg()
	{
		alert("Error is here");
	}
</script>

<?php
	
	//Declaring InsertToDB() function which executes on click of INSERT BUTTON
	function InsertToDB()
	{
		if(isset($_GET['job_industry_type']))
		{
			//Initializing variables with the user inputs
			$IndustryType = $_GET['job_industry_type'];
						
			if(!empty($IndustryType))
			{
				//Query which is going to execute to for database manipulation
				$query ="INSERT INTO job_details VALUES ('', '$IndustryType')";
				$query_run = mysql_query($query);
				
				unset($_GET['job_industry_type']);
				$_GET['job_industry_type'] = '';
			}
		}
	}
	
	//Declaring DeleteToDB() function which executes on click of DELETE BUTTON
	function DeleteToDB()
	{
		if(isset($_GET['job_id']))
		{
			//Initializing variables with the user inputs
			$Id = $_GET['job_id'];
			
			if(!empty($Id))
			{				
				//Query which is going to execute to for database manipulation
				$query ="DELETE FROM job_details WHERE id='$Id'";
				$query_run = mysql_query($query);
			}
		}	
	}
	
	//Declaring UpdateToDB() function which executes on click of UPDATE BUTTON
	function UpdateToDB()
	{
		if(isset($_GET['job_id']))
		{
			//Initializing variables with the user inputs
			$Id = $_GET['job_id'];
			$IndustryType = $_GET['job_industry_type'];
			
			if(!empty($Id))
			{				
				//Query which is going to execute to for database manipulation
				$query ="UPDATE job_details SET industry_type='$IndustryType' WHERE id='$Id'";
				$query_run = mysql_query($query);
			}
		}	
	}
?>