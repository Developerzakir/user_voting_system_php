<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voting System with PHP MYSQL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">

	<h1 class="text-info text-center mt-3">Voting System</h1>
	<div class="bg-info py-4">
		<h2 class="text-center">Login</h2>
		<div class="container text-center">
			<form action="actions/login.php" method="POST">
				<div class="mb-3">
					<input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your name" required="required">
				</div>

				<div class="mb-3">
					<input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile" required="required"  maxlength="10" minlength="10">
				</div>

				<div class="mb-3">
					<input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" required="required">
				</div>

				<div class="mb-3">
					<select name="std" id="" class="form-select w-50 m-auto">
						
						<option value="group">Group</option>
						<option value="voter">Voter</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary my-3 m-auto">Login</button>
				<p>Don't have an account? <a href="parcials/registration.php" class="text-white">Register here</a></p>
				

			</form>
		</div>
	</div>
	



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>