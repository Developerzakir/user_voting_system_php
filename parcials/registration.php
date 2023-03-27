<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<h1 class="text-center text-info p-3">Registration Page</h1>
	<div class="bg-info py-4">
		<h3 class="text-center text-white">Create Account</h3>

		<div class="container text-center">
			<form action="../actions/register.php" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<input type="text" name="username" class="form-control w-50 m-auto" required="required" placeholder="Enter Your Name">
				</div>

				<div class="mb-3">
					<input type="text" name="mobile" class="form-control w-50 m-auto" required="required" placeholder="Enter Your Number">
				</div>

				<div class="mb-3">
					<input type="password" name="password" class="form-control w-50 m-auto" required="required" placeholder="Enter password">
				</div>

				<div class="mb-3">
					<input type="password" name="cpassword" class="form-control w-50 m-auto" required="required" placeholder="Enter confirm password">
				</div>

				<div class="mb-3">
					<input type="file" name="photo" class="form-control w-50 m-auto">
				</div>

				<div class="mb-3">
					<select name="std"  class="form-select w-50 m-auto">
						
						<option value="group">Group</option>
						<option value="voter">Voter</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary my-3 m-auto">Register</button>
				<p>Don't have an account? <a href="../index.php" class="text-white">Login here</a></p>
			</form>
		</div>
		
	</div>
	



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>