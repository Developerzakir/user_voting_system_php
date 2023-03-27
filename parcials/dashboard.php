

<?php 

session_start();

if(!isset($_SESSION['id'])){
	header('Location: ../');
}

// include "../actions/connect.php";

$data = $_SESSION['data'];

if($_SESSION['status']==1){
	$status = '<b class="text-success">Voted</b>';
}else{
	$status = '<b class="text-info">Not Voted</b>';
}



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voting System - Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary text-light">

	<div class="container my-5">
		<a class="btn btn-primary px-3" href="../index.php">Back</a>
		<a class="btn btn-primary px-3" href="logout.php">Logout</a>
		<h1 class="my-3">Voting System</h1>

		<div class="row my-4">
			<div class="col-md-7">
				<?php 

				if(isset($_SESSION['groups'])){

					  $groups = $_SESSION['groups'];
					  for($i=0; $i<count($groups); $i++){

					  	?>

				  			<div class="row">
								<div class="col-md-4">
									<img class="w-50 m-auto" src="../uploads/<?php echo  $groups[$i]['photo'] ?>" alt="Group Image">
								</div>
								<div class="col-md-8">
									<strong class="h4 text-dark">Group Name:</strong>
									<?php echo  $groups[$i]['username'] ?>
									<br>
									<strong class="h4 text-dark">Votes:</strong>
									<?php echo  $groups[$i]['votes'] ?>
								</div>
							</div>
							<hr>
							<form action="../actions/voting.php" method="POST">
								<input type="hidden" name="groupvotes" value="<?php echo  $groups[$i]['votes'] ?>">
								<input type="hidden" name="groupid" value="<?php echo  $groups[$i]['id'] ?>">

								<?php 


								if($_SESSION['status']==1){

									?>

									<button class="btn btn-success">Voted</button>


									<?php
								}else{

									?>
									<button class="btn btn-primary" type="submit">Vote</button>

									<?php 

								}



								 ?>
							</form>

						<?php 

					  }
				}else{
					?>
					<p>No Group is found</p>

					<?php 
				}


				 ?>
				<!-- groups -->
			
				
			</div>
			<div class="col-md-5">
				<!-- user profile -->
				<img src="../uploads/<?php echo $data['photo'] ?>" alt="User Image">
				<br>
				<br>
				<strong class="h5 text-dark">Name:</strong>
				<?php echo $data['username']; ?><br>
				<strong class="h5 text-dark">Mobile:</strong>
				<?php echo $data['mobile']; ?><br>

				<strong class="h5 text-dark">Status:</strong>
				<?php echo $status; ?><br>



				
			</div>
			
		</div>
		
	</div>

	






	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>