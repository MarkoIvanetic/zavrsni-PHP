<!DOCTYPE html>
<?php
$GLOBALS['counter'] =1;
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
    <form action="admin.php" class="form-horizontal col-xs-12">
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

        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="answer1">Answer 1</label>
          <div class="controls">                     
            <textarea id="answer1" name="answer1" class=""></textarea>
          </div>
        </div>
        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="value1">Value</label>
          <div class="controls">
            <input id="value1" name="value1" type="number" step="25" max="100" placeholder="" class="input-xlarge" required="">
          </div>
        </div>

        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="answer2">Answer 2</label>
          <div class="controls">                     
            <textarea id="answer2" name="answer2" class=" "></textarea>
          </div>
        </div>

        <!-- Text input-->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="value2">Value</label>
          <div class="controls">
            <input id="value2" name="value2" type="number" step="25" max="100" placeholder="" class="input-xlarge" required="">

          </div>
        </div>

        <!-- Textarea -->
        <div class="control-group col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
          <label class="control-label" for="textarea">Answer 3</label>
          <div class="controls">                     
            <textarea id="textarea" name="textarea" class=" "></textarea>
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
<?php

if (isset($_POST['submit'])){
  include 'includes/connection.php';

  $lastID = "";
  $questionTitle = $_POST['questionTitle'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $value3 = $_POST['value3'];
  $textarea = $_POST['textarea'];
  $questionTitle = mysqli_real_escape_string($db, $questionTitle);
  $answer1 = mysqli_real_escape_string($db, $answer1);
  $answer2 = mysqli_real_escape_string($db, $answer2);
  $answer3 = mysqli_real_escape_string($db, $answer3);
  $value1 = mysqli_real_escape_string($db, $value1);
  $value2 = mysqli_real_escape_string($db, $value2);
  $value3 = mysqli_real_escape_string($db, $value3);
  $textarea = mysqli_real_escape_string($db, $textarea);
  $arr = array(
    $questionTitle,
    $answer1,
    $answer2,
    $answer3,
    $value1,
    $value2,
    $value3,
    $textarea
  );
  function is_empty()
    {
    foreach($arr as & $value)
      {
      if (empty($value))
        {
        echo "Sva polja označena zvjezdicom moraju biti popunjena!";
        return false;
        }
        else
        {
        return true;
        }
      }
      unset($value);
    }

  function ad_submit($questionTitle, $answer1, $answer2, $answer3, $value1, $value2, $value3, $textarea)
    {
    global $db;
    $query = "INSERT INTO `pitanja`.`questions` ( `question`) 
            VALUES ('$question')";
    $result = mysqli_query($db, $query);
    $lastId = mysql_insert_id();
    if ($result)
      {
      }
      else
      {
      return false;
      }
    
    $query1 = "INSERT INTO `pitanja`.`answers`( `answer`,'value','tips','question_id') 
          VALUES ('$answer1', '$value1','Temporary Tip','$lastId')";

    $query2 = "INSERT INTO `pitanja`.`answers`( `answer`,'value','tips','question_id') 
          VALUES ('$answer2', '$value2','Temporary Tip','$lastId')";

    $query3 = "INSERT INTO `pitanja`.`answers`( `answer`,'value','tips','question_id') 
          VALUES ('$answer3', '$value2','Temporary Tip','$lastId')";

    $result1 = mysqli_query($db, $query1);
    $result2 = mysqli_query($db, $query2);
    $result3 = mysqli_query($db, $query3);

    if ($result1 && $result2 && $result3)
      {
        echo "<h2 class='col-xs-4' style='color:green;'>Uspješno ste predali oglas!</h2>";
      }
      else
      {
      return false;
      }
    }

  if(is_empty() && ad_submit($questionTitle, $answer1, $answer2, $answer3, $value1, $value2, $value3, $textarea))
    {
        return true;
      }else{
        echo "Nešto je pošlo po zlu!";
      }

    
}
?>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>