<?php
    class CateringPackage {
        private $id;
        private $name;
        private $descr;
        private $price;
        private $imagePath;

        function __construct($aID, $aName, $aDescr, $aPrice, $aImagePath) {
            $this->id = $aID;
            $this->name = $aName;
            $this->descr = $aDescr;
            $this->price = $aPrice;
            $this->imagePath = $aImagePath;
        }

        function get_id() {
            return $this->id;
        }
        
        function get_name() {
            return $this->name;
        }

        function get_descr() {
            return $this->descr;
        }
        
        function get_price() {
            return $this->price;
        }

        function get_imagePath() {
            return $this->imagePath;
        }
    }

    // creating catering packages doubly linked list

    include 'backend/DatabaseConnect.php'; // global variables for connection
    $db = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);
    $sql = "SELECT * FROM Catering_package";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        
        // create new doubly linked list
        $cateringPackages = new SplDoublyLinkedList();
        
        // iterate though all rows in db table
        while ($row = $result->fetch_assoc()) {
            //$tempCatering = new CateringPackage("1", "ABC", "ABBCS", "1222", "111//111");
            $tempCatering = new CateringPackage($row["PackageID"], $row["PackageName"], $row["PackageDescription"], $row["PricePerPax"], $row["ImagePath"]);
            $cateringPackages->push($tempCatering);
        }
        
        $cateringPackages->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
    }
