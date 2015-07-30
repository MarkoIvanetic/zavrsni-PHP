<!DOCTYPE html>
<?php
$GLOBALS['counter'] =1;
?>
<html lang="en">
<head>
  <script>
  document.write('<base href="'+ document.location.pathname +'" />')
  </script>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Interview Simulator</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <script src="js/myScriptResults.js"></script>
</head>
<body>
    <div class="loadingCover"></div>
  <div class="mainContainer col-xs-12 col-sm-10 col-sm-offset-1 clearfix">
    <?php
    include 'connection.php';

    if (mysqli_ping($db))
    {
      $sqlQ = "SELECT * FROM questions ORDER BY `id`";
      $result = mysqli_query($db, $sqlQ);
      while($row = mysqli_fetch_array($result))
      {
        $question = $row['id'];
        echo '<h1 class="col-xs-12 noselect questions" id=question'.$row['id'].' hidden>'.$row['question']
        .'</h1>';

        $sqlA = "SELECT * FROM answers WHERE `question_id`=".$question." ORDER BY `id`";

        $resultA = mysqli_query($db, $sqlA);
        while($rowA = mysqli_fetch_array($resultA)){
        echo  "<div class='noselect answers col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-39 answerIndicator".$question."'>
        <p>".$rowA['answer']."</p><button class='answerButton'><span>Answer</span><input type='text' value='".$rowA['value']."' hidden></button></div>";

        }
        $resultA = mysqli_query($db, $sqlA);
        while($rowA = mysqli_fetch_array($resultA)){
        echo  "<div hidden class='col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-39 tipIndicator tipIndicator".$question."'>
        <p>".$rowA['tips']."</p></div>";
        }
      }
    }
    else
    {
      echo "Error: ". mysqli_error($db);
    }
    ?>
    <button class="clearfix next blueButton row col-xs-9 col-xs-offset-1" id="next">Next</button> 
  </div>
  
  <script src="js/bootstrap.min.js"></script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>