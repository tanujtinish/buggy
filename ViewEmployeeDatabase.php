<?php
session_start();
if(empty($_SESSION["IDhr"])){
     header("location:login.php");
   }
   $PlaceOfPosting=$_SESSION["PlaceOfPosting"];
?>

<!DOCTYPE html>
<html lang="en">
	<title>Employee Database</title>
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
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body id="mainbody">
   <img class ="img-responsive" src="ntc-logo.png" i>
   <div class="container-fluid bg-1 text-center">
   <h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>
   <a href="login.php"><button class="btn btn-default btn-danger" style="position:relative; right:0; float:right">Logout</button></a>
            <?php
			$nn=1;
            function test_input($data) {
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
            }
            $sql = "SELECT * FROM Employee where PlaceOfPosting = '$PlaceOfPosting'";
            $result = $conn->query($sql);
            echo "<h2 class = 'opo'>List of Employees</h2>";
            echo "<ul class=\"list-group\">";
	        echo "<div class=\"form-group\">";
			echo "<table class=\"table-bordered\" style=\"width:100%\">";
			echo	"<tr>";
			echo	  "<th>S.NO.</th>";
			echo	  "<th>Name</th>";
			echo	  "<th>ID</th>";
			echo	  "<th>Department</th>";
			echo	  "<th>PlaceOfPosting</th>";
			echo	"</tr>";
            while($row = mysqli_fetch_array($result))
            {
				echo "<tr>";
				echo   "<td>".$nn++."</td>";
				echo   "<td>".$row['Name']."</td>";
				echo   "<td>".$row['ID']."</td>";
				echo   "<td>".$row['Department']."</td>";
				echo   "<td>".$row['PlaceOfPosting']."</td>";
				echo "</tr>";
			}
            echo "</div>";
            echo "</form>";
			echo "</table>";
		    echo "</div>";
            $conn->close();
            ?>
</body>

</html>
