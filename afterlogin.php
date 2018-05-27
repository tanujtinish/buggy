<?php
	session_start();
	if(empty($_SESSION["ID"])){
		header("location:login.php");
	}
	
	$servername = "localhost";
    $username = "root";
	$password = "";
	$dbname = "appraisal";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    };
	$q=$_SESSION["ID"];
	
	$sql = "SELECT * FROM employee where ID = '$q' ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>

<html lang="en">
	<?php
			echo "<title>Hi ".$row["Name"]."</title>";
		?>
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
			#afterloginform{
				padding-top: 50px;
				margin: 0 auto;
				width: 50%;
			}
		</style>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body id="mainbody">
		<img class ="img-responsive" src="ntc-logo.png" i>
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin">PERFORMANCE MANAGEMENT SYSTEM</h3>
		</div>
		 
		 <a href="viewprofile.php"><button class="btn btn-default btn-primary" style="position:relative; right:0; float:right">View Profile</button></a>
		<a href="upsignup.php"><button class="btn btn-default btn-success" style="position:relative; right:0; float:right">Update Profile</button></a> 
		<a href="login.php"><button class="btn btn-default btn-danger" style="position:relative; right:0; float:right">Logout</button></a>
   
		<form id="afterloginform">
		<?php
			echo "<div class=\"form-group\">";
			if($row["EmpFormStatus"])
			{
				echo "<button  class=\"btn btn-default\">Self Appraisal</button>";
				echo "<button  class=\"btn btn-default\" type='submit' name='viewapp'  ><a href='fullformview.php'>View Appraisal Form Status</a></button>
				<button  class=\"btn btn-default\"><a href=\"EmployeeOfficers.php\">Officer's Assigned<a/></button>";
			}
			else
			{
				echo "<button  class=\"btn btn-default\"><a href=\"pg110.php\">Self Appraisal<a/></button>";
				echo "<button  class=\"btn btn-default\" type='submit' name='viewapp'  ><a href='message.php'>View Appraisal Form Status</a></button>
				<button  class=\"btn btn-default\"><a href=\"EmployeeOfficers.php\">Officer's Assigned<a/></button></div> ";
			}
		?>
			<hr>
			<div class="form-group">
				<label for="pwd">Review as:</label><br>
				<button  class="btn btn-default"><a href="initiating.php">Initiating Authority<a/></button>
				<button  class="btn btn-default"><a href="reviewing.php">Reviewing Authority<a/></button>
				<button  class="btn btn-default"><a href="accepting.php">Accepting Authority<a/></button>
			</div>
		</form>
	<body>
</html>