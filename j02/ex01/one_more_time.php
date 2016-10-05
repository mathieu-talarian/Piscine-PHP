#!/usr/bin/php
<?PHP
if ($argv[1])
{
	$arr = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$str = trim($argv[1]);
	$tab = explode(" ", $str);
	$day = preg_match("/(([lL]un|[mM](ar|ercre)|[Jj]eu|[Vv]endre|[Ss]ame)di)|([Dd]imanche)/", $tab[0], $day_array);
	$date = preg_match("/^[1-9]$|(^0[1-9]{1}$)|(^[1-2][0-9]$)|(^3[0-1]$)/", $tab[1], $date_array);
	$month = preg_match("/(([Jj]anv|[Ff]evr)ier)|[Mm]ars|[Aa](vril|out)|[Mm]ai|([Jj]u(in|illet))|(([Ss]eptem|[Oo]cto|[Nn]ovem|[Dd]ecem)bre)/", $tab[2], $month_array);
	$year = preg_match("/^19[7-9][0-9]$|^[2-9][0-9][0-9][0-9]$/", $tab[3], $year_array);
	$time = preg_match("/([0-1][0-9]|2[0-3])[:]{1}([0-5][0-9])[:]{1}([0-5][0-9])/", $tab[4], $time_array);
	foreach($arr as $key=>$value)
	{
		if (strtolower($month_array[0]) == $value)
			$mm = $key + 1;
	}
	date_default_timezone_set("Europe/Paris");
	if ($day && $date && $month && $year && $time)
	{
		echo mktime ($time_array[1], $time_array[2], $time_array[3], $mm, $date_array[0],  $year_array[0]);
		echo "\n";
	}
}
?>
