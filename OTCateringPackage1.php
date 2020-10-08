<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>OT | Catering Menu</title>
  <style>
    .container {
      margin-top: 50px
    }

    h1 {
      color: #a9927d;

    }

    h3 {
      text-align: center;
      margin: 1em;
      text-transform: capitalize;
      font-size: 1.7em;
      color: #5E503F;
    }

    .product-grid2 {
      font-family: 'Open Sans', sans-serif;
      position: relative;
      box-shadow: 0px 0px 0px #fff;
    }

    .product-grid2 .product-image2 {
      overflow: hidden;
      position: relative;
    }

    .product-grid2 .product-image2 a {
      display: block;
    }

    .product-grid2 .product-image2 img {
      width: 100%;
      height: auto;
    }

    .product-image2 .pic-1 {
      opacity: 1;
      transition: all .5s
    }

    .product-grid2 .product-content {
      padding: 20px 10px;
      text-align: center;

    }

    .product-grid2 .title {
      font-size: 17px;
      margin: 0 0 7px
    }

    #btn_edit {
      background: #fff;
      color: #5E503F;
    }

    #menucontainer {
      background-image: url("images/menu_back1.jpg");
    }
    h3.title{
      color:#fff;
    }
  </style>
</head>

<body id="menucontainer" >
  <div >
  <div class="container" >
    <h1 class="text-center">Catering Menu</h1>
    <hr class="hr">
    </div>

    <div class="container" >
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="product-grid2">
            <div class="product-image2"> <a href="#"> <img class="pic-1" src="images/menu1.png"> </a>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#">Chinese Cursine</a></h3>
              <button type="button" class="btn btn-secondary badge-pill text-white" id="btn_edit"> Edit </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="product-grid2">
            <div class="product-image2"> <a href="#"> <img class="pic-1" src="images/menu2.png"> </a>

            </div>
            <div class="product-content">
              <h3 class="title"><a href="#">Indian Cursine</a></h3>
              <button type="button" class="btn btn-secondary badge-pill text-white" id="btn_edit"> Edit </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="product-grid2">
            <div class="product-image2"> <a href="#"> <img class="pic-1" src="images/menu3.png"> </a>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#">Mix Cursine</a></h3>
              <button type="button" class="btn btn-secondary badge-pill text-white" id="btn_edit"> Edit </button>
            </div>
          </div>
        </div>

      </div>
    </div>
 
  </div>
</body>

</html>