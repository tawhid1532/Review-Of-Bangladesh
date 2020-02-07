<?php
session_start();

$conn = mysqli_connect('localhost', 'root');
if($conn){
	echo "connection successful";
}else{
	echo "no conection";
}
$db = mysqli_select_db($conn, 'admin');

if(isset($_POST['submit'])){
	$users = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "select * from admin_table where username = '$users' and password = '$pass'";

	$query = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "Login successful";
			$_SESSION['user'] = $users;
			header('location:../crud_php/index.php'); 
		}else{
			echo "login failed";
			header('location:admin.php'); 
		}
}

?>