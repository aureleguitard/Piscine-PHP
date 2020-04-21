#!/usr/bin/php
<?php
if ($argc > 1)
{
    $str = preg_replace('/ +/',' ', $argv[1]);
    $str = trim($str);
    if ($str)
        echo "$str"."\n";
}
?>