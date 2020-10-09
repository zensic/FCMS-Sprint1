<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- navbar css -->
    <?php
        include 'include/NavBarStyle.php';
    ?>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/ordersClient.css">
    <title>Orders</title>
</head>
<body>
    <?php
    include 'include/ClientsNavBar.php';
    ?>
    <div class="container" id="order">
        <section class="jumbotron">
            <div class="row" style="cursor: pointer;">
                <div class="col-md-2 col-sm-4">
                    <img class="img-fluid rounded img-thumbnail" src="images/ordersClient/chinese-cuisine-mini.png">
                </div>
                <div class="col-md-10 col-sm-8">
                    <p>Chinese Cuisine</p>
                    <p>Lorem ipsum dolor sit amet, sed an mutat numquam accusata, an vim tale nonumy neglegentur. Sed ut viris vidisse ceteros, et cum inermis antiopam definitiones. Melius integre at qui, eum deleniti oportere eu, no quo vituperata argumentum cotidieque. Quidam appareat persequeris ex nam. Eu vix enim animal, regione accumsan consectetuer nec in, ut quaeque inciderint pri.</p>
                </div>
            </div>
            <hr/>
            <div class="row" style="cursor: pointer;">
                <div class="col-md-2 col-sm-4">
                    <img class="img-fluid rounded img-thumbnail" src="images/ordersClient/malay-cuisine-mini.png">
                </div>
                <div class="col-md-10 col-sm-8">
                    <p>Malay Cuisine</p>
                    <p>Lorem ipsum dolor sit amet, sed an mutat numquam accusata, an vim tale nonumy neglegentur. Sed ut viris vidisse ceteros, et cum inermis antiopam definitiones. Melius integre at qui, eum deleniti oportere eu, no quo vituperata argumentum cotidieque. Quidam appareat persequeris ex nam. Eu vix enim animal, regione accumsan consectetuer nec in, ut quaeque inciderint pri.</p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>