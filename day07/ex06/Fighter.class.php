<?php
    abstract class Fighter {
        public $nameOfChar;
        abstract function fight($target);
        function __construct($name){
            $this->nameOfChar = $name;
        }
    }
?>