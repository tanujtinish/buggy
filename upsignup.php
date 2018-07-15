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
		$Email = $row["Email"];
		$Password = $row["Password"];
		$ID = $row["ID"];
		$Department = $row["Department"];
		$Designation  = $row["Designation"];
		$Qualification= $row["Qualification"];
		$PlaceOfPosting = $row["PlaceOfPosting"];
		$DOB = $row["DOB"];
		$DOJ = $row["DOJ"];
	}
	
?>
	
<!DOCTYPE html>
<html lang="en">
	<title>Update Profile</title>
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
      #signupform{
        padding-top: 75px;
        margin: 0 auto;
        width: 25%;
      }
	  .inv {
  display: none;
}
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script >
function getpay(val) {
	
	if(val==="CDA")
	{
	    $('#GradePay').show();
		var element = document.getElementById("signupform"); 
        element.setAttribute("action", "upsignup1.php");
	}
    else 
	{
		$('#GradePay').hide();
		$('#submit').show();
		var element = document.getElementById("signupform"); 
        element.setAttribute("action", "upsignup2.php");
	}
	$.ajax({
	type: "POST",
	url: "getpay.php",
	data:'DearnessAllowance='+val,
	success: function(data){
		$("#PayScale").html(data);
	}
	});
}

<?php
echo "
</script>
  </head>
  
  <body id=\"mainbody\">
   <img class =\"img-responsive\" src=\"ntc-logo.png\" i>
   <div class=\"container-fluid bg-1 text-center\">
   <h3 class=\"margin\"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>
	
	<button class=\"btn btn-default\"><a href=\"afterlogin.php\">Go Back<a/></button><br><hr>
	
   <form id=\"signupform\" method=\"post\" action=\"signup1.php\">
   <button class=\"btn btn-default\"><a href=\"UpdatePassword.php\">Change Password<a/></button><br><hr>
    <div class=\"form-group\">
      <label for=\"signupName\">Name:</label>
      <input type=\"name\" value=\"$Name\" name=\"Name\" class=\"form-control\" id=\"signupName\"><br>
	  <label for=\"signupName\">Email:</label>
      <input type=\"email\" value=\"$Email\" name=\"Email\" class=\"form-control\" id=\"Email\"><br>
    
      <label for=\"signupDob\">Date Of Birth:</label>
      <input type=\"date\" value=\"$DOB\" name=\"DOB\" class=\"form-control\" id=\"signupDob\"><br>
    
      <label for=\"pwd\">Date Of Joining:</label>
      <input type=\"date\" value=\"$DOJ\" name=\"DOJ\" class=\"form-control\" id=\"pwd\"><br>
    
      <label for=\"\">Qualification:</label>
      <input type=\"text\" value=\"$Qualification\" name=\"Qualification\" class=\"form-control\" id=\"\"><br>
    
      <label for=\"\">Department:</label>
      <select value=\"$Department\" name=\"Department\" class=\"form-control\" required>
			<option selected disabled value=\"\">Select Department</option>
			<option value=\"HR\" name=\"Department\">HR</option>
			<option value=\"Technical\" name=\"Department\">Technical</option>
			<option value=\"IT\" name=\"Department\">IT</option>
			<option value=\"Finance\" name=\"Department\">Finance</option>
			<option value=\"Marketing\" name=\"Department\">Marketing</option>
	  </select><br>
      
	  <label for=\"\">Designation:</label>
      <select value=\"$Designation\" name=\"Designation\" class=\"form-control\" required>
	  <option selected disabled value=\"\">Select Designation</option>
      <option value=\"AssistantManager\" name=\"Designation\">Assistant Manager</option>
      <option value=\"DeputyManager\" name=\"Designation\">Deputy Manager</option>
      <option value=\"JointManager\" name=\"Designation\">Joint Manager</option>
      <option value=\"Manager\" name=\"Designation\">Manager</option>
      <option value=\"SeniorManager\" name=\"Designation\">Senior Manager</option>
      <option value=\"DeputyGeneralManager\" name=\"Designation\">Deputy General Manager</option>
      <option value=\"GeneralManager\" name=\"Designation\">General Manager</option>
      <option value=\"ChiefGeneralManager\" name=\"Designation\">Chief General Manager</option>
      <option value=\"ExecutiveDirector\" name=\"Designation\">Executive Director</option>
      <option value=\"SeniorExecutiveDirector\" name=\"Designation\">Senior Executive Director</option>
      </select>
      <br>
	  
      <label for=\"\">Place of Posting:</label>
      <select value=\"$PlaceOfPosting\" name=\"PlaceOfPosting\" class=\"form-control\" required>
            <option selected disabled value=\"\">Select Location</option>
            <option value=\"Delhi\" name=\"PlaceOfPosting\">Delhi</option>
            <option value=\"Mumbai\" name=\"PlaceOfPosting\">Mumbai</option>
            <option value=\"Coimbatore\" name=\"PlaceOfPosting\">Coimbatore</option>
            <option value=\"India United Mills No5, Mumbai\" name=\"PlaceOfPosting\">India United Mills No5, Mumbai</option>
            <option value=\"Podar Mills, Mumbai\" name=\"PlaceOfPosting\">Podar Mills, Mumbai</option>
            <option value=\"Tata Mills, Mumbai\" name=\"PlaceOfPosting\">Tata Mills, Mumbai</option>
            <option value=\"Barshi Mills, Barshi\" name=\"PlaceOfPosting\">Barshi Mills, Barshi</option>
            <option value=\"Finlay Mills, Achalpur\" name=\"PlaceOfPosting\">Finlay Mills, Achalpur</option>
            <option value=\"Rajnagar Mills, Ahmedabad\" name=\"PlaceOfPosting\">Rajnagar Mills, Ahmedabad</option>
            <option value=\"NBT Mills, Bhopal\" name=\"PlaceOfPosting\">NBT Mills, Bhopal</option>
            <option value=\"BT Mills, Burhanpur\" name=\"PlaceOfPosting\">BT Mills, Burhanpur</option>
      <option value=\"Arati Mills, Howrah\" name=\"PlaceOfPosting\">Arati Mills, Howrah</option>
      <option value=\"Sri Rangavilas, Coimbatore\" name=\"PlaceOfPosting\">Sri Rangavilas, Coimbatore</option>
      <option value=\"CBE Murugan Mills, CBE\" name=\"PlaceOfPosting\">CBE Murugan Mills, CBE</option>
      <option value=\"CBE 'S'and'W' Mills, Coimbatore\" name=\"PlaceOfPosting\">CBE 'S'and'W' Mills, Coimbatore</option>
      <option value=\"Pankaja Mills, Coimbatore\" name=\"PlaceOfPosting\">Pankaja Mills, Coimbatore</option>
      <option value=\"Pioneer Spinners, Paramakudi\" name=\"PlaceOfPosting\">Pioneer Spinners, Paramakudi</option>
      <option value=\"Kaleeswar B, Kalayarkoil\" name=\"PlaceOfPosting\">Kaleeswar B, Kalayarkoil</option>
      <option value=\"Alagappa Textiles, Trichur\" name=\"PlaceOfPosting\">Alagappa Textiles, Trichur</option>
      <option value=\"Kerala Laxmi Mills, Trichur\" name=\"PlaceOfPosting\">Kerala Laxmi Mills, Trichur</option>
      <option value=\"Vijay Mohini Mills, TVM\" name=\"PlaceOfPosting\">Vijay Mohini Mills, TVM</option>
      <option value=\"Cannanore Spg and Wvg Mills, Kannur\" name=\"PlaceOfPosting\">Cannanore Spg and Wvg Mills, Kannur</option>
      <option value=\"Cannanore Spg and Wvg Mills, Mahe\" name=\"PlaceOfPosting\">Cannanore Spg and Wvg Mills, Mahe</option>
      <option value=\"NMM, Hassan\" name=\"PlaceOfPosting\">NMM, Hassan</option>
      <option value=\"Tirupati Cotton Mills, Tirupati\" name=\"PlaceOfPosting\">Tirupati Cotton Mills, Tirupati</option>
      </select><br>
    
	  <label for=\"\">Select DearnessAllowance:</label>
      <select name=\"DearnessAllowance\" id=\"DearnessAllowance\" class=\"form-control\" onChange=\"getpay(this.value);\" required>
			<option value=\"\">DearnessAllowance</option>
			<option value=\"IDA\" name=\"DearnessAllowance\">IDA</option>
			<option value=\"CDA\" name=\"DearnessAllowance\">CDA</option>
	  </select><br>
	  
      <label for=\"\">Pay Scale:</label>
      <select name=\"PayScale\" id=\"PayScale\" class=\"form-control\" required>
	  <option  value=\"\">Select Pay Scale</option>
	  </select><br>
	  
      <label for=\"\">BasicPay:</label>
      <input type=\"text\" name=\"BasicPay\" class=\"form-control\" id=\"\" required><br>
	  
	  <div id=\"GradePay\">
      <label for=\"\">GradePay:</label>
      <select name=\"Gradepay\" id=\"\" class=\"form-control\" >
	  <option  value=\"\">Select GradePay</option>
	  <option value=\"4,200\" name=\"Gradepay\">Rs. 4,200</option>
 	  <option value=\"5,400\" name=\"Gradepay\">Rs. 5,400</option>
      <option value=\"6,600\" name=\"Gradepay\">Rs. 6,600</option>
	  <option value=\"7,600\" name=\"Gradepay\">Rs. 7,600</option>
	  <option value=\"8,700\" name=\"Gradepay\">Rs. 8,700</option>
	  </select></div><br>
	  
	<button id=\"submit\" class=\"btn btn-default btn-primary\">Update</button>
    </div>
   </form>";
   ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>