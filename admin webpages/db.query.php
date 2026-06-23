<script type="text/javascript">
	function msg()
	{
		alert("Error is here");
	}
</script>

<?php

	// Including PDO database connection
	require_once '../db.pdo.php';

	// Declaring InsertToDB() function which executes on click of INSERT BUTTON
	function InsertToDB()
	{
		if(isset($_GET['job_industry_type']))
		{
			// Initializing variables with the user inputs
			$IndustryType = $_GET['job_industry_type'];

			if(!empty($IndustryType))
			{
				// Query with prepared statement
				$sql = "INSERT INTO job_details (industry_type) VALUES (?)";

				try {
					global $pdo;
					$stmt = $pdo->prepare($sql);
					$stmt->execute([$IndustryType]);

					unset($_GET['job_industry_type']);
					$_GET['job_industry_type'] = '';
				} catch (PDOException $e) {
					error_log("Insert query failed: " . $e->getMessage());
					echo '<script> alert("Error inserting record. Please try again."); </script>';
				}
			}
		}
	}

	// Declaring DeleteToDB() function which executes on click of DELETE BUTTON
	function DeleteToDB()
	{
		if(isset($_GET['job_id']))
		{
			// Initializing variables with the user inputs
			$Id = $_GET['job_id'];

			if(!empty($Id))
			{
				// Query with prepared statement
				$sql = "DELETE FROM job_details WHERE id = ?";

				try {
					global $pdo;
					$stmt = $pdo->prepare($sql);
					$stmt->execute([$Id]);
				} catch (PDOException $e) {
					error_log("Delete query failed: " . $e->getMessage());
					echo '<script> alert("Error deleting record. Please try again."); </script>';
				}
			}
		}
	}

	// Declaring UpdateToDB() function which executes on click of UPDATE BUTTON
	function UpdateToDB()
	{
		if(isset($_GET['job_id']))
		{
			// Initializing variables with the user inputs
			$Id = $_GET['job_id'];
			$IndustryType = $_GET['job_industry_type'] ?? '';

			if(!empty($Id) && !empty($IndustryType))
			{
				// Query with prepared statement
				$sql = "UPDATE job_details SET industry_type = ? WHERE id = ?";

				try {
					global $pdo;
					$stmt = $pdo->prepare($sql);
					$stmt->execute([$IndustryType, $Id]);
				} catch (PDOException $e) {
					error_log("Update query failed: " . $e->getMessage());
					echo '<script> alert("Error updating record. Please try again."); </script>';
				}
			}
		}
	}
?>