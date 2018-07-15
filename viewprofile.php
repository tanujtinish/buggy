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
		$DearnessAllowance=$row["DearnessAllowance"];
		$GradePay=$row["GradePay"];
		$PayScale=$row["PayScale"];
		$BasicPay=$row["BasicPay"];
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


<?php
echo "
</script>
  </head>
  
  <body id=\"mainbody\">
   <img class =\"img-responsive\" src=\"ntc-logo.png\" i>
   <div class=\"container-fluid bg-1 text-center\">
   <h3 class=\"margin\"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>
	
    <div class=\"form-group\" id=\"signupform\">
      <label for=\"signupName\">Name:</label>
      <input type=\"name\" value=\"$Name\" class=\"form-control\" id=\"signupName\" readonly><br>
	  
	  <label for=\"signupName\">Email:</label>
      <input type=\"email\" value=\"$Email\" class=\"form-control\" id=\"Email\" readonly><br>
	  
	  <label for=\"signupName\">Password:</label>
      <input type=\"email\" value=\"$Password\" class=\"form-control\" id=\"Email\" readonly><br>
    
      <label for=\"signupDob\">Date Of Birth:</label>
      <input type=\"date\" value=\"$DOB\" class=\"form-control\" id=\"signupDob\" readonly><br>
    
      <label for=\"pwd\">Date Of Joining:</label>
      <input type=\"date\" value=\"$DOJ\" class=\"form-control\" id=\"pwd\" readonly><br>
    
      <label for=\"\">Qualification:</label>
      <input type=\"text\" value=\"$Qualification\" class=\"form-control\" id=\"\" readonly><br>
    
      <label for=\"\">Department:</label>
      <input type=\"text\" value=\"$Department\" class=\"form-control\" id=\"\" readonly><br>
      
	  <label for=\"\">Designation:</label>
      <input type=\"text\" value=\"$Designation\" class=\"form-control\" id=\"\" readonly><br>
	  
      <label for=\"\">Place of Posting:</label>
      <input type=\"text\" value=\"$PlaceOfPosting\" class=\"form-control\" id=\"\" readonly><br>
    
	  <label for=\"\">Select DearnessAllowance:</label>
      <input type=\"text\" value=\"$DearnessAllowance\" class=\"form-control\" id=\"\" readonly><br>
	  
      <label for=\"\">Pay Scale:</label>
      <input type=\"text\" value=\"$PayScale\" class=\"form-control\" id=\"\" readonly><br>
	  
      <label for=\"\">BasicPay:</label>
      <input type=\"text\" value=\"$BasicPay\" class=\"form-control\" id=\"\" readonly><br>
	  
      <label for=\"\">GradePay:</label>
      <input type=\"text\" value=\"$GradePay\" class=\"form-control\" id=\"\" readonly><br>
	</div>";
   ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>