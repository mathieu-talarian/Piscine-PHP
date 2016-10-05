#!/usr/bin/php
<?PHP
if ($argc != 2)
	echo "Incorrect Parameters\n";
else
{
	$arr = explode(" ", trim($argv[1]));
	$arr = array_filter($arr);
	$str = implode("", $arr);
	$tab = sscanf($str, "%d%c%d%s");
	if (is_numeric($tab[0]) && is_numeric($tab[2]))
	{
		if($tab[1] == "*")
			echo $tab[0] * $tab[2];
		if($tab[1] == "-")
			echo $tab[0] - $tab[2];
		if($tab[1] == "/")
			echo $tab[0] / $tab[2];
		if($tab[1] == "%")
			echo $tab[0] % $tab[2];
		if($tab[1] == "+")
			echo $tab[0] + $tab[2];
		echo "\n";
	}
	else
		echo "Syntax Error\n";
}
?>
