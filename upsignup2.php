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
			#upsignup2{
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
		$q1 = test_input($_POST["Name"]);
		// check if name only contains letters and whitespace

        $q12 = test_input($_POST["Email"]);
		
	  	$q3 = test_input($_POST["DOB"]);
		
		$q4 = test_input($_POST["DOJ"]);
	  
		$q5 = test_input($_POST["Qualification"]);

		$q6 = test_input($_POST["Department"]);
		
		$q7 = test_input($_POST["Designation"]);
	
		$q8 = test_input($_POST["PlaceOfPosting"]);
	  
		$q9 = test_input($_POST["PayScale"]);

		$q10 = test_input($_POST["BasicPay"]);
	  
		$q11 = 0;
		
		$q13 = test_input($_POST["DearnessAllowance"]);

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
			mysqli_query($db,"UPDATE employee SET Name='{$q1}', Email='{$q12}', DOB='{$q3}', DOJ='{$q4}', Qualification='{$q5}', Department='{$q6}', Designation='{$q7}', DearnessAllowance='{$q13}',PlaceOfPosting='{$q8}', Payscale='{$q9}', Basicpay='{$q10}', Gradepay='{$q11}' WHERE ID='{$ID}';");
	    
			mysqli_query($db,"UPDATE application SET Name='{$q1}',Designation='{$q7}',PayScale='{$q9}',Qualification='{$q5}',PlaceOfPosting='{$q8}',DearnessAllowance='{$q13}',DOB='{$q3}',Gradepay='{$q11}', DOJ='{$q4}' WHERE ID='{$ID}';");
		}
        
		echo "
		<form id=\"upsignup2\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Hey ".$q1. "! You have been updated Successfully. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"afterlogin.php\">Go back to portal<a/></button>
			</div>
		</form>";

	?>	
	

