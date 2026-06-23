<?php

	// Including PDO database connection
	require 'db.pdo.php';

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
			// Initializing variables with the user inputs
			$key = $_POST['search_keyword'];
			$location = $_POST['search_location'];
			$salary = $_POST['search_salary_ddl'] * 100000;
			$experience = $_POST['search_exp'];
			$func_area = $_POST['search_func_area_ddl'];
			$industry_type = $_POST['search_industry_type_ddl'];

			// Build dynamic query with prepared statements
			$conditions = [];
			$params = [];

			if (!empty($key)) {
				$conditions[] = "key_skill LIKE ?";
				$params[] = "%{$key}%";
			}
			if (!empty($location)) {
				$conditions[] = "location = ?";
				$params[] = $location;
			}
			if (!empty($salary)) {
				$conditions[] = "ctc = ?";
				$params[] = $salary;
			}
			if (!empty($experience)) {
				$conditions[] = "exp_required = ?";
				$params[] = $experience;
			}
			if (!empty($func_area) && $func_area != -1) {
				$conditions[] = "func_area = ?";
				$params[] = $func_area;
			}
			if (!empty($industry_type) && $industry_type != -1) {
				$conditions[] = "industry_type = ?";
				$params[] = $industry_type;
			}

			$sql = "SELECT * FROM job_details";
			if (!empty($conditions)) {
				$sql .= " WHERE " . implode(" OR ", $conditions);
			}

			try {
				$stmt = $pdo->prepare($sql);
				$stmt->execute($params);
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
						echo '	<table border="1">
									<tr>
										<td><center>' . htmlspecialchars($row['name']) . '</center></td>
										<td><center>' . htmlspecialchars($row['profile']) . '</center></td>
										<td><center>' . htmlspecialchars($row['key_skill']) . '</center></td>
										<td><center>' . htmlspecialchars($row['location']) . '</center></td>
										<td><center>' . htmlspecialchars($row['ctc']) . '</center></td>
										<td><center>';

								echo	'<a href="search.jobs.view.php" onClick="MyWindow=window.open(' . "'search.jobs.view.php?id="
										. $row['id'] . "', '_window');" . 'return false;">
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
				error_log("Search query failed: " . $e->getMessage());
				echo '<script> alert("An error occurred while searching. Please try again."); </script>';
			}
		}
	}
?>