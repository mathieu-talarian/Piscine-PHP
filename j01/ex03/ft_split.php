<?PHP
function ft_split($str)
{
	if ($str)
	{
	$s = trim($str);
	$tab = explode(" ", $s);
	$tab = array_filter($tab);
	sort($tab);
	return ($tab);
	}
	return NULL;
}
?>
