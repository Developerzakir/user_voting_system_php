<?php 

include "connect.php";

$username  = $_POST['username'];
$mobile    = $_POST['mobile'];
$password  = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image     = $_FILES['photo']['name'];
$tmp_name  = $_FILES['photo']['tmp_name'];
$std       = $_POST['std'];

if($password !=$cpassword){
	echo "<script>
	alert('Password did not match!')
	window.loation = '../parcials/registrtion.php';
	</script>";
}

else{
	move_uploaded_file($tmp_name, "../uploads/$image");

	$sql = "INSERT INTO `userdata` (username,mobile,password,photo,standard,status,votes)
	VALUES('$username', '$mobile', '$password', '$image', '$std',0,0) ";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>
		alert('Data inserted successfully')
		
		</script>";

		header("Location: ../index.php");
	}
}



 ?>