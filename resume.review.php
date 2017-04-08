<?php 
	ob_start();
	session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/search.view.css" type="text/css" />
</head>

<?php 
	$conn = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('jobsportal', $conn);
	if($conn == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
	if($db == false){ echo mysql_errno($conn).":".mysql_error($conn)."\n"; }
?>

<body>
	<div style="margin-left:45%">
		<b><font color="#FFFFFF">Upload New Resume</font></b>
	</div>
	<div id="body_struct" style="margin-top: 1.5%">
<?php
	$id = $_SESSION['SEEK_ID'];
	$query = "SELECT resume FROM seeker_details WHERE id='$id'";
	$query_run = mysql_query($query);
	
	$file = mysql_result($query_run, 0, 'resume');
	$handle = fopen($file, 'r');
	$read = file($file);
	foreach($read as $fname)
	{
		echo $fname.'<br />';
	}
	fclose($handle);
?>
	</div id="body_struct">

	<div style="margin-left: 9.7%">
		<form action="resume.review.php" method="post" enctype="multipart/form-data">
			<input type="file" name="new_resume" value="file" />
			<input type="submit" name="upload_new_resume" value="Save" / style="margin-left: 65%; -webkit-border-radius: 8px; font-size: 15px;">
		</form>
	</div>
</body>

<?php 
	if(isset($_POST['upload_new_resume']))
	{
		if(isset($_FILES['new_resume']))
		{
			if(!empty($_FILES['new_resume']))
			{
				$filename = $_FILES['new_resume']['name'];
				$new_filename = $db_id.'_'.$filename;
				$folder = 'upload/seeker_resume/';
				$format = substr($filename, strpos($filename, '.') + 1);
					
				$upload_cv = $folder.$db_id.'_'.$filename;
					
				if($format == doc || $format == docx)
				{
					move_uploaded_file($_FILES['new_resume']['tmp_name'], $folder.$new_filename);
					$query = "UPDATE seeker_details SET resume='$upload_cv' WHERE id='$id'";
					$query_run = mysql_query($query);
				}
				
				else
				{ 
					echo '<script> alert("File not supported. Select only document file ie .doc or .docx"); </script>';
				}	
			}
		}
	}
?>
</html>
