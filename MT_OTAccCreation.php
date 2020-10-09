<!DOCTYPE html>
<html>
	<head>
	
		<title>[OT] User Creation Page</title> 
		
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scales">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php
        include 'include/NavBarStyle.php';
  		?>

		<style>
			*
			{
				color: #5E503F;
				font-weight: bold;
			}
			
			h1
			{
				text-align: center;
			}

			body
			{
				background-image: url("images/background.jpg");
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				background-attachment: fixed;
				
			}
			.form-container
			{
				border: 0px solid #fff; 
				padding: 30px 30px; 
				margin-top: 10vh;
				box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.50);
				background-color:white;
			}

			.table-sortable tbody tr {
				cursor: move;
			}
		</style>
	</head>
	<body>
		<?php
		include 'include/MTNavBar.php';
		?>
		<div class = "container-fluid">

			<div class = "row">
				<div class = "col-md-4 col-sm-4 col-xs-12"></div>
				<div class = "col-md-4 col-sm-4 col-xs-12">
					<form class="form-container" method="post">
					<h1>Operation Team</h1>
					<h1>User Creation Page</h1>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="InputUsername" name="OT_username" placeholder="Alphabetical characters only" pattern="[A-Za-z]">
						 </div>
						<div class="form-group">
							<label for="InputEmail1">Facebook Link</label>
							<input type="text" class="form-control" id="InputEmail1" aria-describedby="emailHelp" pattern = "(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?" placeholder="Profile page" name="OT_FacebookLink">
						</div>
						<div class="form-group">
							<label for="InputPassword1">New Password</label>
							<input type="password" class="form-control" id="InputPassword1" name="OT_password" pattern="[0-9A-za-z]{8,12}" placeholder="8-12 Characters, Aplhanumeric Only">
						</div>
						<div class="form-group">
							<label for="InputPassword1">Confirm Password</label>
							<input type="password" class="form-control" id="InputPassword1" placeholder="Retype your password">
						</div>
						<button type="submit" class="btn btn-warning btn-block" name="submit">Submit</button>
					</form>
				</div>
				<div class = "col-md-4 col-sm-4 col-xs-12"></div>
			</div>

		</div>

		<!--Insert a new operation team account-->
		<?php	
			// Create database connection
			$db = mysqli_connect("localhost", "root", "", "fcms");
				
			//Uncomment this section to check database connection
			/*if($db){
				echo"Successful Connect to DB<br/>";
			}else{
				die("fail");
			}*/

			//Sanitise the input
			function sanitise_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			//Make sure user clicked the submit button
			if(isset($_POST['submit'])){
				$username = mysqli_real_escape_string($db, sanitise_input($_POST['OT_username']));
				$FB_Link = mysqli_real_escape_string($db, sanitise_input($_POST['OT_FacebookLink']));
				$password = mysqli_real_escape_string($db, sanitise_input($_POST['OT_password']));

				$sql = "INSERT INTO employee (username, password, facebookLink) VALUES ('$username','$password','$FB_Link')";
				// execute query
				/*if (mysqli_query($db, $sql)){
					echo"Successfully insert<br/>";	
				}else{
					echo"Failed to insert</br>";
				}*/
			}
			$db->close();
		?>
	</body>
</html>