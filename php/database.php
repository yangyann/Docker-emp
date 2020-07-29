<?php 

//mysqli_connect($docker_service_name_inside_docker-compose.yml, $username, $userpassword, $database_name);
$connect = mysqli_connect('db','emp1','emp1','emp_db');

if (mysqli_connect_errno($connect))
{
	echo "Failed to connect";
}

 ?>