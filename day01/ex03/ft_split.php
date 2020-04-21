#!/usr/bin/env php
<?php
	function ft_split($str)
	{
		$word = explode(" ", $str); // Scinde une chaîne de caractères en segments
		$sort_word = array_values(array_filter($word)); //values retourne un tableau de valeurs indexé.
		sort($sort_word);
        return ($sort_word);
	}

	//explode() retourne un tableau de chaînes de caractères
	//, chacune d'elle étant une sous-chaîne du paramètre string
	// extraite en utilisant le séparateur delimiter. 
?>
