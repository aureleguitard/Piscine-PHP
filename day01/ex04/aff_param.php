#!/usr/bin/env php
<?php
$int = 1;
	foreach ($argv as $mot)
	{
		if ($int++ > 1)
			echo "$mot"."\n";
	}
?>