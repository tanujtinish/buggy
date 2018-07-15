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
			#signup1{
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
	session_start();
	
	//$link = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["Name"] = test_input($_POST["Name"]);
		// check if name only contains letters and whitespace
		if(!preg_match("/^[a-zA-Z ]*$/",$_SESSION["Name"])){
			echo "
			<script language='javascript'>
				alert('Name should contain letters and Spaces Only!');
			</script>
			";
			exit();
		}
       
		$_SESSION["Email"] = test_input($_POST["Email"]);
		$_SESSION['Password'] = test_input($_POST["Password"]);
		//$_SESSION['Password'] = sha1($_SESSION['Password']);
		
	  	$_SESSION["DOB"] = test_input($_POST["DOB"]);
		
		$_SESSION["DOJ"] = test_input($_POST["DOJ"]);
	  
		$_SESSION["Qualification"] = test_input($_POST["Qualification"]);

		$_SESSION["Department"] = test_input($_POST["Department"]);
		
		$_SESSION["Designation"] = test_input($_POST["Designation"]);
	
		$_SESSION["PlaceOfPosting"] = test_input($_POST["PlaceOfPosting"]);
		
		$_SESSION["DearnessAllowance"] = test_input($_POST["DearnessAllowance"]);
	  
		$_SESSION["PayScale"] = test_input($_POST["PayScale"]);

		$_SESSION["BasicPay"] = test_input($_POST["BasicPay"]);
		
		$_SESSION["GradePay"] = test_input($_POST["Gradepay"]);

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
	
	$q1=$_SESSION["Name"];
	$q12=$_SESSION["Email"];
	$q2=$_SESSION["Password"];
	$q3=$_SESSION["DOB"];
	$q4=$_SESSION["DOJ"];
	$q5=$_SESSION["Qualification"];
	$q6=$_SESSION["Department"];
	$q7=$_SESSION["Designation"];
	$q8=$_SESSION["PlaceOfPosting"];
	$q9=$_SESSION["PayScale"];
	$q10=$_SESSION["BasicPay"];
	$q11=$_SESSION["GradePay"];
	$q13=$_SESSION["DearnessAllowance"];
	
	$sql = "SELECT * FROM employee WHERE Email='$q12'";
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result)){
		echo "
			<script language='javascript'>
				alert('Email already exists')
			</script>
			header(\"location:login.php\")
			";
		
	}
	else{
		$username = 'root';
	    $password = '';
	    $dbname = 'appraisal';
	    $db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
		mysqli_query($db,"INSERT INTO employee( Name, Email,Password, DOB, DOJ, Qualification, Department, Designation, DearnessAllowance, PlaceOfPosting, Payscale, Basicpay, Gradepay)	VALUES ('$q1','$q12', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q13', '$q8', '$q9', '$q10', '$q11')");
	}
    
	$sql1 = "SELECT * FROM employee ORDER BY ID DESC LIMIT 1";
    $result1 = $conn->query($sql1);
	while($row1 = mysqli_fetch_array($result1)){
		echo "
		<form id=\"signup1\">
			<div class=\"form-group\">
				Hey ".$q1. "! You have been registered Successfully.
				<br><label for=\"pwd\">Your UserID for login is: ".$row1['ID']."<br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"login.php\">Go here to login<a/></button>
			</div>
		</form>";
	}
	
?>	
	

</html>