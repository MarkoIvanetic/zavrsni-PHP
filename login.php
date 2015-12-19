<!DOCTYPE html>
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
	<div class="col-md-3 login-inputs" style='color:black;'>
		<form class="form-horizontal" action="login.php" method="post">

			<!-- Text input-->
			<div class="control-group">
				<label class="control-label" for="username">Korisničko ime:</label>
				<div class="controls">
					<input id="username" name="username" type="text" oninvalid="this.setCustomValidity('Korisničko ime ne smije biti prazno')" class="" required>

				</div>
			</div>

			<!-- Password input-->
			<div class="control-group">
				<label class="control-label" for="password">Lozinka</label>
				<div class="controls">
					<input type="password" id="password" name="password" required="required" oninvalid="this.setCustomValidity('Loz0inka ne smije biti prazna')" class="" required="">

				</div>
			</div>

			<!-- Button -->
			<div class="control-group">
				<label class="control-label" for="submit"></label>
				<div class="controls">
					<input type="submit" id="submit" name="submit" class="red-button col-md-6 col-sm-3" value="Prijava"></input>
				</div>
			</div>
		</form>
	</div>
<?php

	if(isset( $_POST['submit']))
	{
		include 'connection.php';
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = mysqli_real_escape_string($db, $username);
		if($username == "test" && $password == "test")
		{
				echo "Uspješno ste se prijavili!";
				$_SESSION["id"] = "4047";
				$_SESSION["username"] = $username;
				echo $_SESSION['username'];
				header("Location:adminPanel.php");
			
		}else{
			echo"<h4 class='col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8'>Korisničko ime ili lozinka nije ispravna</h4>";
			header("url=login.php");		
		}
	}	
	else{
	}

	?>

</body>
</html>
