<?php
    class CateringPackage {
        private $id;
        private $name;
        private $descr;
        private $price;
        private $imagePath;
    
        function __construct($aName, $aDescr, $aPrice, $aImagePath) {
            $name;
            $descr;
            $price;
            $imagePath;
        }

        function get_id() {
            return $id;
        }
        
        function get_name() {
            return $name;
        }

        function get_descr() {
            return $descr;
        }
        
        function get_price() {
            return $price;
        }

        function get_imagePath() {
            return $imagePath;
        }
    }


    // connect to the database
    include 'backend/DatabaseConnect.php'; // global variables for connection
    $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
    $sql = "SELECT * FROM Catering_package";
    $result = $db->query($sql);

    $cateringList = new SqlDoublyLinkedList();

    $rows = 0;
    $rows = $result->rum_rows;
    if ($rows > 0) {
        // iterate though all rows
        // function __construct($aName, $aDescr, $aPrice, $aImagePath)
        while ($row = $result->fetch_assoc()) {
            $tempCatering = new Catering_package($row["PackageID"], $row["PackageName"], $row["PackageDescription"], $row["PricePerPax"], $row["ImagePath"]);
            $cateringList.push($tempCatering);
        }
    }
?>