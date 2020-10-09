<!DOCTYPE html>
<html>
	<head>
	
		<title>[OT] Food and Beverages</title> 
		
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scales">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<style>
		.each_cont
		{
			margin-top: 20px;
			background-color: #5E503F;
			color: white;
			padding: 20px;
		}
	</style>
	<?php
        include 'include/NavBarStyle.php';
    ?>
	<body>
	<?php
		include 'include/OTNavBar.php';
		?>
	<div class="container-fluid">
		<div class="row col-lg-12">
			<?php
				include "backend/DatabaseConnect.php";

				$db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
				
				// check connection
				if($db){
					$pass = true;
				} else {
					die("fail");
				}
				
				$sql = "SELECT * FROM Food";
				$result = $db->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo '
						<div class="col-7 text-left each_cont">
							<span>'.$row["FoodName"].'</span>
						</div>
						<div class="col-5 text-right each_cont">
							<button type="submit" class="btn btn-warning btn-center">Edit</button>
						</div>
						';
					}
				}
				
				// close connection
				$db->close();
			?>
		</div>
	</div>
	</body>
</html>
