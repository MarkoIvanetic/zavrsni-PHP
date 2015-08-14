<!DOCTYPE html>
<?php
$GLOBALS['counter'] =1;
include 'connection.php';
  session_start();
  if($_SESSION['username'] == NULL)
    header("Location:login.php");

if(isset($_POST['delete']))
{
if(! $db )
{
  die('Could not connect: ' . mysql_error());
}
$arr = explode(".", $_POST['questionSelect'], 2);
$first = $arr[0];

$sql = "DELETE FROM questions WHERE id = $first";
$result = mysqli_query($db, $sql);

if(!$result)
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
}
else
{}
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
    <form method="post" action="adminPanel.php" class="col-sm-offset-1 col-sm-5 col-md-offset-2 col-md-4 centered">
      <h2>Delete questions</h2>
<select name="questionSelect" style='color:black;'>
<?php
include 'connection.php';

if (mysqli_ping($db))
  {
  $sqlQ = "SELECT * FROM questions ORDER BY `id`";
  $result = mysqli_query($db, $sqlQ);
  while ($row = mysqli_fetch_array($result))
    {
    $question = $row['id'];
    echo '<option id=question' . $row['id'] . '>' . $row['id'] . '. '. $row['question'] . '</option>';
    }
  }
  else
  {
  echo "Error: " . mysqli_error($db);
  }
  
?>
</select>
<div class="col-xs-12 centered">
<input name="delete" type="submit" class="col-xs-12 centered delete" id="delete" value="Delete">
</div>
    </form>
  </div>
  <script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>