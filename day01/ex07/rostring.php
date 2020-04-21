#!/usr/bin/env/php
<?php

global $argv;

function ft_split($str)
{
    $str = trim($str);  
    $str = preg_replace('/ +/',' ', $str);
    return $str;
}

if ($argc > 1)
{
    // $str = trim($argv[1]);
    // $str = preg_replace('/ +/',' ', $str);
    $str = ft_split($argv[1]);
    $word_separ = explode(" ", $str);

    for($i = 1; $i < count($word_separ); $i++)
        echo ($word_separ[$i]." ");
    echo ($word_separ[0]."\n");
}
?>