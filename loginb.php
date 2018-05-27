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
			#signupform{
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
		</div>

	<?php
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		  
			$_SESSION["ID"] = test_input($_POST["ID"]);
			$_SESSION["Password"] = test_input($_POST["Password"]);
			//$_SESSION["Password"] = sha1($_SESSION["Password"]);
			
			$q1=$_SESSION["ID"];
			$q2=$_SESSION["Password"];
			
			$username = 'root';
			$password = '';
			$db = 'appraisal';
				
			$db = new mysqli('localhost', $username, $password, $db) or die("Unable to connect");
			$sql = mysqli_query($db,"SELECT * FROM employee WHERE ID ='$q1' AND Password = '$q2'");
			
			if($row = mysqli_fetch_array($sql)){
				//header("Location: /employeefront.php"); /* Redirect browser */
				echo "
				<script language='javascript'>
					window.location ='afterlogin.php';
				</script>
				";
				exit();
			}
			else{
				echo "
				<script language='javascript'>
					window.alert('Username or Password is incorrect!');
					window.location ='login.php';
				</script>
				";
			  
				$_SESSION["Password"] =  $_SESSION["ID"] = "";
				exit();
			}
		}

		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>