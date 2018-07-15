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
			#submitformi{
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
		$MYR_rev1 = test_input($_POST["MYR_rev1"]);
		$MYR_rev2 = test_input($_POST["MYR_rev2"]);
		$MYR_rev3 = test_input($_POST["MYR_rev3"]);
		$MYR_rev4 = test_input($_POST["MYR_rev4"]);
		$MYR_rev5 = test_input($_POST["MYR_rev5"]);
		$MYR_rev6 = test_input($_POST["MYR_rev6"]);
		$MYR_rev7 = test_input($_POST["MYR_rev7"]);
		$MYR_rev8 = test_input($_POST["MYR_rev8"]);
		$MYR_rev9 = test_input($_POST["MYR_rev9"]);
		$MYR_rev10 = test_input($_POST["MYR_rev10"]);
		
		$YER_rev1 = test_input($_POST["YER_rev1"]);
		$YER_rev2 = test_input($_POST["YER_rev2"]);
		$YER_rev3 = test_input($_POST["YER_rev3"]);
		$YER_rev4 = test_input($_POST["YER_rev4"]);
		$YER_rev5 = test_input($_POST["YER_rev5"]);
		$YER_rev6 = test_input($_POST["YER_rev6"]);
		$YER_rev7 = test_input($_POST["YER_rev7"]);
		$YER_rev8 = test_input($_POST["YER_rev8"]);
		$YER_rev9 = test_input($_POST["YER_rev9"]);
		$YER_rev10 = test_input($_POST["YER_rev10"]);

		$YER_ma1 = test_input($_POST["YER_ma1"]);
		$YER_ma2 = test_input($_POST["YER_ma2"]);
		$YER_ma3 = test_input($_POST["YER_ma3"]);
		$YER_ma4 = test_input($_POST["YER_ma4"]);
		$YER_ma5 = test_input($_POST["YER_ma5"]);
		$YER_ma6 = test_input($_POST["YER_ma6"]);
		$YER_ma7 = test_input($_POST["YER_ma7"]);
		$YER_ma8 = test_input($_POST["YER_ma8"]);
		$YER_ma9 = test_input($_POST["YER_ma9"]);
		$YER_ma10 = test_input($_POST["YER_ma10"]);
		
		$p2c_1 = test_input($_POST["p2c_1"]);
	    $p2c_2 = test_input($_POST["p2c_2"]);
		$p2c_3 = test_input($_POST["p2c_3"]);
		$p2c_4 = test_input($_POST["p2c_4"]);
		$p2c_5 = test_input($_POST["p2c_5"]);
		$p2c_6 = test_input($_POST["p2c_6"]);
		$p2c_7 = test_input($_POST["p2c_7"]);
		$p2c_8 = test_input($_POST["p2c_8"]);
		$p2c_9 = test_input($_POST["p2c_9"]);

		$p3v_1= test_input($_POST["p3v_1"]);
		$p3v_2= test_input($_POST["p3v_2"]);
		$p3v_3= test_input($_POST["p3v_3"]);
		$p3v_4= test_input($_POST["p3v_4"]);
		$p3v_5= test_input($_POST["p3v_5"]);
		$p3v_6= test_input($_POST["p3v_6"]);
		$p3v_7= test_input($_POST["p3v_7"]);
		$p3v_8= test_input($_POST["p3v_8"]);
		$p3v_9= test_input($_POST["p3v_9"]);
		$p3v_10= test_input($_POST["p3v_10"]);
		
		$p4p_1= test_input($_POST["p4p_1"]);
		$p4p_2= test_input($_POST["p4p_2"]);
		$p4p_3= test_input($_POST["p4p_3"]);
		$p4p_4= test_input($_POST["p4p_4"]);
		$p4p_5= test_input($_POST["p4p_5"]);
		
		$ndIA= test_input($_POST["ndIA"]);
		$cop= test_input($_POST["cop"]);
	}
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$servername = "localhost";
    $username = "root";
	$password = "";
	$dbname = "appraisal";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    };
	$q=$_SESSION["FormId"];
	
	$sql = "SELECT * FROM application where ID = '$q' ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
	
	$YER_mm_total = ($row["YER_mm1"] + $row["YER_mm2"] + $row["YER_mm3"] + $row["YER_mm4"] + $row["YER_mm5"] + $row["YER_mm6"] + $row["YER_mm7"] + $row["YER_mm8"] + $row["YER_mm9"] + $row["YER_mm10"]);
	
	$YER_ma_total=0;
	if($row["YER_mm1"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma1"]; 
    if($row["YER_mm2"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma2"];
    if($row["YER_mm3"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma3"];
    if($row["YER_mm4"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma4"];
    if($row["YER_mm5"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma5"];
    if($row["YER_mm6"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma6"];
    if($row["YER_mm7"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma7"];
    if($row["YER_mm8"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma8"];
    if($row["YER_mm9"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma9"];
    if($row["YER_mm10"]!=0)
	$YER_ma_total = $YER_ma_total+ $_POST["YER_ma10"];
	
	if($YER_mm_total){
		    $total0 = ($YER_ma_total)/($YER_mm_total)*50;
		$total0 = round($total0,3); 
	}
	else{
		$total0 = 0;
	}
	
	$total1 = ($_POST["p2c_1"] + $_POST["p2c_2"] + $_POST["p2c_3"] + $_POST["p2c_4"] + $_POST["p2c_5"] + $_POST["p2c_6"] + $_POST["p2c_7"] + $_POST["p2c_8"] + $_POST["p2c_9"])*20/45;
	$total2 = ($_POST["p3v_1"] + $_POST["p3v_2"] + $_POST["p3v_3"] + $_POST["p3v_4"] + $_POST["p3v_5"] + $_POST["p3v_6"] + $_POST["p3v_7"] + $_POST["p3v_8"] + $_POST["p3v_9"] + $_POST["p3v_10"])*15/50;
	$total3 = ($_POST["p4p_1"] + $_POST["p4p_2"] + $_POST["p4p_3"] + $_POST["p4p_4"] + $_POST["p4p_5"])*15/25;
	
	$total1 = round($total1,3);
	$total2 = round($total2,3);
	$total3 = round($total3,3);
	
	$totalsum = $total0 + $total1 + $total2 + $total3;
?>

<?php
    
	$username = 'root';
	$password = '';
	$dbname = 'appraisal';
	$db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
	$one=1;
	$q=$_SESSION["FormId"];
	$ID=$_SESSION["ID"];
	mysqli_query($db,"UPDATE initiating SET FormStatus='{$one}' WHERE EmpId='{$q}' and InitId='{$ID}'");
	
	mysqli_query($db,"UPDATE employee SET EmpFormStatus='{$one}' WHERE ID='{$q}'");
	
	mysqli_query($db,"UPDATE application SET MYR_rev1='{$MYR_rev1}',MYR_rev2='{$MYR_rev2}',MYR_rev3='{$MYR_rev3}',MYR_rev4='{$MYR_rev4}',MYR_rev5='{$MYR_rev5}',MYR_rev6='{$MYR_rev6}',MYR_rev7='{$MYR_rev7}',MYR_rev8='{$MYR_rev8}',MYR_rev9='{$MYR_rev9}',MYR_rev10='{$MYR_rev10}',YER_rev1='{$YER_rev1}',YER_rev2='{$YER_rev2}',YER_rev3='{$YER_rev3}',YER_rev4='{$YER_rev4}',YER_rev5='{$YER_rev5}',YER_rev6='{$YER_rev6}',YER_rev7='{$YER_rev7}',YER_rev8='{$YER_rev8}',YER_rev9='{$YER_rev9}',YER_rev10='{$YER_rev10}',YER_ma1='{$YER_ma1}',YER_ma2='{$YER_ma2}',YER_ma3='{$YER_ma3}',YER_ma4='{$YER_ma4}',YER_ma5='{$YER_ma5}',YER_ma6='{$YER_ma6}',YER_ma7='{$YER_ma7}',YER_ma8='{$YER_ma8}',YER_ma9='{$YER_ma9}',YER_ma10='{$YER_ma10}',total0='{$total0}',p2c_1='{$p2c_1}',p2c_2='{$p2c_2}',p2c_3='{$p2c_3}',p2c_4='{$p2c_4}',p2c_5='{$p2c_5}',p2c_6='{$p2c_6}',p2c_7='{$p2c_7}',p2c_8='{$p2c_8}',p2c_9='{$p2c_9}',total1='{$total1}',p3v_1='{$p3v_1}',p3v_2='{$p3v_2}',p3v_3='{$p3v_3}',p3v_4='{$p3v_4}',p3v_5='{$p3v_5}',p3v_6='{$p3v_6}',p3v_7='{$p3v_7}',p3v_8='{$p3v_8}',p3v_9='{$p3v_9}',p3v_10='{$p3v_10}',total2='{$total2}',p4p_1='{$p4p_1}',p4p_2='{$p4p_2}',p4p_3='{$p4p_3}',p4p_4='{$p4p_4}',p4p_5='{$p4p_5}',total3='{$total3}',totalsum='{$totalsum}',ndIA='{$ndIA}',cop='{$cop}' WHERE ID='{$q}'");
	
	echo "
	<form id=\"submitformi\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Form has been submitted Successfully. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"afterlogin.php\">Go back to portal<a/></button>
			</div>
		</form>";
	?>

  </html>