<!DOCTYPE html>
<html>
	<head>
	
		<title>[OT] Update Order Page</title> 
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="styles/OTUpdateOrder.css">
		
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		
		<?php
		include 'include/NavBarStyle.php';
		?>
	</head>

	<body>
	<?php
        include 'include/OTNavBar.php';
    ?>
	<div class="container">
		<form method="post">
		    <div class="row clearfix">
			<div class="col-md-12 table-responsive">
					<table class="table table-bordered table-hover table-sortable" id="tab_logic">
						<thead class="table_heading">
							<tr >
								<th class="text-center">
									Order ID
								</th>
								<th class="text-center">
									Order Date 
								</th>
								<th class="text-center">
									Client Name
								</th>
							<th class="text-center">
									Package Option
								</th>
							<th class="text-center" >
									Order Status
								</th>
							</tr>
						</thead>
						<tbody class="table_body">
						<tr id='addr0' data-id="0" class="hidden">
								<td data-name="name">
								    <input type="text" name='orderID'  placeholder='Order ID' class="form-control"/>
								</td>
								<td data-name="name">
									<input class="form-control" type="date" name="order_date" id="example-date-input">

								</td>
								<td data-name="name">
								    <input type="text" name='mail0' placeholder='Client name' class="form-control"/>
								</td>
							<td data-name="sel">
								    <select name="sel0">
								<option value="">Package Option</option>
								<option value="1">Western</option>
								<option value="2">Chinese</option>
								<option value="3">MIx</option>
								    </select>
								</td>
								<td data-name="sel">
								    <select name="orderStatus">
								<option value="">Order Status</option>
								<option value="Invoice issued">Invoice issued</option>
								<option value="Order Confirmed">Order Confirmed</option>
								<option value="Event preparing">Event preparing</option>
								<option value="Event preparations completed">Event preparations completed</option>
								<option value="Event dismantled">Event dismantled</option>
								    </select>
								</td>
					<td data-name="del">
					    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
					</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<button id="add_row" class="btn btn-warning float-right" type="submit" name="submit" >Add Row</button>
	</form>
	</div>
		
		
		<!--Find date availability, update order status-->
		<?php	
			// Create database connection
			$db = mysqli_connect("localhost", "root", "", "fcms");
				
			//Uncomment this section to check database connection
			if($db){
				echo"Successful Connect to DB<br/>";
			}else{
				die("fail");
			}

			//Make sure user clicked the submit button
			if(isset($_POST['submit'])){
				$date = mysqli_real_escape_string($db, $_POST['order_date']);

				$sql = "SELECT * FROM orders";
				$result = mysqli_query($db, $sql);
				$numRows = mysqli_num_rows($result);

				if($numRows > 0){
					echo "</br><b>".$numRows." Result Found!"."</b></br>";
					while($row = mysqli_fetch_assoc($result)){
						if($date == $row['OrderDate']){
							echo "Date clashed!";
						}
						else{
							echo "Date is available!";
						}
					}
				}else{
					echo "Table is empty";
				}

				//Escape special characters for $db connection
                $ordr_ID = mysqli_real_escape_string($db, $_POST['orderID']);
                $ordrStatus = mysqli_real_escape_string($db, $_POST['orderStatus']);

				$sql2 = "UPDATE orders SET TrackingStatus='$ordrStatus' WHERE OrderID='$ordr_ID'";
				
				//Check update to table
				if (mysqli_query($db, $sql2)) {
					echo"<br/>Update completed<br/>";	
				}else{
					echo"<br/>Failed to update</br>";
				}
			}
			$db->close();
		?>
	</body>
</html>
	
