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
  <script src="js/myScriptTips.js"></script>
</head>
<body>
  <div class="loadingCover"></div>
  <div class="mainContainer designerBackground col-xs-12 col-sm-10 col-sm-offset-1 clearfix">
    <?php
    include 'connection.php';

    if (mysqli_ping($db))
    {
      $sqlQ = "SELECT * FROM tips ORDER BY `id`";
      $result = mysqli_query($db, $sqlQ);
      while($row = mysqli_fetch_array($result))
      {
        $question = $row['id'];
        echo '<h1 class="col-xs-12 noselect designerGreen questions" id=question'.$row['id'].' hidden>'.$row['question']
        .'</h1>';

        echo '<div class="row">
        <div style="display:none; border-color:white;" class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 answers" id=tip'.$row['id'].'><p>'.$row['tip'].'</p></div>
        </div>';
      }
    }
    else
    {
      echo "Error: ". mysqli_error($db);
    }
    ?>
    <button class="clearfix next blueButton row col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8" id="next">Next question</button> 
  </div>

  <div hidden id="afterStuff" class="afterStuff designerBackground row col-xs-12 col-sm-8 col-sm-offset-2 row">
   <section class="col-xs-12">
    <h2 hidden class="designerGreen">Good luck on your future interviews!</h2>
    <h3>If you want to learn more, please visit <a href="http://www.about.com/careers/">About Careers</a></h3>
    <h3>or follow one of the links below:</h3></br>
    <div>
      <a href="http://jobsearch.about.com/od/interviewquestionsanswers/a/interviewquest.htm">Interview Questions and Answers</a></br>
      <a href="http://jobsearch.about.com/od/resumes/u/resumesandletters.htm">Resumes and Cover Letters</a></br>
      <a href="http://jobsearch.about.com/od/coverletters/">Cover Letters</a></br>
      <a href="http://jobsearch.about.com/od/findajob/">Job Search Basics</a></br>
      <a href="http://jobsearch.about.com/od/sampleresumes/a/sampleresumes.html">Resume and Letter Examples</a></br>
      <a href="http://jobsearch.about.com/od/findajob/u/findajob.htm">Find a Job</a>
      <h3><strong>Or go to <a id="mainPage" href="index.php">Main page</a></strong></h3>
      <hr>

     <footer class="col-xs-12">
    <div class="col-xs-12 col-sm-6">
     <img src="source/tvz.png" class=""/>
</div>
  <p class="col-xs-12 col-sm-6"><a href="http://www.tvz.hr/" target="blank">Tehničko veleučilište u Zagrebu</a>
    <br/>Adresa: Vrbik 8
    <br/>Tel: ++385 1 5595 320
  </p>  
</footer>

    </div>
  </section>
</div>
<script src="js/bootstrap.min.js"></script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>