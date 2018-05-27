<?php
	session_start();
	if(empty($_SESSION["ID"])&&empty($_SESSION["IDhr"])){
		header("location:login.php");
	}
?>

<?php
	// define variables and set to empty values
	//$link = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["FormId"] = test_input($_POST["qid"]);
	}
	
	function test_input($data){
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
	
	$q=$_SESSION["FormId"];
	$sql = "SELECT * FROM application WHERE ID ='$q'";
    $result = $conn->query($sql);
	
	while($row = mysqli_fetch_array($result)){

		$Name = $row["Name"];
		$ID = $row["ID"];
		$Designation  = $row["Designation"];
		$PayScale = $row["PayScale"];
		$Qualification= $row["Qualification"];
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
	}
	
	$ioff = $_SESSION["ID"];
	$sql2 = "SELECT * FROM employee WHERE ID ='$ioff'";
    $result2 = $conn->query($sql2);
	while($row2 = mysqli_fetch_array($result2)){

		$iName = $row2["Name"];
		$iID = $row2["ID"];
		$iDesignation  = $row2["Designation"];
		$iDepartment  = $row2["Department"];
	}
	
	echo "<!DOCTYPE html>

	<html lang=\"en\">
		<title>Intitiating Officer Score</title>
		<head>
			<script >
				var total0;
				var total1;
				var total2;
				var total3;
				var totalsum;

				function TP(){
					
					var tma=0;
					var tmm=0;
					if((parseInt(document.getElementById(\"YER_mm1\").value)!==0))
					    tma =tma + parseInt(document.getElementById(\"YER_ma1\").value);
				    if((parseInt(document.getElementById(\"YER_mm2\").value)!==0))
					    tma =tma+parseInt(document.getElementById(\"YER_ma2\").value);
				    if((parseInt(document.getElementById(\"YER_mm3\").value)!==0))
					    tma =tma+parseInt(document.getElementById(\"YER_ma3\").value);
				    if((parseInt(document.getElementById(\"YER_mm4\").value)!==0))
					    tma =tma+parseInt(document.getElementById(\"YER_ma4\").value);
	    			if((parseInt(document.getElementById(\"YER_mm5\").value)!==0))
		    			tma =tma+parseInt(document.getElementById(\"YER_ma5\").value);
			    	if((parseInt(document.getElementById(\"YER_mm6\").value)!==0))
				    	tma =tma+parseInt(document.getElementById(\"YER_ma6\").value);
				    if((parseInt(document.getElementById(\"YER_mm7\").value)!==0))
					    tma =tma+parseInt(document.getElementById(\"YER_ma7\").value);
	    			if((parseInt(document.getElementById(\"YER_mm8\").value)!==0))
		    			tma =tma+parseInt(document.getElementById(\"YER_ma8\").value);
			    	if((parseInt(document.getElementById(\"YER_mm9\").value)!==0))
				    	tma =tma+parseInt(document.getElementById(\"YER_ma9\").value);
    				if((parseInt(document.getElementById(\"YER_mm10\").value)!==0))
	    				tma =tma+parseInt(document.getElementById(\"YER_ma10\").value);
			  
					tmm = parseInt(document.getElementById(\"YER_mm1\").value)+parseInt(document.getElementById(\"YER_mm2\").value)+parseInt(document.getElementById(\"YER_mm3\").value)+parseInt(document.getElementById(\"YER_mm4\").value)+parseInt(document.getElementById(\"YER_mm5\").value)+parseInt(document.getElementById(\"YER_mm6\").value)+parseInt(document.getElementById(\"YER_mm7\").value)+parseInt(document.getElementById(\"YER_mm8\").value)+parseInt(document.getElementById(\"YER_mm9\").value)+parseInt(document.getElementById(\"YER_mm10\").value);
			        
					if(tmm===0)
						total0=0;
					else
					    total0=tma*50/tmm;
					document.getElementById(\"demo0\").innerHTML = tma*50/tmm;
					$.post('submitformi.php', {total0: total0});
				}
				
				function TC(){
					var tc=0;
					tc= tc + parseInt(document.getElementById(\"p2c_1\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_2\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_3\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_4\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_5\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_6\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_7\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_8\").value);
					tc= tc + parseInt(document.getElementById(\"p2c_9\").value);
					
					total1=tc*20/45;
					document.getElementById(\"demo1\").innerHTML = total1;
					$.post('submitformi.php', {total1: total1});
				}
		  
				function TV(){
					var tv=0;
					tv= tv + parseInt(document.getElementById(\"p3v_1\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_2\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_3\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_4\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_5\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_6\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_7\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_8\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_9\").value);
					tv= tv + parseInt(document.getElementById(\"p3v_10\").value);
			
					total2=tv*15/50
					document.getElementById(\"demo2\").innerHTML = total2;
					$.post('submitformi.php', {total2: total2});
				}

				function TGA(){
					var tga=0;
					tga= tga+parseInt(document.getElementById(\"p4p_1\").value);
					tga= tga+parseInt(document.getElementById(\"p4p_2\").value);
					tga= tga+parseInt(document.getElementById(\"p4p_3\").value);
					tga= tga+parseInt(document.getElementById(\"p4p_4\").value);
					tga= tga+parseInt(document.getElementById(\"p4p_5\").value);

					total3=tga*15/25
					document.getElementById(\"demo3\").innerHTML = total3;
					$.post('submitformi.php', {total3: total3});
				}

				function totalsum(){
					totalsum = total0+total1+total2+total3;
					document.getElementById(\"totalsum\").innerHTML = totalsum;
					displayTotal0();
					displayTotal1();
					displayTotal2();
					displayTotal3();
					$.post('submitformi.php', {totalsum: totalsum});
				}

				function displayTotal0(){
					document.getElementById(\"displayTotal0\").innerHTML = total0;
				}

				function displayTotal1(){
					document.getElementById(\"displayTotal1\").innerHTML = total1;
				}

				function displayTotal2(){
					document.getElementById(\"displayTotal2\").innerHTML = total2;
				}

				function displayTotal3(){
					document.getElementById(\"displayTotal3\").innerHTML = total3;
				}
				
				function myFunction_C() {
					flag = 0;
					if (parseInt(document.getElementById(\"p2c_1\").value)>5 || parseInt(document.getElementById(\"p2c_1\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_2\").value)>5 || parseInt(document.getElementById(\"p2c_2\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_3\").value)>5 || parseInt(document.getElementById(\"p2c_3\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_4\").value)>5 || parseInt(document.getElementById(\"p2c_4\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_5\").value)>5 || parseInt(document.getElementById(\"p2c_5\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_6\").value)>5 || parseInt(document.getElementById(\"p2c_6\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_7\").value)>5 || parseInt(document.getElementById(\"p2c_7\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_8\").value)>5 || parseInt(document.getElementById(\"p2c_8\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p2c_9\").value)>5 || parseInt(document.getElementById(\"p2c_9\").value)<0)
						flag = 1;

					if(flag===0){
						if(document.getElementById(\"demoC\").innerHTML === \"Value should be between 1 and 5\"){
							document.getElementById(\"demoC\").innerHTML = \" \";
							TC();
						}
						else
							TC();
					}
					else{
						document.getElementById(\"demoC\").innerHTML = \"Value should be between 1 and 5\";
						flag=0;
					}  
				}

				function myFunction_V() {
					flag = 0;
					if (parseInt(document.getElementById(\"p3v_1\").value)>5 || parseInt(document.getElementById(\"p3v_1\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_2\").value)>5 || parseInt(document.getElementById(\"p3v_2\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_3\").value)>5 || parseInt(document.getElementById(\"p3v_3\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_4\").value)>5 || parseInt(document.getElementById(\"p3v_4\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_5\").value)>5 || parseInt(document.getElementById(\"p3v_5\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_6\").value)>5 || parseInt(document.getElementById(\"p3v_6\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_7\").value)>5 || parseInt(document.getElementById(\"p3v_7\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_8\").value)>5 || parseInt(document.getElementById(\"p3v_8\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_9\").value)>5 || parseInt(document.getElementById(\"p3v_9\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p3v_10\").value)>5 || parseInt(document.getElementById(\"p3v_10\").value)<0)
						flag = 1;

					if(flag===0){
						if(document.getElementById(\"demoV\").innerHTML === \"Value should be between 1 and 5\"){
							document.getElementById(\"demoV\").innerHTML = \" \";
							TV();
						}
						else
							TV();
					}
					else{
						document.getElementById(\"demoV\").innerHTML = \"Value should be between 1 and 5\";
						flag=0;
					}  
			
				}

				function myFunction_P() {
					flag = 0;
					if (parseInt(document.getElementById(\"p4p_1\").value)>5 || parseInt(document.getElementById(\"p4p_1\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p4p_2\").value)>5 || parseInt(document.getElementById(\"p4p_2\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p4p_3\").value)>5 || parseInt(document.getElementById(\"p4p_3\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p4p_4\").value)>5 || parseInt(document.getElementById(\"p4p_4\").value)<0)
						flag = 1;
					if (parseInt(document.getElementById(\"p4p_5\").value)>5 || parseInt(document.getElementById(\"p4p_5\").value)<0)
						flag = 1;

					if(flag===0){
						if(document.getElementById(\"demoP\").innerHTML === \"Value should be between 1 and 5\"){
							document.getElementById(\"demoP\").innerHTML = \" \";
							TGA();
						}
						else
							TGA();
					}
					else{
						document.getElementById(\"demoP\").innerHTML = \"Value should be between 1 and 5\";
						flag=0;
					}  
				}
				
				function confirmsubmission() {
					if (confirm(\"Do you really want to submit!\") == true) {
						var element = document.getElementById(\"fullformi\"); 
						element.setAttribute(\"action\", \"submitformi.php\");
					} else {
						var element = document.getElementById(\"fullformi\"); 
						element.setAttribute(\"action\", \"initiating.php\");
					}
				}

			</script>
	
	
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
    
								<form id=\"fullformi\" class=\"form-validate form-horizontal\" method=\"post\" action=\"submitformi.php\">
    
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
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev1\" /></td>
										</tr>
										<tr>
											<td>2</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev2\" /></td> 
										</tr>
										<tr>
											<td>3</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev3\" /></td> 
										</tr>
										<tr>
											<td>4</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev4\" /></td> 
										</tr>
										<tr>
											<td>5</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev5\" /></td> 
										</tr>
										<tr>
											<td>6</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev6\" /></td> 
										</tr>
										 <tr>
											<td>7</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev7\" /></td>
										</tr>
										<tr>
											<td>8</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev8\" /></td>
										</tr>
										<tr>
											<td>9</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev9\" /></td>
										</tr>
										<tr>
											<td>10</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_kpa10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ind10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_mm10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$MYR_ach10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"MYR_rev10\" /></td>
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
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm1\" id=\"YER_mm1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach1\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev1\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma1\" id=\"YER_ma1\" /></td>
										</tr>
										<tr>
											<td>2</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm2\" id=\"YER_mm2\" disabled /></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach2\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev2\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma2\" id=\"YER_ma2\" /></td>
										</tr>
										<tr>
											<td>3</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm3\" id=\"YER_mm3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach3\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev3\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma3\" id=\"YER_ma3\" /></td>
										</tr>
										<tr>
											<td>4</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm4\" id=\"YER_mm4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach4\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev4\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma4\" id=\"YER_ma4\" /></td> 
										</tr>
										<tr>
											<td>5</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm5\" id=\"YER_mm5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach5\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev5\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma5\" id=\"YER_ma5\" /></td>
										</tr>
										<tr>
											<td>6</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm6\" id=\"YER_mm6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach6\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev6\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma6\" id=\"YER_ma6\" /></td>
										</tr>
										<tr>
											<td>7</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm7\" id=\"YER_mm7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach7\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev7\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma7\" id=\"YER_ma7\" /></td>
										</tr>
										<tr>
											<td>8</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm8\" id=\"YER_mm8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach8\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev8\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma8\" id=\"YER_ma8\" /></td>
										</tr>
										<tr>
											<td>9</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm9\" id=\"YER_mm9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach9\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev9\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma9\" id=\"YER_ma9\" /></td>
										</tr>
										<tr>
											<td>10</td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_kpa10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ind10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_mm10\" id=\"YER_mm10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" value=\"$YER_ach10\" disabled/></td>
											<td><input type=\"text\" class=\"form-control\" name=\"YER_rev10\" /></td> 
											<td><input type=\"text\" class=\"form-control\" name=\"YER_ma10\" id=\"YER_ma10\" /></td>
										</tr>
									</table>
								</div>";
?>
	
								<div class="form-group">
									<p>*The column 'marks awarded' will be filled only by the Appraiser</p>
								</div>
								<hr>

								<label  class="control-label col-lg-6">Total Performance marks for the year(Proforate total marks of 50) = (Total marks obtained) * 50 / (Total maximum marks) </label>
								<div class="col-lg-6">
									<label id="demo0" width="30%" ></label> <button  type="button" class="btn btn-default btn-primary" onclick="TP()">Generate Total</button>
								</div>
								 
							</div>
						</div>

						<h4 class="margin"><u><b>INITIATING AUTHORITY SCORES</b></u></h4>
						<div class="form-group">
							<h4><u>PART-2 COMPETENCIES:(This section consists of functional/technical and managerial competencies reuired for successful performance in the job)</u></h4>		
							<table class="table-bordered table-striped" style="width:100%">
								<tr>
									<th class="text-center">Serial No.</th>
									<th class="text-center">COMPETENCIES</th>
									<th class="text-center">RATINGS (1-5)</th>
								</tr>
								<tr>
									<td>1.</td>
									<td><b>Business Environment Knowledge</b> : Knowledge and understanding of economic, legal, socio-political trends</td>
									<td><input required id="p2c_1"  type="text" class="form-control" name="p2c_1" /></td>
								</tr>
								<tr>
									<td>2.</td>
									<td><b>Profession Specific Knowledge</b> : knowledge related to profession as a whole. Knowledge which is determined by authority and responsibility of other positions; knowledge of mission, values and standard operating procedures, policies</td>
									<td><input required id = "p2c_2" type="text" class="form-control" name="p2c_2"></td>
								</tr>
								<tr>
									<td>3.</td>
									<td><b>Making Business Decisions</b> : *Use business related data to support effective and timely business decisions by systematically *gathering relevant business information *identifying the strengths and weaknesses of a particular business line *recognising opportunities or threats and acting on them rapidly *using business facts collected in daily decision making</td>
									<td><input required id = "p2c_3" type="text" class="form-control" name="p2c_3"></td>
								</tr>
								<tr>
									<td>4.</td>
									<td><b>Vision</b> : Develop a vision for the future of the Organisation by, grasping the meaning of trends and inter-relationships between the Organisation and its environment at the local, national and international level; identifying fundamental values and beliefs to guide the Organisation into future</td>
									<td><input required id = "p2c_4" type="text" class="form-control" name="p2c_4"></td>
								</tr>
								<tr>
									<td>5.</td>
									<td><b>Systematic Thinking</b> : Identifying connections between situations that are not obviously related, using common senses, past experiences and basic rules to identify key underlying issues, generating and testing hunched which may explain complex situations and problems</td>
									<td><input required id = "p2c_5" type="text" class="form-control" name="p2c_5"></td>
								</tr>
								<tr>
									<td>6.</td>
									<td><b>Networking</b> : To cultivate and informal network which may help to get things done through, developing contacts with people outside of the immediate work unit, using network as source of information and support</td>
									<td><input required id = "p2c_6" type="text" class="form-control" name="p2c_6"></td>
								</tr>
								<tr>
									<td>7.</td>
									<td><b>Organising resources</b> : Ensure that all financial, personnel  and/or other resources are in place to meet needs by, identifying and acquiring the resources allocating and utilizing the resources in a timely and cost effective way, monitoring and controlling all resources required to maintain the efficiency of operations</td>
									<td><input required id = "p2c_7" type="text" class="form-control" name="p2c_7"></td>
								</tr>
								<tr>
									<td>8.</td>
									<td><b>Inspire people</b> : To generate a sense of purpose for the work done by the organisation through instilling enthusiasm, loyalty and commitment among team member at  all levels of the organisation, inspiring, motivating and guiding others towards organisational goals and objectives, setting an example for others by behaving in ways that are consistent with espoused beliefs and values and the organisations vision and direction</td>
									<td><input required id = "p2c_8" type="text" class="form-control" name="p2c_8"></td>
								</tr>
								<tr>
									<td>9.</td>
									<td><b>Team Player</b> : To contribute to group objectives in a environment through, cooperating and interacting with others, contributing actively and fully to team projects, working cooperatively as opposed to competitively with others, acknowledging diverse opinions, addressing relevant concerns and working towards consensual solutions that enhance the output of the team</td>
									<td><input required id = "p2c_9" type="text" class="form-control" name="p2c_9"></td>
								</tr>
							</table>

							<br>
							<label  class="control-label col-lg-6">Rating of competencies=((Total of all attributes)*20/45):</label>
							<div class="col-lg-6">
								<label id="demo1"></label>
								<input type="button" class="btn btn-default btn-primary" onclick="myFunction_C()" value="Generate Total" />
								<p id="demoC"></p>
							</div>
							<hr>
							<br><br><br>
       
							<h4><u>PART-3 VALUES:(This section consists of values which are to be demonstrated in day to day activities.)</u></h4>
							<table class="table-bordered table-striped" style="width:100%">
								<tr>
									<th class="text-center">Serial No.</th>
									<th class="text-center">VALUES</th>
									<th class="text-center">RATINGS (1-5)</th>
								</tr>
								<tr>
									<td>1.</td>
									<td><b>Fairness</b> : Decisions are made objectively, free from patronage and reflect the just treatment of employees and applicants.</td>
									<td><input required id = "p3v_1" type="text" class="form-control" name = "p3v_1"/></td>
								</tr>
								<tr>
									<td>2.</td>
									<td><b>Transparency</b> : There is open communication about every aspect of managerial decisions which concern people</td>
									<td><input required id = "p3v_2" type="text" class="form-control" name = "p3v_2"/></td>
								</tr>
								<tr>
									<td>3.</td>
									<td><b>Trust</b> : *Trustworthiness leading to confidence *Allow staff the freedom to grow and develop *Relate to others on basis of mutual respect *Courage to stand by your convictions</td>
									<td><input required id = "p3v_3" type="text" class="form-control" name = "p3v_3"/></td>
								</tr>
								<tr>
									<td>4.</td>
									<td><b>Candour</b> : *Frank and forthright *Give and receive constructive criticism/suggestions *Openly discuss performance deficiencies and take corrective action *Appreciate good performance *Be consistent in words and deeds *Face up to your mistakes</td>
									<td><input required id = "p3v_4" type="text" class="form-control" name = "p3v_4"/></td>
								</tr>
								<tr>
									<td>5.</td>
									<td><b>Collaboration</b> : *Working in tandem *Be open in sharing information and in seeking suggestions/opinion *Be sensitive to concerns of others, honour your commitment *Encourage team work across departments/functions</td>
									<td><input required id = "p3v_5" type="text" class="form-control" name = "p3v_5"/></td>
								</tr>
								<tr>
									<td>6.</td>
									<td><b>Involvement</b> : Total commitment; be dedicated and committed to work, build commitment by encouraging wide participation in decision making process to the maximum extent possible.</td>
									<td><input required id = "p3v_6" type="text" class="form-control" name = "p3v_6"/></td>
								</tr>
								<tr>
									<td>7.</td>
									<td><b>Flexibility</b> : *Ability to participate and adapt to changing circumstances using sound judgement *Be open to accepting new ideas *Be willing to learn from anyone and to do things differently *Be prepared to operate and adapt to different environments</td>
									<td><input required id = "p3v_7" type="text" class="form-control" name = "p3v_7"/></td>
								</tr>
								<tr>
									<td>8.</td>
									<td><b>Willingness</b> : *As to accept challenge *Be willing to experiment *Allow for freedom to fail, but learn from it too</td>
									<td><input required id = "p3v_8" type="text" class="form-control" name = "p3v_8"/></td>
								</tr>
								<tr>
									<td>9.</td>
									<td><b>Discipline</b> : *Adherence to accept norms *Honour the promises, and adhere to agreed system *Respect for others time and space *Exercise self control</td>
									<td><input required id = "p3v_9" type="text" class="form-control" name = "p3v_9"/></td>
								</tr>
								<tr>
									<td>10.</td>
									<td><b>Ethical behaviour</b> : *Demonstrate honestly and sincerity in every action *Apply sound business and professional ethics *Shows consistency with principles, values and behaviours</td>
									<td><input required id = "p3v_10" type="text" class="form-control" name = "p3v_10"/></td>
								</tr>
							</table>
							<br>
							<label  class="control-label col-lg-6">Rating of values=((Total of all attributes)*15/50):</label>
							<div class="col-lg-6">
								<label id="demo2"></label>
								<input type="button" class="btn btn-default btn-primary" onclick="myFunction_V()" value="Generate Total" />
								<p id="demoV"></p>
							</div>
							<hr>
							<br><br><br>
							
							<h4><u>PART-4 POTENTIAL APPRAISAL:(The section consists of attributes which are to be demonstrated in day to day activities. Attributes would represent the core values required for Board level postions.)</u></h4>
							<table class="table-bordered table-striped" style="width:100%">
								<tr>
									<th class="text-center">Serial No.</th>
									<th class="text-center">GENERIC ATTRIBUTE</th>
									<th class="text-center">RATINGS (1-5)</th>
								</tr>
								<tr>
									<td>1.</td>
									<td><b>Leadership Abilities</b> : *Demonstrates ability for guiding collective decision making *Demonstrates ability for succession planning *Demonstrates ability for crisis management *Demonstrates ability to take risks</td>
									<td><input required id = "p4p_1" type="text" class="form-control" name="p4p_1"></td>
								</tr>
								<tr>
									<td>2.</td>
									<td><b>Team building</b> : *Demonstrates effectiveness in reorganizing his/her own department *Manage diverse and divergent views and group processes without losing sight of objectives</td>
									<td><input required id = "p4p_2" type="text" class="form-control" name="p4p_2"></td>
								</tr>
								<tr>
									<td>3.</td>
									<td><b>Ability to build a strategic vision</b> : *Demonstrates change to management change *Focus on long term issues *Strategic thinking *Translates visions into goals</td>
									<td><input required id = "p4p_3" type="text" class="form-control" name="p4p_3"></td>
								</tr>
								<tr>
									<td>4.</td>
									<td><b>Business sense</b> : *Commitment to bottom line results by enhancing revenue generation by addressing interest of customers and stakeholders *Balancing need for viable short and long term performance *Optimizing unit / organizations contribution while supporting corporate objectives *Spotting and pursuing new business opportunities wherever possible</td>
									<td><input required id = "p4p_4" type="text" class="form-control" name="p4p_4"></td>
								</tr>
								<tr>
									<td>5.</td>
									<td><b>Communication skills</b> : *Communicate ideas and information effectively and market key points effectively through public speaking and presentation *Ability to convert ideas through action plan and ensure acceptability within the organization and performance at Board meetings</td>
									<td><input required id = "p4p_5" type="text" class="form-control" name="p4p_5"></td>
								</tr>
							</table>
							<br>
							<label  class="control-label col-lg-6">Rating on potential=((Total of all attributes)*15/25):</label>
							<div class="col-lg-6">
								<label id="demo3"></label>
								<input type="button" class="btn btn-default btn-primary" onclick="myFunction_P()" value="Generate Total" />
								<p id="demoP"></p>
							</div>
							<br><br><br>
							
							<p><h4><b><u>INTEGRITY(choose any one of the below)</u></b></h4></p>
							<div class="container-fluid  text-center">
								<input type="radio" name="Integrity" >  Beyond doubt.<br><br>
								<input type="radio" name="Integrity" >  Integrity of the officer is doubtful.A separate secret note is attached.<br><br>
								<input type="radio" name="Integrity" >  Nothing adverse has been received about the Officer.
							</div>
							<br><br>
								
							<h4><b><u>PERFORMANCE AND POTENTIAL PROFILE</u></b></h4><br>
							<h5>FINAL MARKS SCORED</h5>
      
							<div>
								<table class="table-bordered" style="width:100%">
									<tr>
										<th></th>
										<th></th>
										<th class="text-center">TOTAL MARKS</th>
										<th class="text-center">MARKS SCORED</th>
									</tr>

									<tr>
										<td><b>PART I</b></td>
										<td><b>PERFORMANCE</b></td>
										<td><b>50</b></td>
										<td><label id="displayTotal0"></td>
									</tr>

									<tr>
										<td><b>PART II</b></td>
										<td><b>COMPETENCIES</b></td>
										<td><b>20</b></td>
										<td><label id="displayTotal1"></td>
									</tr>

									<tr>
										<td><b>PART III</b></td>
										<td><b>VALUES</b></td>
										<td><b>15</b></td>
										<td><label id="displayTotal2" ></td>
									</tr>

									<tr>
										<td><b>PART IV</b></td>
										<td><b>POTENTIAL</b></td>
										<td><b>15</b></td>
										<td><label id="displayTotal3"></td>
									</tr>
									<tr>
										<td></td>
										<td><b>TOTAL</b></td>
										<td><b>100</b></td>
										<td><label id="totalsum"></td>
									</tr>
								</table>
								<br><br>
								<button type="button" class="btn btn-default btn-primary" onclick="totalsum()">Generate Final Total</button>
							</div>
      
							<br><br>
							
							<?php
								echo "
								<div class=\"form-group \">
									<label  class=\"control-label col-lg-3\">NAME & DESIGNATION OF INITIATING AUTHORITY</label>
									<div class=\"col-lg-9\">
										<input class=\"form-control \" name=\"ndIA\" type=\"text\" value=\"$iName --> $iDesignation, $iDepartment \" readonly/>
									</div>
								</div>
								";
							?>
							<br><br>
							<div class="form-group ">
								<label  class="control-label col-lg-3">Comments OF INITIATING AUTHORITY</label>
								<div class="col-lg-9">
									<input class="form-control " name="cop" type="text" />
								</div>
							</div>
							<br><br>
							<div class="form-group ">
								<label  class="control-label col-lg-3">NAME & DESIGNATION OF REVIEWING AUTHORITY</label>
								<div class="col-lg-9">
									<input class="form-control " name="ndRA" type="text" disabled/>
								</div>
							</div>
							<br><br>
							
							<div class="form-group ">
								<label  class="control-label col-lg-3">COMMENTS OF REVIEWING AUTHORITY</label>
								<div class="col-lg-9">
									<input class="form-control " name="cRA" type="text" disabled/>
								</div>
							</div>
							<br><br>
							<div class="form-group ">
								<label  class="control-label col-lg-3">NAME & DESIGNATION OF ACCEPTING AUTHORITY</label>
								<div class="col-lg-9">
									<input class="form-control " name="ndAA" type="text" disabled/>
								</div>
							</div>
							<br><br>
							<div class="form-group ">
								<label  class="control-label col-lg-3">COMMENTS OF ACCEPTING AUTHORITY</label>
								<div class="col-lg-9">
									<input class="form-control " name="cAA" type="text" disabled/>
								</div>
							</div>
							<br><br>
		
							<button type="submit" class="btn btn-default " onclick="confirmsubmission()">Submit Form</button>
							<br><br><br>
     
						</div>
					</div>
				</div>
				</section>
			</form>
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>