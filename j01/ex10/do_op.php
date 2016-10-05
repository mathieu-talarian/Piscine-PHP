#!/usr/bin/php
<?PHP
if ($argc == 4)
{
	unset($argv[0]);
	$a = trim($argv[1]);
	$b = trim($argv[3]);
	$op = trim($argv[2]);
	if (is_numeric($a) && is_numeric($b))
	{
		if ($op ==  "*")
			echo ($a * $b)."\n";
		else if ($op ==  "+")
			echo ($a + $b)."\n";
		else if ($op ==  "-")
			echo ($a - $b)."\n";
		else if ($op ==  "/")
			echo ($a / $b)."\n";
		else if ($op == "%")
			echo ($a % $b)."\n";
	}
}
else
	echo "Incorrect Parameters\n";
?>
