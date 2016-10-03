#!/usr/bin/php
<?PHP
while(1)
{
	echo "Entrez un Nombre: ";
	$line = fgets(STDIN);
	echo "$line\n";
	$line = trim ($line);
	echo "$line\n";
	$l = feof(STDIN);
	echo "l = $l";
}
?>
