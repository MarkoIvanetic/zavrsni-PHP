<?php 
$state = $_GET['state'];

if($state){
	header('Refresh: 4; url=admin.php');
	echo "<div style='width:100%;text-align:center;'><h1 style='color:green;'>Question was successfull!</h1>";
	echo "<div style='width:100%;text-align:center;'><h3 style='color:green;'>Redirecting...</h3>";
} else {
	header('Refresh: 4; url=admin.php');
	echo "<div style='width:100%;text-align:center;'><h1 style='color:red;'>Question was NOT successfull!</h1>";
	echo "<div style='width:100%;text-align:center;'><h3 style='color:green;'>Redirecting...</h3>";
}

 ?>