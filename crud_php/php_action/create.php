<?php 

require_once 'db_connect.php';

if($_POST) {
	$age = $_POST['ore'];
	$fname = $_POST['fname'];
	$sql = "INSERT INTO members (Country, fname, active) VALUES ('$age','$fname', 1)";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>