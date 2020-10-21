<?php
// images path
$image_packageA = "images\packages\packageA.jpg";
$image_packageB = "images\packages\packageB.jpg";
$image_packageC = "images\packages\packageC.jpg";

// connect to the database
include 'backend/DatabaseConnect.php'; // global variables for connection
$db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
$sql = "SELECT * FROM Catering_package";
$result = $db->query($sql);

// store data for packageA
$row = $result->fetch_assoc();
$name_packageA = $row["PackageName"];
$descr_packageA = $row["PackageDescription"];
$price_packageA = $row["Price"];

// store data for packageB
$row = $result->fetch_assoc();
$name_packageB = $row["PackageName"];
$descr_packageB = $row["PackageDescription"];
$price_packageB = $row["Price"];

// store data for packageC
$row = $result->fetch_assoc();
$name_packageC = $row["PackageName"];
$descr_packageC = $row["PackageDescription"];
$price_packageC = $row["Price"];

// close db
$db->close();

// strings from database

?>