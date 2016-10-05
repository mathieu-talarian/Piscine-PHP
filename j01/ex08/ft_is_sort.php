<?PHP
function ft_is_sort($tab)
{
	if ($tab)
	{
		$arr = $tab;
		sort($arr);
		$result = array_diff_assoc($arr, $tab);
		$a = count($result);
		if ($a == 0)
			return (1);
		return (0);
	}
	return (0);
}
?>
