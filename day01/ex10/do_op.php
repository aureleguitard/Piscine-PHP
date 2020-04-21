#!/usr/bin/php
<?php

    if ($argc == 4)
    {
        $firstNumber = trim($argv[1]);
        $secondNumber = trim($argv[3]);
        $operator = trim($argv[2]);
        
        if($operator == "/")
            $total = $firstNumber / $secondNumber;
        else if($operator == "+")
            $total = $firstNumber + $secondNumber;
        else if($operator == "*")
            $total = $firstNumber * $secondNumber;
        else if($operator == "-")
            $total = $firstNumber - $secondNumber;
        else if($operator == "%")
            $total = $firstNumber % $secondNumber;
        echo $total . "\n";
    }
    else
        echo "Incorrect Parameters\n";
?>