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
  <div class="mainContainer col-xs-12 col-sm-10 col-sm-offset-1 clearfix">
    <form action="addQuestion.php" class="form-horizontal col-xs-12" enctype="multipart/form-data" method="post">
      <fieldset class="col-xs-12">

        <!-- Form Name -->
        <legend>Add a question</legend>

        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="questionTitle">Question</label>
          <div class="controls">
            <input id="questionTitle" name="questionTitle" type="text" placeholder="Type your question here" class=" input-xlarge" required="">
          </div>
        </div>
 <hr class="col-xs-12 col-sm-10 col-sm-offset-1"></hr>
        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="answer1">Answer 1</label>
          <div class="controls">                     
            <textarea id="answer1" name="answer1" class=""></textarea>
          </div>
        </div>

        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="tip1">Tip 1</label>
          <div class="controls">                     
            <textarea id="tip1" name="tip1" class=""></textarea>
          </div>
        </div>
        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="value1">Value</label>
          <div class="controls">
            <input id="value1" name="value1" type="number" step="25" max="100" placeholder="" class="input-xlarge" required="">
          </div>
        </div>
         <hr class="col-xs-12 col-sm-10 col-sm-offset-1"></hr>
        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="answer2">Answer 2</label>
          <div class="controls">                     
            <textarea id="answer2" name="answer2" class=" "></textarea>
          </div>
        </div>

        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="tip2">Tip 2</label>
          <div class="controls">                     
            <textarea id="tip2" name="tip2" class=""></textarea>
          </div>
        </div>
        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="value2">Value</label>
          <div class="controls">
            <input id="value2" name="value2" type="number" step="25" max="100" placeholder="" class="input-xlarge" required="">

          </div>
        </div>
         <hr class="col-xs-12 col-sm-10 col-sm-offset-1"></hr>
        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="textarea">Answer 1</label>
          <div class="controls">                     
            <textarea id="answer3" name="answer3" class=" "></textarea>
          </div>
        </div>

        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="tip3">Tip 3</label>
          <div class="controls">                     
            <textarea id="tip3" name="tip3" class=""></textarea>
          </div>
        </div>
        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="value3">Value</label>
          <div class="controls">
            <input id="value3" name="value3" type="number" step="25" max="100" placeholder="" class="input-xlarge" required="">
          </div>

          <div class="control-group col-xs-12 col-sm-10 col-md-6">
            <input type="submit" id="submit" value="Submit">
          </div>
        </div>
      </fieldset>
    </form>

  </div>
  <script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
<?php
ob_start();
global $passport;
$passport = 0;
global $queryOver;
$queryOver = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $lastID = "";
  $questionTitle = $_POST['questionTitle'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $tip1 = $_POST['tip1'];
  $tip2 = $_POST['tip2'];
  $tip3 = $_POST['tip3'];
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $value3 = $_POST['value3'];
  $questionTitle = mysqli_real_escape_string($db, $questionTitle);
  $answer1 = mysqli_real_escape_string($db, $answer1);
  $answer2 = mysqli_real_escape_string($db, $answer2);
  $answer3 = mysqli_real_escape_string($db, $answer3);
  $tip1 =  mysqli_real_escape_string($db, $tip1);
  $tip2 =  mysqli_real_escape_string($db, $tip2);
  $tip3 =  mysqli_real_escape_string($db, $tip3);
  $value1 = mysqli_real_escape_string($db, $value1);
  $value2 = mysqli_real_escape_string($db, $value2);
  $value3 = mysqli_real_escape_string($db, $value3);
  $arr = array(
    $questionTitle,
    $answer1,
    $answer2,
    $tip1,
    $tip2,
    $tip3,
    $answer3,
    $value1,
    $value2,
    $value3,
  );
  function is_empty($arr)
  {
    foreach($arr as & $value)
    {
      if (empty($value))
      {
        echo "<h2 class='col-xs-4' style='color:green;'>Sva polja moraju biti popunjena!</h2>";
        return false;
      }
      else
      {
        return true;
      }
    }

    unset($value);
  }

  function ad_submit($questionTitle, $answer1, $answer2, $answer3,$tip1, $tip2, $tip3, $value1, $value2, $value3)
  {
    global $db;
    $query = "INSERT INTO `pitanja`.`questions` ( `question`) 
      VALUES ('$questionTitle')";
    $result = mysqli_query($db, $query);
    $lastId = mysqli_insert_id($db);
    if ($result)
    {
      echo "<script>console.log('Question was inserted successfully');</script>";
    }
    else
    {
      echo "<script>console.log('Question was NOT inserted successfully');</script>";
      $passport = 0;
      return false;
    }

    $queryA = "INSERT INTO answers (answer, value, tips, question_id) 
      VALUES ('$answer1', '$value1','$tip1','$lastId');";
    $queryA.= "INSERT INTO answers (answer, value, tips, question_id) 
      VALUES ('$answer2', '$value2','$tip2','$lastId');";
    $queryA.= "INSERT INTO answers (answer, value, tips, question_id) 
      VALUES ('$answer3', '$value2','$tip3','$lastId');";
    if (mysqli_multi_query($db, $queryA))
    {
      echo "<script>console.log('Answer was inserted successfully');</script>";
      return true;
    }
    else
    {
      echo "<script>console.log('Error: " . $queryA . "-" . mysqli_error($db) . "');</script>";
      echo "<script>console.log('Answer was NOT successfull!');</script>";
      $passport = 0;
      return false;
    }
  }

  if (is_empty($arr) && ad_submit($questionTitle, $answer1, $answer2, $answer3,$tip1, $tip2, $tip3, $value1, $value2, $value3))
  {
    echo "<script>console.log('Querry was successfull!');</script>";
    $passport = 1;
    checkStatus($passport, $lastID);
    return true;
  }
  else
  {
    echo "<script>console.log('Querry was NOT successfull!');</script>";
    $passport = 0;
    checkStatus($passport, $lastID);
    return false;
  }
}

mysqli_close($db);
ob_end_flush();
function checkStatus($passport, $lastID)
{
  if ($passport)
  {
    echo '<script>window.location.replace("success.php?state=1");</script>';
  }
  else
  {
    echo '<script>window.location.replace("success.php?state=0");</script>';
  }
  /*
ALTER TABLE `answers` AUTO_INCREMENT = 1;
ALTER TABLE `questions` AUTO_INCREMENT = 1;
*/
}
?>