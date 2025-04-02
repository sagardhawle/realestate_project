<?php
 
$con = mysqli_connect(hostname: "localhost", usernmae: "admin",password: "admin", database: "realestatephp");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?> 

