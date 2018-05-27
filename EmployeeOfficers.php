<?php
	session_start();
	if(empty($_SESSION["IDhr"])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>

<html lang="en">
	<title>Officer's Assigned</title>
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
       
		<?php
			$_SESSION["init"] =  $_SESSION["accept"] = $_SESSION["review"] = $_SESSION["EmpId"] = '';
		?>
		
		<img class ="img-responsive" src="ntc-logo.png" i>
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
		</div>
		
		<a href="login.php"><button class="btn btn-default btn-danger" style="position:relative; right:0; float:right">Logout</button></a>
		<?php
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
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
			
			$ID=$_SESSION["ID"];
			
            $sql = "SELECT * FROM employee where ID = '$ID' ";
            $result = $conn->query($sql);
        
            echo "<ul class=\"list-group\">";
	        echo "<div class=\"form-group\">";
				echo "<table class=\"table-bordered\" style=\"width:100%\">";
					echo "<tr>";
						echo "<th>Your Initiating Officer</th>";
						echo "<th>Your Reviewing Officer</th>";
						echo "<th>Your Accepting Officer</th>";
						echo "<th>Status of Initiating Officer</th>";
						echo "<th>Status of Reviewing Officer</th>";
						echo "<th>Status of Accepting Officer</th>";
				echo "</tr>";
            
				while($row = mysqli_fetch_array($result)){

					$nn++;

					$sql3 = "SELECT InitId,FormStatus FROM initiating where EmpId = '$ID'";
					$result3 = $conn->query($sql3);
					$row3 = $result3->fetch_assoc();
					$i=$row3['InitId'];
					$ifm=$row3['FormStatus'];
					$sql3 = "SELECT Name FROM employee where ID = '$i'";
					$result3 = $conn->query($sql3);
					$row3 = $result3->fetch_assoc();
					
					$sql4 = "SELECT AcceptId,FormStatus FROM accepting where EmpId = '$ID'";
					$result4 = $conn->query($sql4);
					$row4 = $result4->fetch_assoc();
					$a=$row4['AcceptId'];
					$afm=$row4['FormStatus'];
					$sql4 = "SELECT Name FROM employee where ID = '$a'";
					$result4 = $conn->query($sql4);
					$row4 = $result4->fetch_assoc();
					
					$sql5 = "SELECT ReviewId,FormStatus FROM reviewing where EmpId = '$ID'";
					$result5 = $conn->query($sql5);
					$row5 = $result5->fetch_assoc();
					$r=$row5['ReviewId'];
					$rfm=$row5['FormStatus'];
					$sql5 = "SELECT Name FROM employee where ID = '$r'";
					$result5 = $conn->query($sql5);
					$row5 = $result5->fetch_assoc();
					
					$i=$row3['Name'];
					$a=$row4['Name'];
					$r=$row5['Name'];
				
					echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$r."</td>";
							echo "<td>".$a."</td>";
				
				
							if($ifm){
								echo "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
							}
							else{
								echo "<td>Not Submitted</td>";
							}
							
							
							if($rfm){
								echo "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
							}
							else{
								echo "<td>Not Submitted</td>";
							}
							
							
							if($afm){
								echo "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
							}
							else{
								echo "<td>Not Submitted</td>";
							}
					echo "</tr>";
				}
				echo "</div>";
			echo "</table>";
			echo "</div>";
			$conn->close();
        ?>
	</body>
</html>
