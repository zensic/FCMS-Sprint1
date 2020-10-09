<!DOCTYPE html>
<html>
	<head>
	
		<title>Update Order Page</title> 
		
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scales">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		
		<style>
			.table_heading{
				background-color: #5E503F;
				color: white;
			}
			.container{
				margin-top: 50px;
			}
		</style>
		
	</head>
	<body>
	<?php
        include 'include/OTNavBar.php';
    ?>
	<div class="container">
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
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
						    <input type="text" name='name0'  placeholder='Order ID' class="form-control"/>
						</td>
						<td data-name="name">
							<input class="form-control" type="date" value="2020-10-8" id="example-date-input">
						    
						</td>
						<td data-name="name">
						    <input type="text" name='mail0' placeholder='Order Date' class="form-control"/>
						</td>
    					<td data-name="sel">
						    <select name="sel0">
        				        <option value="">Package Option</option>
    					        <option value="1">Package 1</option>
        				        <option value="2">Package 2</option>
        				        <option value="3">Package 3</option>
						    </select>
						</td>
						<td data-name="sel">
						    <select name="sel0">
        				        <option value="">Order Status</option>
    					        <option value="1">Pending</option>
        				        <option value="2">In-progress</option>
        				        <option value="3">Complete</option>
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
	<a id="add_row" class="btn btn-warning float-right">Add Row</a>
	</div>
	</body>
</html>
	