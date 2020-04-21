#!/usr/bin/php
<?php
    $int = 1;
    $tab = array();
    foreach ($argv as $mot)
    {
        if ($int++ > 1)
        {
            $tmp = preg_split("/ +/", trim($mot));//retourne tableau
            if ($tmp[0] != ""){//sinon mot vide comptabilisé dans tab
            }
                $tab = array_merge($tab, $tmp);//fusionne plusierus tableaux en un seul

        }
    }
    sort($tab);
    foreach($tab as $mot)
        echo "$mot"."\n";
?>