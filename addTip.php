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
    <form action="addTip.php" class="form-horizontal col-xs-12" enctype="multipart/form-data" method="post">
      <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="question">Question</label>
          <div class="controls">
            <input id="question" name="question" type="text" placeholder="" class="input-xxlarge" required="">

          </div>
        </div>

        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="textarea">Tips</label>
          <div class="controls">                     
            <textarea id="textarea" name="textarea"></textarea>
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

  $question = $_POST['question'];
  $textarea = $_POST['textarea'];

  $question = mysqli_real_escape_string($db, $question);
  $textarea = mysqli_real_escape_string($db, $textarea);

  $arr = array(
    $question,
    $textarea
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

  function ad_submit($question, $textarea)
  {
    global $db;
    $query = "INSERT INTO `pitanja`.`tips` ( `question`,`tip`) 
    VALUES ('$question','$textarea')";
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

  }

  if (is_empty($arr) && ad_submit($question, $textarea))
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
    // echo '<script>window.location.replace("success.php?state=2");</script>';
  }
  else
  {
    // echo '<script>window.location.replace("success.php?state=3");</script>';
  }
  /*
ALTER TABLE `answers` AUTO_INCREMENT = 1;
ALTER TABLE `questions` AUTO_INCREMENT = 1;
*/
}
?>