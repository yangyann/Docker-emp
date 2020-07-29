<!DOCTYPE html>
<html>
<head>
	<title>Employees Table</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 50px;">
	<?php include 'database.php'; 

	// create a variable
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$department=$_POST['department'];
	$email=$_POST['email'];

	//Execute the query

	mysqli_query($connect,"INSERT INTO employees1(first_name,last_name,department,email)
					VALUES('$first_name','$last_name','$department','$email')");

	$resault = mysqli_query($connect, "SELECT * FROM employees1");

	echo "<table class='table table-striped table-bordered' style='border-radius: 0.8em; border-collapse: collapse; overflow: hidden;'>
	<thead class='thead-dark'>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Deparment</th>
	<th>Email</th>
	</tr>
	</thead>
	";
	
	while($row = mysqli_fetch_array($resault))
	{
		echo "<tr>";
		echo "<td>".$row['first_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "</tr>";
	}

	echo "</table>";

	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Employee Added</p>";
		// echo '<a class="btn btn-primary btn-md" href="index.php">Go Back</a>';
		echo "<form action='index.php'>
		<button type='submit' class='btn btn-primary btn-md'>Go Back</button>
		</form>";
	} else {
		echo "Employee NOT Added<br />";
		echo mysqli_error ($connect);
		echo "<form action='index.php'>
		<button type='submit' class='btn btn-primary btn-md'>Go Back</button>
		</form>";
	}

	?>
</div>

</body>
</html>
