<!DOCTYPE html>

<html lang="en">
	<title>Form Submitted</title>
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
			#submitforma{
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
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>

<?php
	// define variables and set to empty values
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$ndAA= test_input($_POST["ndAA"]);
		$cAA= test_input($_POST["cAA"]);

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
	$dbname = 'appraisal';
	$db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
	$one=1;
	$q=$_SESSION["FormId"];
	$ID=$_SESSION["ID"];

	mysqli_query($db,"UPDATE accepting SET FormStatus='{$one}' WHERE EmpId='{$q}' and AcceptId='{$ID}'");
	mysqli_query($db,"UPDATE application SET ndAA='{$ndAA}',cAA='{$cAA}' WHERE ID='{$q}'");
	echo "
	<form id=\"submitforma\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Form has been submitted Successfully. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"afterlogin.php\">Go back to portal<a/></button>
			</div>
		</form>";
?>

 </html>