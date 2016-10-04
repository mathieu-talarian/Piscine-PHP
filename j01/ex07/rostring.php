#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$str = trim($argv[1]);
	$tab = explode(" ", $str);
	$tab = array_filter($tab);
	foreach($tab as $key)
	{
		if ($key != $tab[0])
			echo("$key ");
	}
	foreach($tab as $key)
	{
		if ($key == $tab[0])
			echo("$key");
	}
	echo "\n";
}
?>
