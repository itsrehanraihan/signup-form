<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Submitted Succecfully!</title>
	<link rel="stylesheet" href="style.css">
	<style>
		p {
			color: #8b8b8b;
		}
	</style>
</head>
<body>
	<div class="card">
		<?php
			//Host: localhost
			//User: root
			//Password: null
			//Database Name: studentlist 
			
			$conn = mysqli_connect("localhost", "root", "", "listofstudent");
				
			//Connection check 
			if (!$conn) {
				echo "ERROR!";
			}
			
			// Taking all 6 values from the form data(input) or './index.php'

			$username = $_REQUEST['name'];
			$roll = $_REQUEST['roll'];
			$semester = $_REQUEST['semester'];
			$dept = $_REQUEST['dept'];
			$email = $_REQUEST['email'];
			
			// Here our table name is "info"
			$sql = "INSERT INTO information VALUES ('$username',
				'$roll','$semester','$dept','$email')";
			
			if(mysqli_query($conn, $sql)){
				echo "<h2>All Data stored in database successfully.<h4>";

				echo"🤩";
			} else{
				echo "😑";
			}
			
			// Close Connection 
			mysqli_close($conn);
		?>
		<a href="http://localhost/surveyform/">Back To Home</a>
	</div>
</body>
</html>
