<?php 

require_once 'db_connect.php';

if($_POST) {
	$fname = $_POST['fname'];;

	$id = $_POST['id'];

	$sql  = "UPDATE members SET fname = '$fname' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>