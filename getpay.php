<?php
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
if(!empty($_POST["DearnessAllowance"])) {
	$sql="SELECT * FROM PayScale WHERE DearnessAllowance = '" . $_POST["DearnessAllowance"] . "'";
	$result = $conn->query($sql);
?>
	<option  value="">Select Pay Scale</option>
<?php
	while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["pid"]; ?>" name="PayScale"><?php echo $row["pay"]; ?></option>
<?php
	}
}
?>