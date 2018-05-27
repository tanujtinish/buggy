<?php
	session_start();
	if(empty($_SESSION["ID"])&&empty($_SESSION["IDhr"])){
		eader("location:login.php");
	}
?>

<?php
	// define variables and set to empty values
	//$link = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["FormId"] = test_input($_POST["qid"]);	  
	}
	
	$_SESSION["FormId"] = $_SESSION["ID"];
	
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
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	
	$q=$_SESSION["FormId"];
	$sql = "SELECT * FROM application WHERE ID ='$q'";
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
		$DOR = $row["DOR"];
		$DOF = $row["DOF"];

		$PPH_f1 = $row["PPH_f1"];
		$PPH_f2 = $row["PPH_f2"];
		$PPH_f3 = $row["PPH_f3"];
		$PPH_f4 = $row["PPH_f4"];

		$PPH_t1 = $row["PPH_t1"];
		$PPH_t2 = $row["PPH_t2"];
		$PPH_t3 = $row["PPH_t3"];
		$PPH_t4 = $row["PPH_t4"];

		$PPH_loc1 = $row["PPH_loc1"];
		$PPH_loc2 = $row["PPH_loc2"];
		$PPH_loc3 = $row["PPH_loc3"];
		$PPH_loc4 = $row["PPH_loc4"];

		$PPH_pos1 = $row["PPH_pos1"];
		$PPH_pos2 = $row["PPH_pos2"];
		$PPH_pos3 = $row["PPH_pos3"];
		$PPH_pos4 = $row["PPH_pos4"];

		$PPH_res1 = $row["PPH_res1"];
		$PPH_res2 = $row["PPH_res2"];
		$PPH_res3 = $row["PPH_res3"];
		$PPH_res4 = $row["PPH_res4"];

		$MYR_kpa1 = $row["MYR_kpa1"];
		$MYR_kpa2 = $row["MYR_kpa2"];
		$MYR_kpa3 = $row["MYR_kpa3"];
		$MYR_kpa4 = $row["MYR_kpa4"];
		$MYR_kpa5 = $row["MYR_kpa5"];
		$MYR_kpa6 = $row["MYR_kpa6"];
		$MYR_kpa7 = $row["MYR_kpa7"];
		$MYR_kpa8 = $row["MYR_kpa8"];
		$MYR_kpa9 = $row["MYR_kpa9"];
		$MYR_kpa10 = $row["MYR_kpa10"];

		$MYR_ind1 = $row["MYR_ind1"];
		$MYR_ind2 = $row["MYR_ind2"];
		$MYR_ind3 = $row["MYR_ind3"];
		$MYR_ind4 = $row["MYR_ind4"];
		$MYR_ind5 = $row["MYR_ind5"];
		$MYR_ind6 = $row["MYR_ind6"];
		$MYR_ind7 = $row["MYR_ind7"];
		$MYR_ind8 = $row["MYR_ind8"];
		$MYR_ind9 = $row["MYR_ind9"];
		$MYR_ind10 = $row["MYR_ind10"];

		$MYR_mm1 = $row["MYR_mm1"];
		$MYR_mm2 = $row["MYR_mm2"];
		$MYR_mm3 = $row["MYR_mm3"];
		$MYR_mm4 = $row["MYR_mm4"];
		$MYR_mm5 = $row["MYR_mm5"];
		$MYR_mm6 = $row["MYR_mm6"];
		$MYR_mm7 = $row["MYR_mm7"];
		$MYR_mm8 = $row["MYR_mm8"];
		$MYR_mm9 = $row["MYR_mm9"];
		$MYR_mm10 = $row["MYR_mm10"];

		$MYR_ach1 = $row["MYR_ach1"];
		$MYR_ach2 = $row["MYR_ach2"];
		$MYR_ach3 = $row["MYR_ach3"];
		$MYR_ach4 = $row["MYR_ach4"];
		$MYR_ach5 = $row["MYR_ach5"];
		$MYR_ach6 = $row["MYR_ach6"];
		$MYR_ach7 = $row["MYR_ach7"];
		$MYR_ach8 = $row["MYR_ach8"];
		$MYR_ach9 = $row["MYR_ach9"];
		$MYR_ach10 = $row["MYR_ach10"];
		
		$MYR_rev1 = $row["MYR_rev1"];
		$MYR_rev2 = $row["MYR_rev2"];
		$MYR_rev3 = $row["MYR_rev3"];
		$MYR_rev4 = $row["MYR_rev4"];
		$MYR_rev5 = $row["MYR_rev5"];
		$MYR_rev6 = $row["MYR_rev6"];
		$MYR_rev7 = $row["MYR_rev7"];
		$MYR_rev8 = $row["MYR_rev8"];
		$MYR_rev9 = $row["MYR_rev9"];
		$MYR_rev10 = $row["MYR_rev10"];
		
		$YER_kpa1 = $row["YER_kpa1"];
		$YER_kpa2 = $row["YER_kpa2"];
		$YER_kpa3 = $row["YER_kpa3"];
		$YER_kpa4 = $row["YER_kpa4"];
		$YER_kpa5 = $row["YER_kpa5"];
		$YER_kpa6 = $row["YER_kpa6"];
		$YER_kpa7 = $row["YER_kpa7"];
		$YER_kpa8 = $row["YER_kpa8"];
		$YER_kpa9 = $row["YER_kpa9"];
		$YER_kpa10 = $row["YER_kpa10"];

		$YER_ind1 = $row["YER_ind1"];
		$YER_ind2 = $row["YER_ind2"];
		$YER_ind3 = $row["YER_ind3"];
		$YER_ind4 = $row["YER_ind4"];
		$YER_ind5 = $row["YER_ind5"];
		$YER_ind6 = $row["YER_ind6"];
		$YER_ind7 = $row["YER_ind7"];
		$YER_ind8 = $row["YER_ind8"];
		$YER_ind9 = $row["YER_ind9"];
		$YER_ind10 = $row["YER_ind10"];

		$YER_mm1 = $row["YER_mm1"];
		$YER_mm2 = $row["YER_mm2"];
		$YER_mm3 = $row["YER_mm3"];
		$YER_mm4 = $row["YER_mm4"];
		$YER_mm5 = $row["YER_mm5"];
		$YER_mm6 = $row["YER_mm6"];
		$YER_mm7 = $row["YER_mm7"];
		$YER_mm8 = $row["YER_mm8"];
		$YER_mm9 = $row["YER_mm9"];
		$YER_mm10 = $row["YER_mm10"];

		$YER_ach1 = $row["YER_ach1"];
		$YER_ach2 = $row["YER_ach2"];
		$YER_ach3 = $row["YER_ach3"];
		$YER_ach4 = $row["YER_ach4"];
		$YER_ach5 = $row["YER_ach5"];
		$YER_ach6 = $row["YER_ach6"];
		$YER_ach7 = $row["YER_ach7"];
		$YER_ach8 = $row["YER_ach8"];
		$YER_ach9 = $row["YER_ach9"];
		$YER_ach10 = $row["YER_ach10"];

		$YER_rev1 = $row["YER_rev1"];
		$YER_rev2 = $row["YER_rev2"];
		$YER_rev3 = $row["YER_rev3"];
		$YER_rev4 = $row["YER_rev4"];
		$YER_rev5 = $row["YER_rev5"];
		$YER_rev6 = $row["YER_rev6"];
		$YER_rev7 = $row["YER_rev7"];
		$YER_rev8 = $row["YER_rev8"];
		$YER_rev9 = $row["YER_rev9"];
		$YER_rev10 = $row["YER_rev10"];

		$YER_ma1 = $row["YER_ma1"];
		$YER_ma2 = $row["YER_ma2"];
		$YER_ma3 = $row["YER_ma3"];
		$YER_ma4 = $row["YER_ma4"];
		$YER_ma5 = $row["YER_ma5"];
		$YER_ma6 = $row["YER_ma6"];
		$YER_ma7 = $row["YER_ma7"];
		$YER_ma8 = $row["YER_ma8"];
		$YER_ma9 = $row["YER_ma9"];
		$YER_ma10 = $row["YER_ma10"];
		
		$p2c_1 = $row["p2c_1"];
	    $p2c_2 = $row["p2c_2"];
		$p2c_3 = $row["p2c_3"];
		$p2c_4 = $row["p2c_4"];
		$p2c_5 = $row["p2c_5"];
		$p2c_6 = $row["p2c_6"];
		$p2c_7 = $row["p2c_7"];
		$p2c_8 = $row["p2c_8"];
		$p2c_9 = $row["p2c_9"];

		$p3v_1= $row["p3v_1"];
		$p3v_2= $row["p3v_2"];
		$p3v_3= $row["p3v_3"];
		$p3v_4= $row["p3v_4"];
		$p3v_5= $row["p3v_5"];
		$p3v_6= $row["p3v_6"];
		$p3v_7= $row["p3v_7"];
		$p3v_8= $row["p3v_8"];
		$p3v_9= $row["p3v_9"];
		$p3v_10= $row["p3v_10"];
		
		$p4p_1= $row["p4p_1"];
		$p4p_2= $row["p4p_2"];
		$p4p_3= $row["p4p_3"];
		$p4p_4= $row["p4p_4"];
		$p4p_5= $row["p4p_5"];
		
		$ndIA= $row["ndIA"];
		$ndRA= $row["ndRA"];
		$cRA= $row["cRA"];
		$ndAA= $row["ndAA"];
		$cAA= $row["cAA"];
		$cop= $row["cop"];
		
		$total0= $row["total0"];
		$total1= $row["total1"];
		$total2= $row["total2"];
		$total3= $row["total3"];
		$totalsum= $row["totalsum"];
	}
	
	echo "<!DOCTYPE html>
	
	<html lang=\"en\">
		<title>Form Status</title>
		<head>
		
			<meta charset=\"utf-8\">
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			<!--<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">-->
			<style type=\"text/css\">
				#mainbody{
					font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
					margin: 0 auto;
					width: 75%;
				}
				.bg-1{
					background-color: #981a66;
					color: white;
				}
				.img-responsive{
					margin: 0 auto;
				}
				.pgpg114{
					padding-top: 50px;
					margin: 0 auto;
					width: 75%;
				}
			</style>
			
			<!-- Bootstrap -->
			<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
		</head>

		<body id=\"mainbody\">
			<img class =\"img-responsive\" src=\"ntc-logo.png\" i>
			<div class=\"container-fluid bg-1 text-center\">
				<h3 class=\"margin\"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
			</div>
			<div class=\"container-fluid text-center\">
         
				<section class=\"panel\">
					<div class=\"panel-body\">
						<div class=\"container-fluid text-center\">
							<h4 class=\"margin\"><b><u>Performance Appraisal form for executives in the level of E-0 to E-7</u></b></h4>
  
								<div class=\"panel-body\">
									<div class=\"form\">
										<div class=\"form-group \">
											<h4 class=\"margin\"><b><u>Personal Data(filled by Appraisee/HR Dept.):</u></b></h4>
										</div>
										
										<form id=\"formpg110\" class=\"form-validate form-horizontal\" method=\"post\" action=\"appsubmit1.php\">
										
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-2\">Name:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"text\" value=\"$Name\" readonly/>
												</div>
												<label  class=\"control-label col-lg-2\">Employee No.:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"text\" value=\"$ID\" readonly/>
												</div>
											</div>
    
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-2\">Designation:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"text\" value=\"$Designation\" readonly/>
												</div>
												<label  class=\"control-label col-lg-2\">Scale Of Pay:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"text\" value=\"$PayScale\" readonly/>
												</div>
											</div>
    
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-2\">Qualification:(Academic and Professional)</label>
												<div class=\"col-lg-10\">
													<input class=\"form-control \" type=\"text\" value=\"$Qualification\" readonly></input>
												</div>
											</div>
    
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-2\">Unit/Location:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"text\" value=\"$PlaceOfPosting\" readonly/>
												</div>
											  
												<label  class=\"control-label col-lg-2\">Date of Birth:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"date\" value=\"$DOB\" readonly/>
												</div>
											</div>
    
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-2\">Date Of Joining:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"date\" value=\"$DOJ\" readonly/>
												</div>
											  
												<label  class=\"control-label col-lg-2\">Date Of Retirement:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"date\" value=\"$DOR\" readonly/>
												</div>
											</div>
    
											<div class=\"form-group \">
												<label  class=\"control-label col-lg-4\">Date of filling the property return for the year:</label>
												<div class=\"col-lg-4\">
													<input class=\"form-control \" type=\"date\" value=\"$DOF\" readonly/>
												</div>
											</div><br>
    
											<h4>Past Positions Held:</h4><br>
											<div class=\"form-group\">
												<table class=\"table-bordered\" style=\"width:100%\">
													<tr>
														<th>FROM</th>
														<th>TO</th>
														<th>UNIT/LOCATION</th>
														<th>POSITION HELD</th>
														<th>KEY RESPONSIBILITIES</th>
													</tr>
													<tr>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_f1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_t1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_loc1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_pos1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_res1\" readonly/></td> 
													</tr>
													<tr>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_f2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_t2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_loc2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_pos2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_res2\" readonly/></td> 
													</tr>
													<tr>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_f3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_t3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_loc3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_pos3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_res3\" readonly/></td> 
													</tr>
													<tr>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_f4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_t4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_loc4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_pos4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$PPH_res4\" readonly/></td> 
													</tr>
												</table>
											</div>
											<hr>
   
   
											<h4 class=\"margin\"><bold><u>PART-1:PERFORMANCE</u></bold></h4>
											<h5 class=\"margin\"><bold><u>PERFORMANCE PLAN AND MID YEAR REVIEW</u></bold></h5>
											<p>Key performance Areas together with measure/indicators and max.marks to be jointly agreed upon between the Appraiser and Appraisee at the beginning of the review period and then filled in the format given below</p>
   
   
											<div class=\"form-group\">
												<table class=\"table-bordered\" style=\"width:100%\">
													<tr>
														<th rowspan=\"2\" class=\"text-center\">S.NO</th>
														<th colspan=\"2\" class=\"text-center\">PERFORMANCE PLAN</th>
														<th colspan=\"3\" class=\"text-center\">MID YEAR REVIEW</th>
													</tr>
													<tr>
														<th>KEY PERFORMANCE AREAS</th>
														<th>MEASURES/INDICATORS</th>
														<th>MAXIMUM MARKS(50)</th>
														<th>ACTUAL ACHIEVEMENT(GIVEN BY APPRAISEE)</th> 
														<th>REVIEW BY APPRAISER</th>
													</tr>
												
													<tr>
														<td>1</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev1\" readonly/></td> 
													</tr>
													<tr>
														<td>2</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev2\" readonly/></td> 
													</tr>
													<tr>
														<td>3</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev3\" readonly/></td> 
													</tr>
													<tr>
														<td>4</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev4\" readonly/></td> 
													</tr>
													<tr>
														<td>5</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev5\" readonly/></td> 
													</tr>
													<tr>
														<td>6</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev6\" readonly/></td> 
													</tr>
													<tr>
														<td>7</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev7\" readonly/></td> 
													</tr>
													<tr>
														<td>8</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev8\" readonly/></td> 
													</tr>
													<tr>
														<td>9</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev9\" readonly/></td> 
													</tr>
													<tr>
														<td>10</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$MYR_rev10\" readonly/></td> 
													</tr>												
												</table>
											</div>
											<hr>
    
											<h4 class=\"margin\"><bold><u>YEAR END PERFORMANCE REVIEW</u></bold></h4>
											<p>The KPAs and measures after incorporating changes, if required, will be recast from the previous page and year-end review will be carried out.</p>
     
											<div class=\"form-group\">
												<table class=\"table-bordered\" style=\"width:100%\">
													<tr>
														<th>S.NO.</th>
														<th>KEY PERFORMANCE AREAS</th>
														<th>MEASURES/INDICATORS</th>
														<th>MAXIMUM MARKS(50)</th>
														<th>ACTUAL ACHIEVEMENT(GIVEN BY APPRAISEE)</th> 
														<th>REVIEW BY APPRAISER</th>
														<th>MARKS AWARDED*</th>
													</tr>
													<tr>
														<td>1</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm1\" id=\"YER_mm1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach1\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev1\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma1\" id=\"YER_ma1\" readonly/></td>
													</tr>
													<tr>
														<td>2</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm2\" id=\"YER_mm2\" readonly /></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach2\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev2\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma2\" id=\"YER_ma2\" readonly /></td>
													</tr>
													<tr>
														<td>3</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm3\" id=\"YER_mm3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach3\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev3\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma3\" id=\"YER_ma3\" readonly/></td>
													</tr>
													<tr>
														<td>4</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm4\" id=\"YER_mm4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach4\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev4\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma4\" id=\"YER_ma4\" readonly/></td> 
													</tr>
													<tr>
														<td>5</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm5\" id=\"YER_mm5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach5\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev5\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma5\" id=\"YER_ma5\" readonly/></td>
													</tr>
													<tr>
														<td>6</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm6\" id=\"YER_mm6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach6\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev6\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma6\" id=\"YER_ma6\" readonly/></td>
													</tr>
													<tr>
														<td>7</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm7\" id=\"YER_mm7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach7\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev7\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma7\" id=\"YER_ma7\" readonly/></td>
													</tr>
													<tr>
														<td>8</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm8\" id=\"YER_mm8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach8\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev8\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma8\" id=\"YER_ma8\" readonly/></td>
													</tr>
													<tr>
														<td>9</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm9\" id=\"YER_mm9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach9\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev9\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma9\" id=\"YER_ma9\" readonly/></td>
													</tr>
													<tr>
														<td>10</td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm10\" id=\"YER_mm10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach10\" readonly/></td>
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_rev10\" readonly/></td> 
														<td><input type=\"text\" class=\"form-control\" value=\"$YER_ma10\" id=\"YER_ma10\" readonly/></td>
													</tr>
												</table>
											</div>";
