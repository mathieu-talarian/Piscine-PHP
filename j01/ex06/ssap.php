#!/usr/bin/php 
<?PHP
$str = implode(" ", $argv);
$str = trim($str);
$tab = explode(" ", $str);
$tab = array_filter($tab);
sort($tab);
foreach($tab as $key)
	if ($key != $argv[0])
		echo("$key\n");
?>
