<?php
session_start();
	if(empty($_SESSION["ID"])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>

<html lang="en">
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
			#messager{
				padding-top: 75px;
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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">LogOut</a></li>
                </ul>
			</div>
		</div>
		
		<form id="messager">
			<div class="form-group">
				<br><label for="pwd">Initiating authority has not submitted the form.</label><br><hr>
				<button  class="btn btn-default"><a href="afterlogin.php">Go back to portal<a/></button>
			</div>
		</form>
	
	</body>
</html>