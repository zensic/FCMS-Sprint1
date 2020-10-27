<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet"type="text/css" href="styles/OTCateringPackage1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>OT | Catering Menu</title>
  <?php
    include 'include/NavBarStyle.php';
  ?>
</head>

<body>
  <?php
    include 'include/OTNavBar.php';
  ?>
  <div >
  <div class="container" >
    <h1 class="text-center">Catering Menu</h1>
    <hr class="hr">
  </div>
  <div class="container" >
    <div class="row">
      <?php
        include 'include/CateringPackageList.php';
        for ($cateringPackages->rewind(); $cateringPackages->valid(); $cateringPackages->next()) {
          $package = $cateringPackages->current();
          echo '      <div class="col-md-4 col-sm-6">
          <div class="product-grid2">
            <div class="product-image2">
              <a href="OTCateringPackage2.php"> <img class="pic-1" src='.$package->get_imagePath().'> </a>
            </div>
            <div class="product-content">
              <button type="button" class="btn btn-secondary badge-pill " id="btn_edit"><a href="OTCateringPackage2.php">Edit '.$package->get_name().'</a></button>
            </div>
          </div>
        </div>';
        }
      ?>
      
    </div>
  </div>
</body>

</html>