?>
	
<?php
	
											echo "<div class = \"form-group\">
											<p>*The column 'marks awarded' will be filled only by the Appraiser</p>
										</div>
										<hr>
										
									</form>
									<br>
									 
								</div>
							</div>

							<h4 class=\"margin\"><u><b>INITIATING AUTHORITY SCORES</b></u></h4>
			<div class=\"form-group\">
				<h4><u>PART-2 COMPETENCIES:(This section consists of functional/technical and managerial competencies reuired for successful performance in the job)</u></h4>		
				<table class=\"table-bordered table-striped\" style=\"width:100%\">
					<tr>
						<th class=\"text-center\">Serial No.</th>
						<th class=\"text-center\">COMPETENCIES</th>
						<th class=\"text-center\">RATINGS (1-5)</th>
					</tr>
					<tr>
						<td>1.</td>
						<td><b>Business Environment Knowledge</b> : Knowledge and understanding of economic, legal, socio-political trends</td>
						<td><input id=\"p2c_1\"  type=\"text\" class=\"form-control\" name=\"p2c_1\" value=\"$p2c_1\" readonly/></td>
					</tr>
					<tr>
						<td>2.</td>
						<td><b>Profession Specific Knowledge</b> : knowledge related to profession as a whole. Knowledge which is determined by authority and responsibility of other positions; knowledge of mission, values and standard operating procedures, policies</td>
						<td><input id = \"p2c_2\" type=\"text\" class=\"form-control\" name=\"p2c_2\" value=\"$p2c_2\" readonly></td>
					</tr>
					<tr>
						<td>3.</td>
						<td><b>Making Business Decisions</b> : *Use business related data to support effective and timely business decisions by systematically *gathering relevant business information *identifying the strengths and weaknesses of a particular business line *recognising opportunities or threats and acting on them rapidly *using business facts collected in daily decision making</td>
						<td><input id = \"p2c_3\" type=\"text\" class=\"form-control\" name=\"p2c_3\" value=\"$p2c_3\" readonly></td>
					</tr>
					<tr>
						<td>4.</td>
						<td><b>Vision</b> : Develop a vision for the future of the Organisation by, grasping the meaning of trends and inter-relationships between the Organisation and its environment at the local, national and international level; identifying fundamental values and beliefs to guide the Organisation into future</td>
						<td><input id = \"p2c_4\" type=\"text\" class=\"form-control\" name=\"p2c_4\" value=\"$p2c_4\" readonly></td>
					</tr>
					<tr>
						<td>5.</td>
						<td><b>Systematic Thinking</b> : Identifying connections between situations that are not obviously related, using common senses, past experiences and basic rules to identify key underlying issues, generating and testing hunched which may explain complex situations and problems</td>
						<td><input id = \"p2c_5\" type=\"text\" class=\"form-control\" name=\"p2c_5\" value=\"$p2c_5\" readonly></td>
					</tr>
					<tr>
						<td>6.</td>
						<td><b>Networking</b> : To cultivate and informal network which may help to get things done through, developing contacts with people outside of the immediate work unit, using network as source of information and support</td>
						<td><input readonly id = \"p2c_6\" type=\"text\" class=\"form-control\" name=\"p2c_6\" value=\"$p2c_6\" readonly></td>
					</tr>
					<tr>
						<td>7.</td>
						<td><b>Organising resources</b> : Ensure that all financial, personnel  and/or other resources are in place to meet needs by, identifying and acquiring the resources allocating and utilizing the resources in a timely and cost effective way, monitoring and controlling all resources required to maintain the efficiency of operations</td>
						<td><input id = \"p2c_7\" type=\"text\" class=\"form-control\" name=\"p2c_7\" value=\"$p2c_7\" readonly></td>
					</tr>
					<tr>
						<td>8.</td>
						<td><b>Inspire people</b> : To generate a sense of purpose for the work done by the organisation through instilling enthusiasm, loyalty and commitment among team member at  all levels of the organisation, inspiring, motivating and guiding others towards organisational goals and objectives, setting an example for others by behaving in ways that are consistent with espoused beliefs and values and the organisations vision and direction</td>
						<td><input id = \"p2c_8\" type=\"text\" class=\"form-control\" name=\"p2c_8\" value=\"$p2c_8\" readonly></td>
					</tr>
					<tr>
						<td>9.</td>
						<td><b>Team Player</b> : To contribute to group objectives in a environment through, cooperating and interacting with others, contributing actively and fully to team projects, working cooperatively as opposed to competitively with others, acknowledging diverse opinions, addressing relevant concerns and working towards consensual solutions that enhance the output of the team</td>
						<td><input id = \"p2c_9\" type=\"text\" class=\"form-control\" name=\"p2c_9\" value=\"$p2c_9\" readonly></td>
					</tr>
				</table>
				<br>

				<hr>
				<br><br><br>
       
				<h4><u>PART-3 VALUES:(This section consists of values which are to be demonstrated in day to day activities.)</u></h4>
				<table class=\"table-bordered table-striped\" style=\"width:100%\">
					<tr>
						<th class=\"text-center\">Serial No.</th>
						<th class=\"text-center\">VALUES</th>
						<th class=\"text-center\">RATINGS (1-5)</th>
					</tr>
					<tr>
						<td>1.</td>
						<td><b>Fairness</b> : Decisions are made objectively, free from patronage and reflect the just treatment of employees and applicants.</td>
						<td><input value=\"$p3v_1\" readonly id = \"p3v_1\" type=\"text\" class=\"form-control\" name = \"p3v_1\" readonly/></td>
					</tr>
					<tr>
						<td>2.</td>
						<td><b>Transparency</b> : There is open communication about every aspect of managerial decisions which concern people</td>
						<td><input value=\"$p3v_2\" readonly id = \"p3v_2\" type=\"text\" class=\"form-control\" name = \"p3v_2\" readonly/></td>
					</tr>
					<tr>
						<td>3.</td>
						<td><b>Trust</b> : *Trustworthiness leading to confidence *Allow staff the freedom to grow and develop *Relate to others on basis of mutual respect *Courage to stand by your convictions</td>
						<td><input value=\"$p3v_3\" readonly id = \"p3v_3\" type=\"text\" class=\"form-control\" name = \"p3v_3\" readonly/></td>
					</tr>
					<tr>
						<td>4.</td>
						<td><b>Candour</b> : *Frank and forthright *Give and receive constructive criticism/suggestions *Openly discuss performance deficiencies and take corrective action *Appreciate good performance *Be consistent in words and deeds *Face up to your mistakes</td>
						<td><input value=\"$p3v_4\" readonly id = \"p3v_4\" type=\"text\" class=\"form-control\" name = \"p3v_4\" readonly/></td>
					</tr>
					<tr>
						<td>5.</td>
						<td><b>Collaboration</b> : *Working in tandem *Be open in sharing information and in seeking suggestions/opinion *Be sensitive to concerns of others, honour your commitment *Encourage team work across departments/functions</td>
						<td><input value=\"$p3v_5\" readonly id = \"p3v_5\" type=\"text\" class=\"form-control\" name = \"p3v_5\" readonly/></td>
					</tr>
					<tr>
						<td>6.</td>
						<td><b>Involvement</b> : Total commitment; be dedicated and committed to work, build commitment by encouraging wide participation in decision making process to the maximum extent possible.</td>
						<td><input value=\"$p3v_6\" readonly id = \"p3v_6\" type=\"text\" class=\"form-control\" name = \"p3v_6\" readonly/></td>
					</tr>
					<tr>
						<td>7.</td>
						<td><b>Flexibility</b> : *Ability to participate and adapt to changing circumstances using sound judgement *Be open to accepting new ideas *Be willing to learn from anyone and to do things differently *Be prepared to operate and adapt to different environments</td>
						<td><input value=\"$p3v_7\" readonly id = \"p3v_7\" type=\"text\" class=\"form-control\" name = \"p3v_7\" readonly/></td>
					</tr>
					<tr>
						<td>8.</td>
						<td><b>Willingness</b> : *As to accept challenge *Be willing to experiment *Allow for freedom to fail, but learn from it too</td>
						<td><input value=\"$p3v_8\" readonly id = \"p3v_8\" type=\"text\" class=\"form-control\" name = \"p3v_8\" readonly/></td>
					</tr>
					<tr>
						<td>9.</td>
						<td><b>Discipline</b> : *Adherence to accept norms *Honour the promises, and adhere to agreed system *Respect for others time and space *Exercise self control</td>
						<td><input value=\"$p3v_9\" readonly id = \"p3v_9\" type=\"text\" class=\"form-control\" name = \"p3v_9\" readonly/></td>
					</tr>
					<tr>
						<td>10.</td>
						<td><b>Ethical behaviour</b> : *Demonstrate honestly and sincerity in every action *Apply sound business and professional ethics *Shows consistency with principles, values and behaviours</td>
						<td><input value=\"$p3v_10\" readonly id = \"p3v_10\" type=\"text\" class=\"form-control\" readonly/></td>
					</tr>
				</table>
				<br>
				
				<hr>
				<br><br><br>
				<h4><u>PART-4 POTENTIAL APPRAISAL:(The section consists of attributes which are to be demonstrated in day to day activities. Attributes would represent the core values required for Board level postions.)</u></h4>
				<table class=\"table-bordered table-striped\" style=\"width:100%\">
					<tr>
						<th class=\"text-center\">Serial No.</th>
						<th class=\"text-center\">GENERIC ATTRIBUTE</th>
						<th class=\"text-center\">RATINGS (1-5)</th>
					</tr>
					<tr>
						<td>1.</td>
						<td><b>Leadership Abilities</b> : *Demonstrates ability for guiding collective decision making *Demonstrates ability for succession planning *Demonstrates ability for crisis management *Demonstrates ability to take risks</td>
						<td><input value=\"$p4p_1\" readonly id = \"p4p_1\" type=\"text\" class=\"form-control\" name=\"p4p_1\" readonly></td>
					</tr>
					<tr>
						<td>2.</td>
						<td><b>Team building</b> : *Demonstrates effectiveness in reorganizing his/her own department *Manage diverse and divergent views and group processes without losing sight of objectives</td>
						<td><input value=\"$p4p_2\" readonly id = \"p4p_2\" type=\"text\" class=\"form-control\" name=\"p4p_2\" readonly></td>
					</tr>
					<tr>
						<td>3.</td>
						<td><b>Ability to build a strategic vision</b> : *Demonstrates change to management change *Focus on long term issues *Strategic thinking *Translates visions into goals</td>
						<td><input value=\"$p4p_3\" readonly id = \"p4p_3\" type=\"text\" class=\"form-control\" name=\"p4p_3\" readonly></td>
					</tr>
					<tr>
						<td>4.</td>
						<td><b>Business sense</b> : *Commitment to bottom line results by enhancing revenue generation by addressing interest of customers and stakeholders *Balancing need for viable short and long term performance *Optimizing unit / organizations contribution while supporting corporate objectives *Spotting and pursuing new business opportunities wherever possible</td>
						<td><input value=\"$p4p_4\" readonly id = \"p4p_4\" type=\"text\" class=\"form-control\" name=\"p4p_4\" readonly></td>
					</tr>
					<tr>
						<td>5.</td>
						<td><b>Communication skills</b> : *Communicate ideas and information effectively and market key points effectively through public speaking and presentation *Ability to convert ideas through action plan and ensure acceptability within the organization and performance at Board meetings</td>
						<td><input value=\"$p4p_5\" id = \"p4p_5\" type=\"text\" class=\"form-control\" name=\"p4p_5\" readonly></td>
					</tr>
				</table>
				<br>
				
				<hr>
				<br><br><br>
				<p><h4><b><u>INTEGRITY(choose any one of the below)</u></b></h4></p>
				<div class=\"container-fluid  text-center\">
					<input type=\"radio\" name=\"Integrity\" >  Beyond doubt.<br><br>
					<input type=\"radio\" name=\"Integrity\" >  Integrity of the officer is doubtful.A separate secret note is attached.<br><br>
					<input type=\"radio\" name=\"Integrity\" >  Nothing adverse has been received about the Officer.
				</div>
				<br><br>
				
				<h4><b><u>PERFORMANCE AND POTENTIAL PROFILE</u></b></h4><br>
				<h5>FINAL MARKS SCORED</h5>
      
				<div>
					<table class=\"table-bordered\" style=\"width:100%\">
						<tr>
							<th></th>
							<th></th>
							<th class=\"text-center\">TOTAL MARKS</th>
							<th class=\"text-center\">MARKS SCORED</th>
						</tr>
						<tr>
							<td><b>PART I</b></td>
							<td><b>PERFORMANCE</b></td>
							<td><b>50</b></td>
							<td><label id=\"displayTotal0\">$total0</td>
						</tr>
						<tr>
							<td><b>PART II</b></td>
							<td><b>COMPETENCIES</b></td>
							<td><b>20</b></td>
							<td><label id=\"displayTotal1\">$total1</td>
						</tr>
						<tr>
							<td><b>PART III</b></td>
							<td><b>VALUES</b></td>
							<td><b>15</b></td>
							<td><label id=\"displayTotal2\" >$total2</td>
						</tr>
						<tr>
							<td><b>PART IV</b></td>
							<td><b>POTENTIAL</b></td>
							<td><b>15</b></td>
							<td><label id=\"displayTotal3\">$total3</td>
						</tr>
						<tr>
							<td></td>
							<td><b>TOTAL</b></td>
							<td><b>100</b></td>
							<td><label id=\"totalsum\">$totalsum</td>
						</tr>
					</table>
					<br><br>
				</div>
      
				<br><br>
    
				<form id=\"formpg114\" class=\"form-validate form-horizontal\">
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">NAME & DESIGNATION OF INITIATING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input class=\"form-control \" name=\"ndIA\" type=\"text\" value=\"$ndIA \" readonly/>
						</div>
					</div>
					<br>
					
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">COMMENTS OF INITIATING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input value=\"$cop\" readonly class=\"form-control \" type=\"text\" />
						</div>
					</div>
					<br><br>
					
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">NAME & DESIGNATION OF REVIEWING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input class=\"form-control \" name=\"ndRA\" type=\"text\" value=\"$ndRA \" readonly/>
						</div>
					</div>
					<br>
				
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">COMMENTS OF REVIEWING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input value=\"$cRA\" readonly class=\"form-control \" type=\"text\" />
						</div>
					</div>
					<br><br>
				
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">NAME & DESIGNATION OF ACCEPTING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input class=\"form-control \" name=\"ndAA\" type=\"text\" value=\"$ndAA \" readonly/>
						</div>
					</div>
					<br>
				
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-3\">COMMENTS OF ACCEPTING AUTHORITY</label>
						<div class=\"col-lg-9\">
							<input value=\"$cAA\" readonly class=\"form-control \" type=\"text\" />
						</div>
					</div>
				</form>
				<br><br><hr>
				
				<table class=\"table-bordered\" style=\"width:100%\" centre>
					<tr>
						<th>S.NO</th>
						<th>MARKS</th>
						<th>GRADE</th>
					</tr>
					<tr>
						<td>1.</td>
						<td>81-100</td>
						<td>OUTSTANDING</td>
					</tr>
					<tr>
						<td>2.</td>
						<td>61-80</td>
						<td>VERY GOOD</td>
					</tr>
					<tr>
						<td>3.</td>
						<td>41-60</td>
						<td>GOOD</td>
					</tr>
					<tr>
						<td>4.</td>
						<td>21-40</td>
						<td>AVERAGE</td>
					</tr>
					<tr>
						<td>5.</td>
						<td>0-20</td>
						<td>POOR</td>
					</tr>	
				</table>
				</div>
			</div>
		</div>
		</section>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src=\"js/bootstrap.min.js\"></script>
	</body>
</html>";
?>