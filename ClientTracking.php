<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/ordersClient.css">
    <link rel="stylesheet" href="styles/ClientTracking.css" >
    <title>Order Tracking</title>
    <?php
        include 'include/NavBarStyle.php';
    ?>
</head>
<body>
    <?php
        include 'include/ClientsNavBar.php';
        include "backend/DatabaseConnect.php";
        $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
        $sql = "SELECT * FROM Orders WHERE OrderID='1'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <div class="jumbotron progressBar">
            <h3>Order Status</h3>
            <ul>
                <li <?php if($row["TrackingID"] > 0){echo "class='selected'";} ?>>
                    <span>Step 1</span>
                    <div>Invoice Issued</div>
                </li>
                <li <?php if($row["TrackingID"] > 1){echo "class='selected'";} ?>>
                    <span>Step 2</span>
                    <div>Order Confirmed</div>
                </li>
                <li <?php if($row["TrackingID"] > 2){echo "class='selected'";} ?>>
                    <span>Step 3</span>
                    <div>Event Preparing</div>
                </li>
                <li <?php if($row["TrackingID"] > 3){echo "class='selected'";} ?>>
                    <span>Step 4</span>
                    <div>Event Preparation Completed</div>
                </li>
                <li <?php if($row["TrackingID"] > 4){echo "class='selected'";} ?>>
                    <span>Step 5</span>
                    <div>Event completed</div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>