 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FoodEdge | MT</title>
     <link rel ="stylesheet" type="text/css" href="styles/MT_ListOfAcc">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <?php
        include 'include/NavBarStyle.php';
    ?>
 </head>

 <body>
    <?php
    include 'include/MTNavBar.php';
    ?>

     <div class="container">
         <div class="jumbotron">
             <div class="card">
                 <h5 class="card-header">List Of Client's Account</h5>
                 <div class="card-body">
                     <h5 class="card-title">Client Account</h5>
                     <table class="table table-striped ">
                         <thead>
                             <tr class="t_header">
                                 <th scope="col">Client ID</th>
                                 <th scope="col">Member Id</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Login Email</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <th scope="row">0001</th>
                                 <td>0001</td>
                                 <td>John</td>
                                 <td>john@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0002</th>
                                 <td>0002</td>
                                 <td>Thornton</td>
                                 <td>thornton@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0003</th>
                                 <td>0003</td>
                                 <td>Iron Man</td>
                                 <td>ironman@marvel.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0001</th>
                                 <td>0001</td>
                                 <td>John</td>
                                 <td>john@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0002</th>
                                 <td>0002</td>
                                 <td>Thornton</td>
                                 <td>thornton@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0003</th>
                                 <td>0003</td>
                                 <td>Iron Man</td>
                                 <td>ironman@marvel.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0001</th>
                                 <td>0001</td>
                                 <td>John</td>
                                 <td>john@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0002</th>
                                 <td>0002</td>
                                 <td>Thornton</td>
                                 <td>thornton@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0003</th>
                                 <td>0003</td>
                                 <td>Iron Man</td>
                                 <td>ironman@marvel.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0001</th>
                                 <td>0001</td>
                                 <td>John</td>
                                 <td>john@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0002</th>
                                 <td>0002</td>
                                 <td>Thornton</td>
                                 <td>thornton@gmail.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">0003</th>
                                 <td>0003</td>
                                 <td>Iron Man</td>
                                 <td>ironman@marvel.com</td>
                                 <td>
                                     <button type="button" class="btn btn-secondary badge-pill" id="btn_del">Delete</button>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <footer>
         <div class="container-fluid text-center  text-white" id="copyright">
             &copy; 2020. All right are Reserved by FoodEdge Gourmate
         </div>
     </footer>

 </body>

 </html>