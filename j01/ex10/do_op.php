#!/usr/bin/php
<?PHP
unset($argv[0]);
print_r($argv);
foreach($argv as $key)
	trim($key);
print_r($argv);
	if (strcmp($argv[2],  "*"))
	 echo ($argv[1] * $argv[3])."\n";

?>
