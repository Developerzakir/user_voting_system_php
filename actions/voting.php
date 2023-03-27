<?php 

session_start();

include "connect.php";


$votes = $_POST['groupvotes'];
$totalVotes = $votes+1;

$groupId = $_POST['groupid'];
$userId = $_SESSION['id'];

$updateVotes = mysqli_query($conn, "update `userdata` set votes='$totalVotes' where id='$groupId' ");

$updateStatus= mysqli_query($conn, "update `userdata` set status=1 where id='$userId' ");

if($updateVotes AND $updateStatus){
	$getGroups = mysqli_query($conn, "select username, photo, votes, id from `userdata` where standard='group' ");

	$groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);

	$_SESSION['groups'] = $groups;
	$_SESSION['status'] = 1;


	echo "<script>
	alert('voting successfully added');
	window.location = '../parcials/dashboard.php';
	</script>";



}else{
	echo "<script>
	alert('error');
	window.location = '../parcials/dashboard.php';
	</script>";
}






 ?>