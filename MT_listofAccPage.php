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
        include 'backend/DatabaseConnect.php'; // global variables for connection

        $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

        if(isset($_POST["submit"])) {
            if(!empty($_POST["clients"])) {
                foreach($_POST["clients"] as $client) {
                    
                    // deletes selected rows
                    $sql = "DELETE FROM clients WHERE ClientID ='".$client."'";
                    $db->query($sql);
                }
            }

            if(!empty($_POST["operationTeam"])) {
                foreach($_POST["operationTeam"] as $client) {

                    // deletes selected rows
                    $sql = "DELETE FROM operationteam WHERE OperationID =" + $client.toString();
                    $db->query($sql);
                }
            }
        }

        // close connection
        $db->close();
    ?>
    <form action="MT_listofAccPage.php" method="post" class="container">
        <div class="jumbotron">
            <div class="card">
                <h5 class="card-header">List Of Client's Account</h5>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr class="t_header">
                                <th scope="col">Client ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Login Email</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

                            // fetches all data from the tables
                            $sql = "SELECT * FROM Clients";
                            $result = $db->query($sql);

                            // print data a few times
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <th scope="row">'.$row["ClientID"].'</th>
                                        <td>'.$row["Username"].'</td>
                                        <td>'.$row["Email"].'</td>
                                        <td>
                                            <input type="checkbox" name="clients[]" value="'.$row["ClientID"].'"  class="form-check-input">
                                        </td>
                                    </tr>
                                    ';
                                }
                            }

                            // close connection
                            $db->close();
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">List Of Operation Team's Account</h5>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr class="t_header">
                                <th scope="col">Operation Team ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Login Email</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "backend/DatabaseConnect.php";
                            $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
                            $sql = "SELECT * FROM OperationTeam";
                            $result = $db->query($sql);

                            // print data a few times
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <th scope="row">'.$row["OperationID"].'</th>
                                        <td>'.$row["Username"].'</td>
                                        <td>'.$row["Email"].'</td>
                                        <td>
                                            <input type="checkbox" name="operationTeam[]" id="checkboxstyle" value="'.$row["OperationID"].'"  class="form-check-input">
                                        </td>
                                    </tr>
                                    ';
                                }
                            }

                            // close connection
                            $db->close();
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
    </form>
    <footer>
        <div class="container-fluid text-center  text-white" id="copyright">
            &copy; 2020. All right are Reserved by FoodEdge Gourmate
        </div>
    </footer>

</body>

</html>