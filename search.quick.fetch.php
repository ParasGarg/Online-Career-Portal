<?php

	// Including PDO database connection
	require 'db.pdo.php';

	// Checking whether value of textbox does exist or not.
	if(isset($_POST['quick_key']) && isset($_POST['quick_location']))
	{
		// Initializing variables with the user inputs.
		$key = $_POST['quick_key'];
		$location = $_POST['quick_location'];

		// Checking whether value is empty or not in given textbox or not.
		if(!empty($key) && !empty($location))
		{
			// Query with prepared statements
			$sql = "SELECT * FROM job_details WHERE location = ? OR key_skill LIKE ?";

			try {
				$stmt = $pdo->prepare($sql);
				$stmt->execute([$location, "%{$key}%"]);
				$results = $stmt->fetchAll();

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

				if (count($results) > 0) {
					foreach ($results as $row) {
						$esc = fn($v) => htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
						$jobId = (int)$row['id'];
						echo '	<table border="1">
									<tr>
										<td><center>' . $esc($row['name']) . '</center></td>
										<td><center>' . $esc($row['profile']) . '</center></td>
										<td><center>' . $esc($row['key_skill']) . '</center></td>
										<td><center>' . $esc($row['location']) . '</center></td>
										<td><center>' . $esc($row['ctc']) . '</center></td>
										<td><center>';

								echo	'<a href="MyWindow=window.open(' . "'search.jobs.view.php?id="
										. $jobId . "', '_window');" . 'return false;">
												Click for Details
											</a>
											</center></td>
									</tr>';
						echo '	</table>';
					}
				} else {
					echo '<script> alert("No result Found. Search with different keywords"); </script>';
				}
			} catch (PDOException $e) {
				error_log("Quick search query failed: " . $e->getMessage());
				echo '<script> alert("An error occurred while searching. Please try again."); </script>';
			}
		}

		else if(empty($key) || empty($location))
		{
			header('Location: index.php');
		}
	}
?>