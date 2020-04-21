#!/usr/bin/env php
<?php
    if ($argc == 2)
    {
        $split_elem = sscanf($argv[1], "%d %c %d %s"); //decim char decim , puis presenter comme string.
		if ($split_elem[0] && $split_elem[1] && $split_elem[2] && !$split_elem[3])
		{
			if($split_elem[1] == "*")
				$total = $split_elem[0] * $split_elem[2];
			if($split_elem[1] == "-")
				$total = $split_elem[0] - $split_elem[2];
			if($split_elem[1] == "/")
				$total = $split_elem[0] / $split_elem[2];
			if($split_elem[1] == "%")
				$total = $split_elem[0] % $split_elem[2];
			if($split_elem[1] == "+")
				$total = $split_elem[0] + $split_elem[2];
			echo $total;
			echo "\n";
		}
		else
        	echo "Syntax Error\n";
    }
    else
        echo "Put 3 arguments plz ...\n";
?>