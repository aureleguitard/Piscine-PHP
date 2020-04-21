#!/usr/bin/php
<?php

function compare($a, $b)
{
	$i = 0;
	$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"
			#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$a_index = stripos($line, $a[$i]);
		$b_index = stripos($line, $b[$i]);
		if ($a_index > $b_index)
			return (1);
		else if ($a_index < $b_index)
			return (-1);
		else
			$i++;
	}
}

    function ft_split($s1)
    {
        $tab = array_filter(explode(" ", $s1));
        sort($tab);
        return ($tab);
    }

    if ($argc != 1)
    {
        $e = array();
        foreach($argv as $arg) 
        {
            if ($arg != $argv[0])
            {
                $tab = ft_split($arg);
                $e = array_merge($e, $tab);
            }
        }
    }
    usort($e, "compare");
    echo join("\n", $e) . "\n";
?>