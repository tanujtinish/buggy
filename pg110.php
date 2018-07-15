<?php
	session_start();
	if(empty($_SESSION["ID"])){
		header("location:login.php");
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
	
	echo"<!DOCTYPE html>
	<html lang=\"en\">
		<title>Appraisal Form</title>
		<head>
			<meta charset=\"utf-8\">
			<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			<!--<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">-->
			<style type=\"text/css\">
				#mainbody{
					font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
				}
				.bg-1{
					background-color: #981a66;
					color: white;
				}
				.img-responsive{
					margin: 0 auto;
				}
				#formpg110{
					padding-top: 50px;
					margin: 0 auto;
					width: 75%;
				}
			</style>

			<!-- Bootstrap -->
			<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
			
			<script>
			function confirmsubmission() {
					if (confirm(\"Do you really want to finalize!\") == true) {
						var element = document.getElementById(\"formpg110\"); 
						element.setAttribute(\"action\", \"appsubmit1.php\");
					} else {
						var element = document.getElementById(\"formpg110\"); 
						element.setAttribute(\"action\", \"afterlogin.php\");
					}
				}

			</script>
		
		</head>
	
		<body id=\"mainbody\">
		<img class =\"img-responsive\" src=\"ntc-logo.png\" i>
		<div class=\"container-fluid bg-1 text-center\">
			<h3 class=\"margin\"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
		</div>
		
		<a href=\"login.php\"><button class=\"btn btn-default btn-danger\" style=\"position:relative; right:0; float:right\">Logout</button></a> 
		<div class=\"container-fluid text-center\">
			<h4 class=\"margin\"><b>Performance Appraisal form for executives in the level of E-0 to E-7</b></h4>
  
			<div class=\"panel-body\">
				<div class=\"form\">
					<div class=\"form-group \">
						<h4 class=\"margin\"><b>Personal Data(filled by Appraisee/HR Dept.):</b></h4>
					</div>
					
					<form id=\"formpg110\" class=\"form-validate form-horizontal\" method=\"post\" action=\"appsubmit1.php\">
			
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-2\">Name:</label>
							<div class=\"col-lg-4\">
								<input class=\"form-control \" type=\"text\" value=\"$Name\" disabled/>
							</div>
						
						<label  class=\"control-label col-lg-2\">Employee Id.:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"text\" value=\"$ID\" disabled/>
						</div>
					</div>
			
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-2\">Designation:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"text\" value=\"$Designation\" disabled/>
						</div>
						
						<label  class=\"control-label col-lg-2\">Scale Of Pay:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"text\" value=\"$PayScale\" disabled/>
						</div>
					</div>
			
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-2\">Qualification:(Academic and Professional)</label>
						<div class=\"col-lg-10\">
							<input class=\"form-control \" type=\"text\" value=\"$Qualification\" disabled></textarea>
						</div>
					</div>
			
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-2\">Unit/Location:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"text\" value=\"$PlaceOfPosting\" disabled />
						</div>
			  
						<label  class=\"control-label col-lg-2\">Date of Birth:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"date\" value=\"$DOB\" disabled/>
						</div>
					</div>
			
					<div class=\"form-group \">
						<label  class=\"control-label col-lg-2\">Date Of Joining:</label>
						<div class=\"col-lg-4\">
							<input class=\"form-control \" type=\"date\" value=\"$DOJ\" disabled/>
						</div>";
?>


						<label  class="control-label col-lg-2">Date Of Retirement:</label>
						<div class="col-lg-4">
							<input class="form-control " type="date" name="DOR" />
						</div>
					</div>
			
					<div class="form-group ">
						<label  class="control-label col-lg-4">Date of filling the property return for the year:</label>
						<div class="col-lg-4">
							<input class="form-control " type="date" name="DOF" />
						</div>
					</div><br>
			
					<h4>Past Positions Held:</h4><br>
					<div class="form-group">
						<table class="table-bordered" style="width:100%">
							<tr>
								<th>FROM</th>
								<th>TO</th>
								<th>UNIT/LOCATION</th>
								<th>POSITION HELD</th>
								<th>KEY RESPONSIBILITIES</th>
							</tr>
							
							<tr>
								<td><input type="date" class="form-control" name="PPH_f1" /></td>
								<td><input type="date" class="form-control" name="PPH_t1" /></td>
								<td><input type="text" class="form-control" name="PPH_loc1" /></td>
								<td><input type="text" class="form-control" name="PPH_pos1" /></td>
								<td><input type="text" class="form-control" name="PPH_res1" /></td> 
							</tr>
							
							<tr>
								<td><input type="date" class="form-control" name="PPH_f2" /></td>
								<td><input type="date" class="form-control" name="PPH_t2" /></td>
								<td><input type="text" class="form-control" name="PPH_loc2" /></td>
								<td><input type="text" class="form-control" name="PPH_pos2" /></td>
								<td><input type="text" class="form-control" name="PPH_res2" /></td> 
							</tr>
							
							<tr>
								<td><input type="date" class="form-control" name="PPH_f3" /></td>
								<td><input type="date" class="form-control" name="PPH_t3" /></td>
								<td><input type="text" class="form-control" name="PPH_loc3" /></td>
								<td><input type="text" class="form-control" name="PPH_pos3" /></td>
								<td><input type="text" class="form-control" name="PPH_res3" /></td> 
							</tr>
							
							<tr>
								<td><input type="date" class="form-control" name="PPH_f4" /></td>
								<td><input type="date" class="form-control" name="PPH_t4" /></td>
								<td><input type="text" class="form-control" name="PPH_loc4" /></td>
								<td><input type="text" class="form-control" name="PPH_pos4" /></td>
								<td><input type="text" class="form-control" name="PPH_res4" /></td> 
							</tr>
						</table>
					</div>
					<hr>
	   
	   
					<h4 class="margin"><bold><u>PART-1:PERFORMANCE</u></bold></h4>
					<h5 class="margin"><bold><u>PERFORMANCE PLAN AND MID YEAR REVIEW</u></bold></h5>
					<p>Key performance Areas together with measure/indicators and max.marks to be jointly agreed upon between the Appraiser and Appraisee at the beginning of the review period and then filled in the format given below</p>
	   
	   
					<div class="form-group">
						<table class="table-bordered" style="width:100%">
							<tr>
								<th rowspan="2" class="text-center">S.NO</th>
								<th colspan="2" class="text-center">PERFORMANCE PLAN</th>
								<th colspan="3" class="text-center">MID YEAR REVIEW</th>
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
								<td><input type="text" class="form-control" name="MYR_kpa1" /></td>
								<td><input type="text" class="form-control" name="MYR_ind1" /></td>
								<td><input type="text" class="form-control" name="MYR_mm1" /></td>
								<td><input type="text" class="form-control" name="MYR_ach1" /></td>
								<td><input type="text" class="form-control" name="MYR_rev1" disabled/></td> 
							</tr>
							
							<tr>
								<td>2</td>
								<td><input type="text" class="form-control" name="MYR_kpa2" /></td>
								<td><input type="text" class="form-control" name="MYR_ind2" /></td>
								<td><input type="text" class="form-control" name="MYR_mm2" /></td>
								<td><input type="text" class="form-control" name="MYR_ach2" /></td>
								<td><input type="text" class="form-control" name="MYR_rev2" disabled/></td> 
							</tr>
							
							<tr>
								<td>3</td>
								<td><input type="text" class="form-control" name="MYR_kpa3" /></td>
								<td><input type="text" class="form-control" name="MYR_ind3" /></td>
								<td><input type="text" class="form-control" name="MYR_mm3" /></td>
								<td><input type="text" class="form-control" name="MYR_ach3" /></td>
								<td><input type="text" class="form-control" name="MYR_rev3" disabled/></td> 
							</tr>
							
							<tr>
								<td>4</td>
								<td><input type="text" class="form-control" name="MYR_kpa4" /></td>
								<td><input type="text" class="form-control" name="MYR_ind4" /></td>
								<td><input type="text" class="form-control" name="MYR_mm4" /></td>
								<td><input type="text" class="form-control" name="MYR_ach4" /></td>
								<td><input type="text" class="form-control" name="MYR_rev4" disabled/></td> 
							</tr>
							
							<tr>
								<td>5</td>
								<td><input type="text" class="form-control" name="MYR_kpa5" /></td>
								<td><input type="text" class="form-control" name="MYR_ind5" /></td>
								<td><input type="text" class="form-control" name="MYR_mm5" /></td>
								<td><input type="text" class="form-control" name="MYR_ach5" /></td>
								<td><input type="text" class="form-control" name="MYR_rev5" disabled/></td> 
							</tr>
					
							<tr>
								<td>6</td>
								<td><input type="text" class="form-control" name="MYR_kpa6" /></td>
								<td><input type="text" class="form-control" name="MYR_ind6" /></td>
								<td><input type="text" class="form-control" name="MYR_mm6" /></td>
								<td><input type="text" class="form-control" name="MYR_ach6" /></td>
								<td><input type="text" class="form-control" name="MYR_rev6" disabled/></td> 
							</tr>
					
							<tr>
								<td>7</td>
								<td><input type="text" class="form-control" name="MYR_kpa7" /></td>
								<td><input type="text" class="form-control" name="MYR_ind7" /></td>
								<td><input type="text" class="form-control" name="MYR_mm7" /></td>
								<td><input type="text" class="form-control" name="MYR_ach7" /></td>
								<td><input type="text" class="form-control" name="MYR_rev7" disabled/></td> 
							</tr>
						
							<tr>
								<td>8</td>
								<td><input type="text" class="form-control" name="MYR_kpa8" /></td>
								<td><input type="text" class="form-control" name="MYR_ind8" /></td>
								<td><input type="text" class="form-control" name="MYR_mm8" /></td>
								<td><input type="text" class="form-control" name="MYR_ach8" /></td>
								<td><input type="text" class="form-control" name="MYR_rev8" disabled/></td> 
							</tr>
							
							<tr>
								<td>9</td>
								<td><input type="text" class="form-control" name="MYR_kpa9" /></td>
								<td><input type="text" class="form-control" name="MYR_ind9" /></td>
								<td><input type="text" class="form-control" name="MYR_mm9" /></td>
								<td><input type="text" class="form-control" name="MYR_ach9" /></td>
								<td><input type="text" class="form-control" name="MYR_rev9" disabled/></td> 
							</tr>
							
							<tr>
								<td>10</td>
								<td><input type="text" class="form-control" name="MYR_kpa10" /></td>
								<td><input type="text" class="form-control" name="MYR_ind10" /></td>
								<td><input type="text" class="form-control" name="MYR_mm10" /></td>
								<td><input type="text" class="form-control" name="MYR_ach10" /></td>
								<td><input type="text" class="form-control" name="MYR_rev10" disabled/></td> 
							</tr>
						</table>
					</div>
					<hr>
			
					<h4 class="margin"><bold><u>YEAR END PERFORMANCE REVIEW</u></bold></h4>
					<p>The KPAs and measures after incorporating changes, if required, will be recast from the previous page and year-end review will be carried out.</p>
	   
		
					<div class="form-group">
						<table class="table-bordered" style="width:100%">
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
								<td><input type="text" class="form-control" name="YER_kpa1" /></td>
								<td><input type="text" class="form-control" name="YER_ind1" /></td>
								<td><input type="text" class="form-control" name="YER_mm1" /></td>
								<td><input type="text" class="form-control" name="YER_ach1" /></td>
								<td><input type="text" class="form-control" name="YER_rev1" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma1" disabled/></td>
							</tr>
					
							<tr>
								<td>2</td>
								<td><input type="text" class="form-control" name="YER_kpa2" /></td>
								<td><input type="text" class="form-control" name="YER_ind2" /></td>
								<td><input type="text" class="form-control" name="YER_mm2" /></td>
								<td><input type="text" class="form-control" name="YER_ach2" /></td>
								<td><input type="text" class="form-control" name="YER_rev2" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma2" disabled/></td>
							</tr>
					
							<tr>
								<td>3</td>
								<td><input type="text" class="form-control" name="YER_kpa3" /></td>
								<td><input type="text" class="form-control" name="YER_ind3" /></td>
								<td><input type="text" class="form-control" name="YER_mm3" /></td>
								<td><input type="text" class="form-control" name="YER_ach3" /></td>
								<td><input type="text" class="form-control" name="YER_rev3" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma3" disabled/></td>
							</tr>
						
							<tr>
								<td>4</td>
								<td><input type="text" class="form-control" name="YER_kpa4" /></td>
								<td><input type="text" class="form-control" name="YER_ind4" /></td>
								<td><input type="text" class="form-control" name="YER_mm4" /></td>
								<td><input type="text" class="form-control" name="YER_ach4" /></td>
								<td><input type="text" class="form-control" name="YER_rev4" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma4" disabled/></td> 
							</tr>
						
							<tr>
								<td>5</td>
								<td><input type="text" class="form-control" name="YER_kpa5" /></td>
								<td><input type="text" class="form-control" name="YER_ind5" /></td>
								<td><input type="text" class="form-control" name="YER_mm5" /></td>
								<td><input type="text" class="form-control" name="YER_ach5" /></td>
								<td><input type="text" class="form-control" name="YER_rev5" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma5" disabled/></td>
							</tr>
							
							<tr>
								<td>6</td>
								<td><input type="text" class="form-control" name="YER_kpa6" /></td>
								<td><input type="text" class="form-control" name="YER_ind6" /></td>
								<td><input type="text" class="form-control" name="YER_mm6" /></td>
								<td><input type="text" class="form-control" name="YER_ach6" /></td>
								<td><input type="text" class="form-control" name="YER_rev6" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma6" disabled/></td>
							</tr>
							
							<tr>
								<td>7</td>
								<td><input type="text" class="form-control" name="YER_kpa7" /></td>
								<td><input type="text" class="form-control" name="YER_ind7" /></td>
								<td><input type="text" class="form-control" name="YER_mm7" /></td>
								<td><input type="text" class="form-control" name="YER_ach7" /></td>
								<td><input type="text" class="form-control" name="YER_rev7" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma7" disabled/></td>
							</tr>
					
							<tr>
								<td>8</td>
								<td><input type="text" class="form-control" name="YER_kpa8" /></td>
								<td><input type="text" class="form-control" name="YER_ind8" /></td>
								<td><input type="text" class="form-control" name="YER_mm8" /></td>
								<td><input type="text" class="form-control" name="YER_ach8" /></td>
								<td><input type="text" class="form-control" name="YER_rev8" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma8" disabled/></td>
							</tr>
							
							<tr>
								<td>9</td>
								<td><input type="text" class="form-control" name="YER_kpa9" /></td>
								<td><input type="text" class="form-control" name="YER_ind9" /></td>
								<td><input type="text" class="form-control" name="YER_mm9" /></td>
								<td><input type="text" class="form-control" name="YER_ach9" /></td>
								<td><input type="text" class="form-control" name="YER_rev9" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma9" disabled/></td>
							</tr>
							
							<tr>
								<td>10</td>
								<td><input type="text" class="form-control" name="YER_kpa10" /></td>
								<td><input type="text" class="form-control" name="YER_ind10" /></td>
								<td><input type="text" class="form-control" name="YER_mm10" /></td>
								<td><input type="text" class="form-control" name="YER_ach10" /></td>
								<td><input type="text" class="form-control" name="YER_rev10" disabled/></td> 
								<td><input type="text" class="form-control" name="YER_ma10" disabled/></td>
							</tr>
						</table>
					</div>
			
					<div class="form-group">
						<p>*The column 'marks awarded' will be filled only by the Appraiser</p>
					</div>
					<hr>
					<br>
		
					<div class="form-group">
						<input type="submit" class="btn btn-default btn-primary" onclick="confirmsubmission()">
					</div>

				</form>
		</div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>