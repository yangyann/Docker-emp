<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Employee</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<div class="card" style="margin-top: 100px;">
				<h4 class="card-header">Employee inform</h4>
				<div class="card-body">
					<form action="process.php" method="post">
						<div class="form-group">
							<label for="first_name">First Name</label>
							<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
						</div>
						<br>
						<div class="form-group">
							<label for="last_name">Last Name</label>
							<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
						</div>
						<br>
						<div class="form-group">
							<label for="department">Department</label>
							<input type="text" class="form-control" id="department" placeholder="Department" name="department">
						</div>
						<br>
						<div class="form-group">
						    <label for="email">Email address</label>
						    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
						 </div>
						 <br>
							 <!-- <button type="button" class="btn btn-primary btn-lg">Add Employee</button> -->
						 <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Add Employee">
					</form>
				</div>
			</div>
	</div>
</body>
</html>