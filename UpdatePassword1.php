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
			#upsignup1{
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
	</body>
    
<?php
	// define variables and set to empty values
	//$link = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$q2 = test_input($_POST["Password"]);

	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

	<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "appraisal";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
		if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
		$ID=$_SESSION["ID"];
		
		{
			$username = 'root';
	        $password = '';
	        $dbname = 'appraisal';
	        $db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
			mysqli_query($db,"UPDATE employee SET Password='{$q2}' WHERE ID='{$ID}';");
	    
		}
        
		echo "
		<form id=\"upsignup1\">
			<div class=\"form-group\">
				<br><label for=\"pwd\"> Your password has been updated Successfully. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"upsignup.php\">Go back<a/></button>
			</div>
		</form>";

	?>	
	


