#!/usr/bin/php 
<?PHP


function ccmp($c1, $c2)
{
	$c1 = strtolower($c1);
	$c2 = strtolower($c2);
	if (ctype_alpha($c1))
		$g1 = 1;
	else if (ctype_digit($c1))
		$g1 = 2;
	else
		$g1 = 3;
	if (ctype_alpha($c2))
		$g2 = 1;
	else if (ctype_digit($c2))
		$g2 = 2;
	else
		$g2 = 3;
	if ($g1 != $g2)
		return ($g1 - $g2);
	return (strcmp($c1, $c2));
}
function cmp($str1, $str2)
{
	while ($j < strlen($str1) && $j < strlen($str2))
	{
		if (ccmp($str1[$j], $str2[$j]) > 0)
			return (1);
		if (ccmp($str1[$j], $str2[$j]) < 0)
			return (-1);
		$j++;
	}
	if ($j < strlen($str1))
		return (1);
	if ($j < strlen($str2))
		return (-1);
	return (0);
}


unset($argv[0]);
print_r($argv);
$str = implode(" ", $argv);
$tab = explode(" ", $str);
$tab = array_filter($tab);
usort ($tab, "cmp");
print_r($tab);
?>
