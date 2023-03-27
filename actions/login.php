<?php 



include "connect.php";
session_start();

$username = $_POST['username'];
$mobile   = $_POST['mobile'];
$password = $_POST['password'];
$std      = $_POST['std'];

//for voter user
$sql ="SELECT * FROM `userdata` where username='$username' AND mobile='$mobile' AND password='$password' AND standard='$std' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

   //for group user

	$sql2 = "SELECT username, photo,votes,id from `userdata` where standard='group' ";

	$resultGroup = mysqli_query($conn, $sql2);
	if(mysqli_num_rows($resultGroup) > 0){
		$groups = mysqli_fetch_all($resultGroup,MYSQLI_ASSOC);
		$_SESSION['groups'] = $groups;
	}

	$data = mysqli_fetch_array($result);
	$_SESSION['id']     = $data['id'];
	$_SESSION['status'] = $data['status'];
	$_SESSION['data']   = $data;

	
    header("Location: ../parcials/dashboard.php "); 

}else{
	echo ' 

		<script>alert("credential is invalid")</script>
		

	 ';
	 header("Location: ../index.php ");
}







 ?>