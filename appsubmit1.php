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
			#appsubmit1{
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
	//$link = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {			
	
		$DOR = test_input($_POST["DOR"]);
		$DOF = test_input($_POST["DOF"]);

		$PPH_f1 = test_input($_POST["PPH_f1"]);
		$PPH_f2 = test_input($_POST["PPH_f2"]);
		$PPH_f3 = test_input($_POST["PPH_f3"]);
		$PPH_f4 = test_input($_POST["PPH_f4"]);

		$PPH_t1 = test_input($_POST["PPH_t1"]);
		$PPH_t2 = test_input($_POST["PPH_t2"]);
		$PPH_t3 = test_input($_POST["PPH_t3"]);
		$PPH_t4 = test_input($_POST["PPH_t4"]);

		$PPH_loc1 = test_input($_POST["PPH_loc1"]);
		$PPH_loc2 = test_input($_POST["PPH_loc2"]);
		$PPH_loc3 = test_input($_POST["PPH_loc3"]);
		$PPH_loc4 = test_input($_POST["PPH_loc4"]);

		$PPH_pos1 = test_input($_POST["PPH_pos1"]);
		$PPH_pos2 = test_input($_POST["PPH_pos2"]);
		$PPH_pos3 = test_input($_POST["PPH_pos3"]);
		$PPH_pos4 = test_input($_POST["PPH_pos4"]);

		$PPH_res1 = test_input($_POST["PPH_res1"]);
		$PPH_res2 = test_input($_POST["PPH_res2"]);
		$PPH_res3 = test_input($_POST["PPH_res3"]);
		$PPH_res4 = test_input($_POST["PPH_res4"]);

		$MYR_kpa1 = test_input($_POST["MYR_kpa1"]);
		$MYR_kpa2 = test_input($_POST["MYR_kpa2"]);
		$MYR_kpa3 = test_input($_POST["MYR_kpa3"]);
		$MYR_kpa4 = test_input($_POST["MYR_kpa4"]);
		$MYR_kpa5 = test_input($_POST["MYR_kpa5"]);
		$MYR_kpa6 = test_input($_POST["MYR_kpa6"]);
		$MYR_kpa7 = test_input($_POST["MYR_kpa7"]);
		$MYR_kpa8 = test_input($_POST["MYR_kpa8"]);
		$MYR_kpa9 = test_input($_POST["MYR_kpa9"]);
		$MYR_kpa10 = test_input($_POST["MYR_kpa10"]);

		$MYR_ind1 = test_input($_POST["MYR_ind1"]);
		$MYR_ind2 = test_input($_POST["MYR_ind2"]);
		$MYR_ind3 = test_input($_POST["MYR_ind3"]);
		$MYR_ind4 = test_input($_POST["MYR_ind4"]);
		$MYR_ind5 = test_input($_POST["MYR_ind5"]);
		$MYR_ind6 = test_input($_POST["MYR_ind6"]);
		$MYR_ind7 = test_input($_POST["MYR_ind7"]);
		$MYR_ind8 = test_input($_POST["MYR_ind8"]);
		$MYR_ind9 = test_input($_POST["MYR_ind9"]);
		$MYR_ind10 = test_input($_POST["MYR_ind10"]);

		$MYR_mm1 = test_input($_POST["MYR_mm1"]);
		$MYR_mm2 = test_input($_POST["MYR_mm2"]);
		$MYR_mm3 = test_input($_POST["MYR_mm3"]);
		$MYR_mm4 = test_input($_POST["MYR_mm4"]);
		$MYR_mm5 = test_input($_POST["MYR_mm5"]);
		$MYR_mm6 = test_input($_POST["MYR_mm6"]);
		$MYR_mm7 = test_input($_POST["MYR_mm7"]);
		$MYR_mm8 = test_input($_POST["MYR_mm8"]);
		$MYR_mm9 = test_input($_POST["MYR_mm9"]);
		$MYR_mm10 = test_input($_POST["MYR_mm10"]);

		$MYR_ach1 = test_input($_POST["MYR_ach1"]);
		$MYR_ach2 = test_input($_POST["MYR_ach2"]);
		$MYR_ach3 = test_input($_POST["MYR_ach3"]);
		$MYR_ach4 = test_input($_POST["MYR_ach4"]);
		$MYR_ach5 = test_input($_POST["MYR_ach5"]);
		$MYR_ach6 = test_input($_POST["MYR_ach6"]);
		$MYR_ach7 = test_input($_POST["MYR_ach7"]);
		$MYR_ach8 = test_input($_POST["MYR_ach8"]);
		$MYR_ach9 = test_input($_POST["MYR_ach9"]);
		$MYR_ach10 = test_input($_POST["MYR_ach10"]);
		
		/*$MYR_rev1 = test_input($_POST["MYR_rev1"]);
		$MYR_rev2 = test_input($_POST["MYR_rev2"]);
		$MYR_rev3 = test_input($_POST["MYR_rev3"]);
		$MYR_rev4 = test_input($_POST["MYR_rev4"]);
		$MYR_rev5 = test_input($_POST["MYR_rev5"]);
		$MYR_rev6 = test_input($_POST["MYR_rev6"]);
		$MYR_rev7 = test_input($_POST["MYR_rev7"]);
		$MYR_rev8 = test_input($_POST["MYR_rev8"]);
		$MYR_rev9 = test_input($_POST["MYR_rev9"]);
		$MYR_rev10 = test_input($_POST["MYR_rev10"]);*/
		
		$YER_kpa1 = test_input($_POST["YER_kpa1"]);
		$YER_kpa2 = test_input($_POST["YER_kpa2"]);
		$YER_kpa3 = test_input($_POST["YER_kpa3"]);
		$YER_kpa4 = test_input($_POST["YER_kpa4"]);
		$YER_kpa5 = test_input($_POST["YER_kpa5"]);
		$YER_kpa6 = test_input($_POST["YER_kpa6"]);
		$YER_kpa7 = test_input($_POST["YER_kpa7"]);
		$YER_kpa8 = test_input($_POST["YER_kpa8"]);
		$YER_kpa9 = test_input($_POST["YER_kpa9"]);
		$YER_kpa10 = test_input($_POST["YER_kpa10"]);

		$YER_ind1 = test_input($_POST["YER_ind1"]);
		$YER_ind2 = test_input($_POST["YER_ind2"]);
		$YER_ind3 = test_input($_POST["YER_ind3"]);
		$YER_ind4 = test_input($_POST["YER_ind4"]);
		$YER_ind5 = test_input($_POST["YER_ind5"]);
		$YER_ind6 = test_input($_POST["YER_ind6"]);
		$YER_ind7 = test_input($_POST["YER_ind7"]);
		$YER_ind8 = test_input($_POST["YER_ind8"]);
		$YER_ind9 = test_input($_POST["YER_ind9"]);
		$YER_ind10 = test_input($_POST["YER_ind10"]);

		$YER_mm1 = test_input($_POST["YER_mm1"]);
		$YER_mm2 = test_input($_POST["YER_mm2"]);
		$YER_mm3 = test_input($_POST["YER_mm3"]);
		$YER_mm4 = test_input($_POST["YER_mm4"]);
		$YER_mm5 = test_input($_POST["YER_mm5"]);
		$YER_mm6 = test_input($_POST["YER_mm6"]);
		$YER_mm7 = test_input($_POST["YER_mm7"]);
		$YER_mm8 = test_input($_POST["YER_mm8"]);
		$YER_mm9 = test_input($_POST["YER_mm9"]);
		$YER_mm10 = test_input($_POST["YER_mm10"]);

		$YER_ach1 = test_input($_POST["YER_ach1"]);
		$YER_ach2 = test_input($_POST["YER_ach2"]);
		$YER_ach3 = test_input($_POST["YER_ach3"]);
		$YER_ach4 = test_input($_POST["YER_ach4"]);
		$YER_ach5 = test_input($_POST["YER_ach5"]);
		$YER_ach6 = test_input($_POST["YER_ach6"]);
		$YER_ach7 = test_input($_POST["YER_ach7"]);
		$YER_ach8 = test_input($_POST["YER_ach8"]);
		$YER_ach9 = test_input($_POST["YER_ach9"]);
		$YER_ach10 = test_input($_POST["YER_ach10"]);

		/*$YER_rev1 = test_input($_POST["YER_rev1"]);
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
		$YER_ma10 = test_input($_POST["YER_ma10"]);*/
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$servername = "localhost";
	$username = 'root';
	$password = '';
	$db = 'appraisal';
            
			$username = "root";
            $password = "";
            $dbname = "appraisal";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
			
	$q=$_SESSION["ID"];	
	$sql = "SELECT * FROM employee WHERE ID ='$q'";
    $result = $conn->query($sql);
	
	while($row = mysqli_fetch_array($result)){
		$Name = $row["Name"];
		$ID = $row["ID"];
		$Designation  = $row["Designation"];
		$PayScale = $row["PayScale"];
		$Qualification = $row["Qualification"];
		$PlaceOfPosting = $row["PlaceOfPosting"];
		$DOB = $row["DOB"];
		$DOJ = $row["DOJ"];
	}
	$db = new mysqli('localhost', $username, $password, $db) or die("Unable to connect");
    $ID=$_SESSION["ID"];
	$sql = "SELECT * FROM application WHERE ID='$ID'";
	$result = $conn->query($sql);
	
	if($row = mysqli_fetch_array($result)){
		mysqli_query($db,"UPDATE application SET Name='{$Name}',ID='{$ID}',Designation='{$Designation}',PayScale='{$PayScale}',Qualification='{$Qualification}',PlaceOfPosting='{$PlaceOfPosting}',DOB='{$DOB}',DOJ='{$DOJ}', DOR='{$DOR}', DOF='{$DOF}', PPH_f1='{$PPH_f1}', PPH_f2='{$PPH_f2}', PPH_f3='{$PPH_f3}', PPH_f4='{$PPH_f4}', PPH_t1='{$PPH_t1}', PPH_t2='{$PPH_t2}', PPH_t3='{$PPH_t3}', PPH_t4='{$PPH_t4}', PPH_loc1='{$PPH_loc1}', PPH_loc2='{$PPH_loc2}', PPH_loc3='{$PPH_loc3}', PPH_loc4='{$PPH_loc4}', PPH_pos1='{$PPH_pos1}', PPH_pos2='{$PPH_pos2}', PPH_pos3='{$PPH_pos3}', PPH_pos4='{$PPH_pos4}', PPH_res1='{$PPH_res1}', PPH_res2='{$PPH_res2}', PPH_res3='{$PPH_res3}', PPH_res4='{$PPH_res4}', MYR_kpa1='{$MYR_kpa1}', MYR_kpa2='{$MYR_kpa2}', MYR_kpa3='{$MYR_kpa3}', MYR_kpa4='{$MYR_kpa4}', MYR_kpa5='{$MYR_kpa5}', MYR_kpa6='{$MYR_kpa6}',MYR_kpa7='{$MYR_kpa7}',MYR_kpa8='{$MYR_kpa8}',MYR_kpa9='{$MYR_kpa9}',MYR_kpa10='{$MYR_kpa10}', MYR_ind1='{$MYR_ind1}', MYR_ind2='{$MYR_ind2}', MYR_ind3='{$MYR_ind3}', MYR_ind4='{$MYR_ind4}', MYR_ind5='{$MYR_ind5}', MYR_ind6='{$MYR_ind6}',MYR_ind7='{$MYR_ind7}',MYR_ind8='{$MYR_ind8}',MYR_ind9='{$MYR_ind9}',MYR_ind10='{$MYR_ind10}', MYR_mm1='{$MYR_mm1}', MYR_mm2='{$MYR_mm2}', MYR_mm3='{$MYR_mm3}', MYR_mm4='{$MYR_mm4}', MYR_mm5='{$MYR_mm5}', MYR_mm6='{$MYR_mm6}',MYR_mm7='{$MYR_mm7}',MYR_mm8='{$MYR_mm8}',MYR_mm9='{$MYR_mm9}',MYR_mm10='{$MYR_mm10}', MYR_ach1='{$MYR_ach1}', MYR_ach2='{$MYR_ach2}', MYR_ach3='{$MYR_ach3}', MYR_ach4='{$MYR_ach4}', MYR_ach5='{$MYR_ach5}', MYR_ach6='{$MYR_ach6}',MYR_ach7='{$MYR_ach7}',MYR_ach8='{$MYR_ach8}',MYR_ach9='{$MYR_ach9}',MYR_ach10='{$MYR_ach10}', YER_kpa1='{$YER_kpa1}', YER_kpa2='{$YER_kpa2}', YER_kpa3='{$YER_kpa3}', YER_kpa4='{$YER_kpa4}', YER_kpa5='{$YER_kpa5}', YER_kpa6='{$YER_kpa6}',YER_kpa7='{$YER_kpa7}',YER_kpa8='{$YER_kpa8}',YER_kpa9='{$YER_kpa9}',YER_kpa10='{$YER_kpa10}', YER_ind1='{$YER_ind1}', YER_ind2='{$YER_ind2}', YER_ind3='{$YER_ind3}', YER_ind4='{$YER_ind4}', YER_ind5='{$YER_ind5}', YER_ind6='{$YER_ind6}',YER_ind7='{$YER_ind7}',YER_ind8='{$YER_ind8}',YER_ind9='{$YER_ind9}',YER_ind10='{$YER_ind10}', YER_mm1='{$YER_mm1}', YER_mm2='{$YER_mm2}', YER_mm3='{$YER_mm3}', YER_mm4='{$YER_mm4}', YER_mm5='{$YER_mm5}', YER_mm6='{$YER_mm6}',YER_mm7='{$YER_mm7}',YER_mm8='{$YER_mm8}',YER_mm9='{$YER_mm9}',YER_mm10='{$YER_mm10}', YER_ach1='{$YER_ach1}', YER_ach2='{$YER_ach2}', YER_ach3='{$YER_ach3}', YER_ach4='{$YER_ach4}', YER_ach5='{$YER_ach5}', YER_ach6='{$YER_ach6}',YER_ach7='{$YER_ach7}',YER_ach8='{$YER_ach8}',YER_ach9='{$YER_ach9}',YER_ach10='{$YER_ach10}' WHERE ID='{$ID}';");
		echo " 
		<form id=\"appsubmit1\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Form successfully updated. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"afterlogin.php\">Go back to portal<a/></button>
			</div>
		</form>";
	}
	
	else{
		mysqli_query($db,"INSERT INTO application(Name, ID, Designation, PayScale, Qualification, PlaceOfPosting, DOB, DOJ, DOR, DOF, PPH_f1, PPH_f2, PPH_f3, PPH_f4, PPH_t1, PPH_t2, PPH_t3, PPH_t4, PPH_loc1, PPH_loc2, PPH_loc3, PPH_loc4, PPH_pos1, PPH_pos2, PPH_pos3, PPH_pos4, PPH_res1, PPH_res2, PPH_res3, PPH_res4, MYR_kpa1, MYR_kpa2, MYR_kpa3, MYR_kpa4, MYR_kpa5, MYR_kpa6, MYR_ind1, MYR_ind2, MYR_ind3, MYR_ind4, MYR_ind5, MYR_ind6, MYR_mm1, MYR_mm2, MYR_mm3, MYR_mm4, MYR_mm5, MYR_mm6, MYR_ach1, MYR_ach2, MYR_ach3, MYR_ach4, MYR_ach5, MYR_ach6, YER_kpa1, YER_kpa2, YER_kpa3, YER_kpa4, YER_kpa5, YER_kpa6, YER_ind1, YER_ind2, YER_ind3, YER_ind4, YER_ind5, YER_ind6, YER_mm1, YER_mm2, YER_mm3, YER_mm4, YER_mm5, YER_mm6, YER_ach1, YER_ach2, YER_ach3, YER_ach4, YER_ach5, YER_ach6 )	
		VALUES('$Name', '$ID', '$Designation', '$PayScale', '$Qualification', '$PlaceOfPosting', '$DOB', '$DOJ', '$DOR', '$DOF', '$PPH_f1', '$PPH_f2', '$PPH_f3', '$PPH_f4', '$PPH_t1', '$PPH_t2', '$PPH_t3', '$PPH_t4', '$PPH_loc1', '$PPH_loc2', '$PPH_loc3', '$PPH_loc4', '$PPH_pos1', '$PPH_pos2', '$PPH_pos3', '$PPH_pos4', '$PPH_res1', '$PPH_res2', '$PPH_res3', '$PPH_res4', '$MYR_kpa1', '$MYR_kpa2', '$MYR_kpa3', '$MYR_kpa4', '$MYR_kpa5', '$MYR_kpa6', '$MYR_ind1', '$MYR_ind2', '$MYR_ind3', '$MYR_ind4', '$MYR_ind5', '$MYR_ind6', '$MYR_mm1', '$MYR_mm2', '$MYR_mm3', '$MYR_mm4', '$MYR_mm5', '$MYR_mm6', '$MYR_ach1', '$MYR_ach2', '$MYR_ach3', '$MYR_ach4', '$MYR_ach5', '$MYR_ach6', '$YER_kpa1', '$YER_kpa2', '$YER_kpa3', '$YER_kpa4', '$YER_kpa5', '$YER_kpa6', '$YER_ind1', '$YER_ind2', '$YER_ind3', '$YER_ind4', '$YER_ind5', '$YER_ind6', '$YER_mm1', '$YER_mm2', '$YER_mm3', '$YER_mm4', '$YER_mm5', '$YER_mm6', '$YER_ach1', '$YER_ach2', '$YER_ach3', '$YER_ach4', '$YER_ach5', '$YER_ach6')");
		mysqli_query($db,"INSERT INTO initiating( EmpId)	VALUES ('$ID')");
		mysqli_query($db,"INSERT INTO reviewing( EmpId)	VALUES ('$ID')");
		mysqli_query($db,"INSERT INTO accepting( EmpId)	VALUES ('$ID')");
		//mysqli_query($db,"INSERT INTO application( Name, ID ) VALUES ( '$Name', '$ID' )");
	
		echo " 
		<form id=\"appsubmit1\">
			<div class=\"form-group\">
				<br><label for=\"pwd\">Form successfully submitted. <br></label><br><hr>
				<button  class=\"btn btn-default\"><a href=\"afterlogin.php\">Go back to portal<a/></button>
			</div>
		</form>";
	}
		
?>
</html>