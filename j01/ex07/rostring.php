#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$str = trim($argv[1]);
	$tab = explode(" ", $str);
	$tab = array_filter($tab);
	$cpt = count($tab);
	$i = 1;
	while ($i < $cpt)
	{
			echo("$tab[$i] ");
			$i++;
	}
	echo("$tab[0]");
	echo "\n";
}
?>
