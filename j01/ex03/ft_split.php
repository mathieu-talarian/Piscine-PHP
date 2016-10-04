<?PHP
function ft_split($str)
{
	$s = trim($str);
	$tab = explode(" ", $s);
	$tab = array_filter($tab);
	sort($tab);
	return ($tab);
}
?>
