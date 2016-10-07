#!/usr/bin/php
<?PHP

function fctd($str)
{
	return(strtoupper($str[0]));
}

function fct($str)
{
	$pattern = array("/.+?>\K(.|\s|\S)*?</", "/title=\K(.|\s|\S)+?>/");
	return (preg_replace_callback($pattern, "fctd", $str[0]));
}

if ($argc == 2)
{
	if ($str = (file_get_contents($argv[1])))
	{
		//	echo "$str\n";
		$a = preg_replace_callback("/<a href(.|\s)(.|\s)+?\/a>/", "fct", $str);
		echo ("$a\n");
	}
	fclose($fd);
}
?>
