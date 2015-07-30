<!DOCTYPE html>
<?php
$GLOBALS['counter'] =1;
include 'connection.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Interview Simulator</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/admin.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="adminContainer col-xs-12 col-sm-10 col-sm-offset-1 clearfix">
    <h1 class="col-xs-12 borded">Admin Panel</h1>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-5 col-md-offset-2 col-md-4 centered">
         <a href="addQuestion.php"><h2>Add Question/Answer</h2></a>
        </div>
        <div class="col-sm-5 centered">
        <a href="addTip.php"><h2>Add Question/Tip</h2></a>
        </div>
        <div class="col-sm-offset-1 col-sm-10"></div>
    </div>

  </div>
  <script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>