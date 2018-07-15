<!DOCTYPE html>

<html lang="en">
	<title>New Password</title>
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
			#resetpassword{
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
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php
if(isset($_GET["email"])&&isset($_GET["token"]))
{
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appraisal";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }
	$email=($_GET["email"]);
	$token=($_GET["token"]);
	$sql = "SELECT * FROM employee WHERE Email='$email' and Token='$token'";
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result))
	{
		$str="0123456789qwertyuiopasdfghjklzxcvbnm";
		$str=str_shuffle($str);
		$str=substr($str,0,15);

		$username = 'root';
	    $password = '';
	    $dbname = 'appraisal';
	    $db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
		mysqli_query($db,"UPDATE employee SET Password='{$str}' WHERE Email='{$email}';");

		echo "
		<form id=\"resetpassword\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Your new password is: $str</label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go here to login<a/></button>
			</div>
		</form>";
	}
	else
	{
		echo "
		<form id=\"resetpassword\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">please check your link</label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go back to portal<a/></button>
			</div>
		</form>";
	}
}
else
{
	header("Location: login.php");
    exit();	
}
?>