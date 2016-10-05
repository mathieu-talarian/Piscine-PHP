#!/usr/bin/php
<?PHP
if ($argc == 2)
{
if ($fd = fopen($argv[1], 'r'))
	echo "1\n";
while ($str = fgets($fd))
{
	echo "$str\n";
	$a = preg_replace_callback("/<a.+>/", (preg_replace_callback("/title=\".+\"/", (preg_replace_callback("/\".+\"$/", function ($matches) {
		return strtoupper($matches[0]);},
		$arr)), $arr)), $arr);
//	print_r($arr);
//	$b = preg_match("/title=\".+\"/", $arr[0], $arr2);
//	print_r($arr2);
//	$c = preg_match("/\".+\"$/", $arr2[0], $arr3);
//	print_r($arr3);
}

fclose($fd);
}

?>
