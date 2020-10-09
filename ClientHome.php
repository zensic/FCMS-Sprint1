<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" href="styles/homepage.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Home | FoodEdge</title>
  <?php include 'includes/NavBarStyle.php';?>
  <style>
    .slide1 {
      background-image: url('images/homeslide1.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .slide2 {
      background-image: url('images/homeslide2.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .slide3 {
      background-image: url('images/homeslide3.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    #fixedImage {
      background-image: url("images/fixed.jpeg");
      background-size: cover;
      background-attachment: fixed;
      height: 30%;
      width: 100%;
      background-size: cover;
    }
  </style>
</head>

<body>

  <div id="theCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#theCarousel" data-slide-to="0" class="active"> </li>
      <li data-target="#theCarousel" data-slide-to="1"> </li>
      <li data-target="#theCarousel" data-slide-to="2"> </li>
    </ol>

    <!-- Define the text to place over the image -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="slide1"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>

        </div>
      </div>
      <div class="item">
        <div class="slide2"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>
        </div>
      </div>
      <div class="item">
        <div class="slide3"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>
        </div>
      </div>
    </div>


    <a class="left carousel-control" href="#theCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"> </span>
    </a>
    <a class="right carousel-control" href="#theCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  <!--endofslide-->

  <div class="container-fluid padding" id="aboutushome">
    <div class="row welcome text-center text-white">
      <div class="col-12">
        <h1 class="display-5">About FoodEdge Gourmate</h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">
          FoodEdge Gourmate Sdn Bhd established in the year of 1999 which 20+ years of experience
          in exquisite catering and excellent hospitality. We provide quality food in a affordable price.
          From appetizing Asian cuisine to Indian Curine, we are one-stop award winning catering company for all your event needs.

        </p>
      </div>
    </div>
  </div>
  <!-- end of aboutus-->
  <section id="fixedImage">
    <div class="container gap">

    </div>
  </section>

  <section id="menu">
  <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h2>Menu Catering</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-4">
                  <div class="outer">
                      <a href="menu.php">
                          <div class="upper">
                              <img src="images/chinese.jpg" class="img-rounded" alt="chinese food">
                          </div>
                          <div class="lower">
                              <span>Catering Package A</span>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-4">
                  <div class="outer">
                      <a href="menu.php">
                          <div class="upper">
                              <img src="images/western.jpg" alt="western food">
                          </div>
                          <div class="lower">
                              <span>Catering Package B</span>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-4">
                  <div class="outer">
                      <a href="menu.php">
                          <div class="upper">
                              <img src="images/mix.jpg" alt="mix package">
                          </div>
                          <div class="lower">
                              <span>Catering Package C</span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section id="fixedImage">
    <div class="container gap">
      
    </div>
  </section>


  <footer class="bg-primary text-white" id="footermain">
    <div id="footerimage">
      <div class="container py-12">
        <div class="row text-center">
          <div class="col-lg-12 ">
            <h4>About Us</h4>
            <p> 082-8865234</p>
            <p>enquiry@foodedge.com</p>
            <p>Jalan Song</p>
            <p>Kuching, Sarawak, Malaysia</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center bg-secondary" id="copyright">
      &copy; 2020. All right are Reserved by FoodEdge Gourmate
    </div>

  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--script src="js/jquery"-->
</body>

</html>