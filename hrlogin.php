<?php
	session_start();
	$_SESSION["Passwordhr"] =  $_SESSION["IDhr"] = '';
?>

<!DOCTYPE html>

<html lang="en">
	<title>Hr LogIn Page</title>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
		<style type="text/css">
			#mainbody{
				font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			}
			.bg-1{
				background-color: #981a66;
				color: white;
			}
			.img-responsive{
				margin: 0 auto;
			}
			#loginform{
				padding-top: 100px;
				margin: 0 auto;
				width: 25%;
			}
		</style>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
	</head>
	
	<body id="mainbody">
		<img class ="img-responsive" src="ntc-logo.png" i>
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
		</div>
		<a href="login.php"><button class="btn btn-default btn-success" style="position:absolute; right:0;">Go Back To Home Page </button></a> 
		<form id="loginform" action="hrlogin1.php" method="post" >
			<div class="form-group">
				<label for="userID">Hr ID:</label>
				<input type="text" class="form-control" name="IDhr">
			</div>
			
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="Passwordhr">
			</div> 
	  
			<button type="submit" class="btn btn-default btn-primary">Login</button>
		</form>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	
	</body>

</html>