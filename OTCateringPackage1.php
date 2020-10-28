<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"type="text/css" href="styles/OTCateringPackage1.css">
  
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