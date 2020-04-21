#!/usr/bin/env php
<?php
$result = NULL;
    foreach($argv as $elem)
    {

        $rep = explode(":", $elem);
        if (!isset($rep[1])) 
        {
            $rep[0] = null;
        }
        if($rep[0] == $argv[1])
            $result = $rep[1];
    }
    echo $result."\n";
    // print_r ($rep);
?>