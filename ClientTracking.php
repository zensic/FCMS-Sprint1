<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/ordersClient.css">
    <title>Order Tracking</title>
    <style>
        .progressBar ul {
            list-style:none;
            position: relative;
            padding: 0;
        }

        .progressBar ul:before{
            content: '';
            position: absolute;
            width: 2px;
            height: 100%;
            top: 0;
            left: 0;
            background: #ddd;
        }

        .progressBar ul li {
            padding: 20px 30px;
            position: relative;
        }

        .progressBar ul li div {
            padding: 0px;
        }

        .progressBar ul li span {
            color: #aaa;
            position: absolute;
            left: -18px;
            font-size: 12px;
            background-color: #fff;
            padding: 2px 0;
        }

        .progressBar ul li .selected {
            color:tomato;
        }

    </style>
</head>
<body>
    <div class="container progressBar">
        <p>Order Status</p>
        <ul>
            <li>
                <span>Step 1</span>
                <div>Invoice Issued</div>
            </li>
            <li>
                <span>Step 2</span>
                <div>Order Confirmed</div>
            </li>
            <li>
                <span>Step 3</span>
                <div>Event Preparing</div>
            </li>
            <li>
                <span>Step 4</span>
                <div>Event Preparation Completed</div>
            </li>
            <li>
                <span>Step 5</span>
                <div>Event completed</div>
            </li>
        </ul>
    </div>
</body>
</html>