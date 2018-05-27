<?php
	session_start();
	if(empty($_SESSION["IDhr"])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>

<html lang="en">
	<title>Officers assigned</title>
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
			#hrback{
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
	</body>
  
  
	<?php
		// define variables and set to empty values
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$_SESSION["init"] = test_input($_POST["init"]);
			//$_SESSION['Password'] = sha1($_SESSION['Password']);
			
			$_SESSION["accept"] = test_input($_POST["accept"]);
			
			$_SESSION["review"] = test_input($_POST["review"]);
			$_SESSION["EmpId"] = test_input($_POST["qid"]);
		}
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<?php
		$username = 'root';
		$password = '';
		$db = 'appraisal';
				
		$db = new mysqli('localhost', $username, $password, $db) or die("Unable to connect");
		
		$q=$_SESSION["EmpId"];
		$q1=$_SESSION["init"];
		$q2=$_SESSION["review"];
		$q3=$_SESSION["accept"];
		$qq=1;
		$zero=0;
		
		mysqli_query($db,"UPDATE initiating SET InitId = '{$q1}',FormStatus= '{$zero}' WHERE EmpId='{$q}';");
		mysqli_query($db,"UPDATE reviewing SET ReviewId = '{$q2}',FormStatus= '{$zero}' WHERE EmpId='{$q}';");
		mysqli_query($db,"UPDATE accepting SET AcceptId = '{$q3}',FormStatus= '{$zero}' WHERE EmpId='{$q}';");
		mysqli_query($db,"UPDATE employee SET InitiatingOfficer = '{$qq}' WHERE ID='{$q1}';");
		mysqli_query($db,"UPDATE employee SET  ReviewingOfficer = '{$qq}' WHERE ID='{$q2}';");
		mysqli_query($db,"UPDATE employee SET  AcceptingOfficer = '{$qq}' WHERE ID='{$q3}';");
		
	
	?>	
	
	<form id="hrback">
		<div class="form-group">
			<br><label for="pwd">User has been assigned officers successfully.</label><br><hr>
			<button  class="btn btn-default"><a href="hr.php">Go back<a/></button>
		</div>
	</form>
   
</html>