#!/usr/bin/php
<?PHP
while(1)
{
	echo "Entrez un Nombre: ";
	$line = trim(fgets(STDIN));
	if (feof(STDIN))
		break;
	if (!is_numeric($line))
		echo "'$line' n'est pas un chiffre\n";
	else
	{
		if (($line % 2) == 0)
			echo "Le chiffre $line est est Pair\n";
		else
			echo "Le chiffre $line est est Impair\n";
	}
}
?>
