<?php 
$state = $_GET['state'];

if($state==1){
	header('Refresh: 2; url=addQuestion.php');
	echo "<div style='width:100%;text-align:center;'><h1 style='color:green;'>Question was successfull!</h1>";
	echo "<div style='width:100%;text-align:center;'><h3 style='color:green;'>Redirecting...</h3>";
} else if ($state==0){
	header('Refresh: 2; url=addQuestion.php');
	echo "<div style='width:100%;text-align:center;'><h1 style='color:red;'>Question was NOT successfull!</h1>";
	echo "<div style='width:100%;text-align:center;'><h3 style='color:green;'>Redirecting...</h3>";
}

 ?>