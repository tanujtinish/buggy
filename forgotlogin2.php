<!DOCTYPE html>

<html lang="en">
	<title>Password Change</title>
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
			#forgotlogin2{
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
if(isset($_POST["email"]))
{
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appraisal";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }
	$email=($_POST["email"]);

	$sql = "SELECT * FROM employee WHERE Email='$email'";
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result))
	{
		$str="0123456789qwertyuiopasdfghjklzxcvbnm";
		$str=str_shuffle($str);
		$str=substr($str,0,10);
		$url="localhost/Update1/resetpassword.php?token=$str&email=$email";
		
		$username = 'root';
	    $password = '';
	    $dbname = 'appraisal';
	    $db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
		mysqli_query($db,"UPDATE employee SET Token='{$str}' WHERE Email='{$email}';");
		
		//mail($email,"Reset Password", " To Reset your password, please visit this: $url" , "From: tanujtinish@gmail.com\r\n");
		echo "
		<form id=\"forgotlogin2\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Please check your email ".$email." for new password. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go back to login page<a/></button>
			</div>
		</form>";
	}
	else
	{
		echo " 
		<form id=\"forgotlogin2\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">please check if you entered the same email while you signed up with us. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go back to login page<a/></button>
			</div>
		</form>";
	}
}
else
{
	echo " 
	<form id=\"forgotlogin2\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">please check your inputs. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go back to login page<a/></button>
			</div>
		</form>";
}
?>