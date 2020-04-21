<?php
    // attributs

    abstract Class house {
        abstract public function getHouseName();
        abstract public function getHouseSeat();
        abstract public function getHouseMotto();

        function introduce() {
           print("House ");
           print($this->getHouseName());
           print(" of ". $this->getHouseSeat() . " : ");
           print('"' . $this->getHouseMotto().'"' . PHP_EOL); 
        }
    }
?>