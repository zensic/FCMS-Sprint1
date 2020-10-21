<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Catering Package Details</title>

  <!-- Custom styles for this template -->
  <link href="styles/client_catering.css" rel="stylesheet">

  <?php
        include 'include/NavBarStyle.php';
  ?>

</head>

<body id="page-top">

<?php
        include 'include/ClientsNavBar.php';
        include 'include/StringPath.php';
    ?>

  <section id="detail">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6 col-5" id="selected-image">
                  <img src="<?php echo $image_packageA ?>" width="250" alt="western food" id="selected">
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-5" id="selected-detail">
                  <p>Package A</p>
                  <p>RM 500</p>
                  <p>Menu Detail</p>
                  <ul class="infomation">
                    <li>Chinese Fried Rice</li>
                    <li>Breaised Noodles</li>
                    <li>Seafood with Chilli Crab Sauce</li>
                    <li>Omelette</li>
                    <li>Mixed Fresh Fruits</li>
                  </ul>
              </div>
          </div>
      </div>
</section>

<section id="other">
  <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h2>Others</h2>
              </div>
          </div>
          <div class="row  justify-content-center">
              <div class="col-lg-3 col-md-3 col-sm-5 col-5">
                  <div class="outer">
                      <a href="#">
                          <div class="upper">
                              <img src="<?php echo $image_packageB ?>" alt="western food">
                          </div>
                          <div class="lower">
                              <span>Catering Package B</span>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-5 col-5">
                  <div class="outer">
                      <a href="#">
                          <div class="upper">
                              <img src=<?php echo $image_packageC ?> alt="mix package">
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

  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
