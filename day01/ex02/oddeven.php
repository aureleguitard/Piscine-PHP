<?php
    $str = fopen("php://stdin", "r");//Ouvre en lecture seule, et place le pointeur de fichier au début du fichier.
    while ($str && !feof($str)) //feof pour voir si str n'est pas vide
    {
        echo "Enter a number : ";
        $nombre = fgets($str); //Récupère la ligne courante sur laquelle se trouve le pointeur du fichier
        if ($nombre) 
        {
            $nombre = trim($nombre);
            if (is_numeric($nombre)) 
            {
                if ($nombre % 2 == 0) 
                    echo "The number : " . $nombre ." is pair\n";
                else
                echo "The number : " . $nombre . " is odd\n";
            }
            else
                echo "'" . $nombre . "' is not a number\n";    
        }
    }
    fclose($str);
?>
