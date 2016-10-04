#!/usr/bin/php
<?PHP
if ($argv[1])
{
	$str = trim($argv[1]);
	$tab = explode(" ", $str);
	$tab = array_filter($tab);
	$str = implode(" ", $tab);
	echo("$str\n");
}
?>
