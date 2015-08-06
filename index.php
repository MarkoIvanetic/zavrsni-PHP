<!DOCTYPE html>
<?php $GLOBALS[ 'counter']=1; ?>
<html lang="en">

<head>
  <script>
  document.write('<base href="' + document.location.pathname + '" />')
  </script>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Interview Simulator</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <script src="js/myScript.js"></script>
</head>

<body>
  <div class="loadingCover"></div>
  <div class="introduction designerBackground row col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
    <h2 CLASS="designerGreen">Welcome interview simulator!</h2>
    <h3>Choose the answers you think are the best. All answers are valued differently from 0 to 100 points. Keep in mind that it's impossible to simulate interviewers mood and <a class="secretLogin" href="login.php">preferences</a>.</h3>
    <h3>After the quiz you can see the best answers and tips on how to improve your answers.</h3>
  </div>
  <div class="mainContainer designerBackground col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 clearfix">
    <?php
    include 'connection.php';

    if (mysqli_ping($db))
    {
      $sqlQ = "SELECT * FROM questions ORDER BY `id`";
      $result = mysqli_query($db, $sqlQ);
      while ($row = mysqli_fetch_array($result))
      {
        $question = $row['id'];
        echo '<h1 class="col-xs-12 designerGreen noselect questions" id=question' . $row['id'] . ' hidden>' . $row['question'] . '</h1>';
        $sqlA = "SELECT * FROM answers WHERE `question_id`=" . $question . " ORDER BY RAND()";
        $resultA = mysqli_query($db, $sqlA);
        while ($rowA = mysqli_fetch_array($resultA))
        {
          echo "<div class='noselect answers col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-39 answerIndicator" . $question . "'>
          <p>" . $rowA['answer'] . "</p><button class='answerButton'><span>Answer</span><input type='text' value='" . $rowA['value'] . "' hidden></button></div>";
        }
      }
    }
    else
    {
      echo "Error: " . mysqli_error($db);
    } ?>
    <button class="clearfix next blueButton row col-xs-12 col-sm-offset-1 col-sm-10" disabled id="next" hidden>Next</button>
    <button class="clearfix blueButton row col-xs-12 col-sm-10 col-sm-offset-1" id="start">Start with the simulator</button>
  </div>

  <div class="finalContainer designerBackground col-xs-12 col-sm-8 col-sm-offset-2" style="display:none;">
    <h2 class="designerGreen">You have scored:</h2>
  </div>
  <div class="finalText col-xs-12" style="display:none; text-align:center; font-size:16px; margin-bottom:20px;"><p><b>Next you can see the answers along with some additional questions that were not covered in this quiz.</b></p></div>
  <button class="clearfix blueButton row col-xs-12 col-sm-6 col-sm-offset-3" id="onward" hidden>See the answers!</button>
  <script src="js/bootstrap.min.js"></script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>

</html>