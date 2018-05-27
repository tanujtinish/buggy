<?php
	session_start();
	if(empty($_SESSION["ID"])){
		header("location:login.php");
   }
?>

<!DOCTYPE html>

<html lang="en">
	<title>Initiating Officer</title>
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
			$_SESSION["InitId"]="";
			$_SESSION["FormId"]="";
			$nn=0;
			
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
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
			
		    $q1=$_SESSION["ID"];
            $sql = "SELECT * FROM initiating WHERE InitId LIKE '%$q1%'";
            $result = $conn->query($sql);
            
			echo "<h2 class = 'opo'>List of Employees</h2>";
            echo "<ul class=\"list-group\">";
	        
			echo "<div class=\"form-group\">";
				echo "<table class=\"table-bordered\" style=\"width:100%\">";
					echo "<tr>";
						echo "<th>S.NO.</th>";
						echo "<th>Employee Name</th>";
						echo "<th>Employee Id</th>";
						echo "<th>Employee Application</th>";
						echo "<th>Status of form submission</th>";
					echo "</tr>";
			
					while($row = mysqli_fetch_array($result)){

						$q3 = $row["EmpId"];
						$_SESSION["InitId"] = $row["EmpId"];
						$nn++;
						$sql2 = "SELECT Name,ID FROM employee where ID = '$q3'";
						$result2 = $conn->query($sql2);
						$row2 = $result2->fetch_assoc();
						$_SESSION["FormId"] = $row2['ID'];
						$qqq=$row2['ID'];
						$sql3 = "SELECT InitId,FormStatus FROM initiating where EmpId = '$q3'";
						$result3 = $conn->query($sql3);
						$row3 = $result3->fetch_assoc();
						
						echo "<tr>";
							echo "<td>".$nn."</td>";
							echo "<td>".$row2['Name']."</td>";
						
							if($row3['FormStatus'])
				                echo   "<form role=\"form\" method=\"post\" action=\"fullformviewhr.php\">";
			                else
					            echo   "<form role=\"form\" method=\"post\" action=\"fullformi.php\">";
							echo "<td><input type=\"text\"  value=\"$qqq\" name='qid' readonly/> </td>";
							echo "<td><button  type='submit' name='viewapp'  >View Application</button></td>";

							if($row3['FormStatus']){
								echo "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
							}
							else{
								echo "<td>Not Submitted</td>";
							}
						
							echo "</form>";
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
