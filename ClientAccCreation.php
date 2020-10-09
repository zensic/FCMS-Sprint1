<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FCMS">
    <meta name="author" content="Ooi Kuan Hao"/>
    <meta name="description" content="Client Account Creation Page"/>
    
    <!-- navbar css -->
    <?php
        include 'include/NavBarStyle.php';
    ?>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Client Create Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        echo "<link rel='stylesheet' href='styles/ClientAccCreation_Style.css'>";
    ?>

    <style>
    body {
        color: #999;
        font-family: 'Quebec Serial Bold', sans-serif;
        background-image: url("images/food.jpg");
        background-color: white; /* Used if the image is not available */
        height: auto; /* You must set a specified height */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    </style>
</head>

<body>
    <?php
        include 'include/ClientsNavBar.php';
    ?>
    
    <div class="signup-form">
        <form action="#" method="post">
            <div class="card text-white" style="width: 330px">
                <div class="card-body">
                    <h2>Create Client Account</h2>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                                <i class="fa fa-check"></i>
                            </span>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                        </div>
                    </div>
                </div>
            </div>

        <!--Personal details card-->
        <div class="card text-white" style="width: 330px">
          <div class="card-header"><h3>Personal Details</h3></div>
          <div class="card-body">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </span>
                    <input type="tel" class="form-control" name="phone_number" placeholder="Phone number" required="required">
                </div>
            </div>


            <!--Address-->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                    </span>
                    <input type="text" class="form-control" name="floor_unit" placeholder="Floor/Unit #" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                    </span>
                    <input type="text" class="form-control" name="street_address" placeholder="Street address" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-building"></i>
                    </span>
                    <input type="text" class="form-control" name="city" placeholder="City" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-building"></i>
                    </span>
                    <select id="inputState" class="form-control">
                        <option selected>Choose a state</option>
                        <option>Kuala Lumpur</option>
                        <option>Petaling Jaya</option>
                        <option>Kuala Terengganu</option>
                        <option>Seremban</option>
                        <option>Subang Jaya</option>
                        <option>Shah alam</option>
                        <option>George Town</option>
                        <option>Alor Setar</option>
                        <option>Ipoh</option>
                        <option>Melaka</option>
                        <option>Johor Bahru</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-building"></i>
                    </span>
                    <input type="number" class="form-control" name="zip_code" placeholder="Zip Code" required="required">
                </div>
            </div>
          </div>
        </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="membershipCheckBox">
                <label class="custom-control-label" for="membershipCheckBox">Apply a membership account for RM 10.00</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>

            <div class="text-center">Already have an account? <a href="#">Login here</a>.</div>

            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
    </div>
</body>
</html>