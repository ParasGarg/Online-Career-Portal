<?php 
	ob_start();
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php
unset($_SESSION['EMP_ID']);
unset($_SESSION['SEEK_ID']);


$_SESSION['out'] = 1;
echo '<script> window.location.href = "index.php"; </script>';
?>

</body>
</html>
