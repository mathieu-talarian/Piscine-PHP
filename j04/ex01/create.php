<?PHP
if ($_POST[submit] == "OK")
{
	if (!$_POST[login] || !$_POST[passwd])
	{
		echo "Error\n";
		exit;
	}
	else
	{
		$e = array('login'=>$_POST[login], 'passwd'=> hash('whirlpool', $_POST[passwd]));
		$str = serialize($e);
		echo $str."\n";
		if (mkdir("../private"))
		{
			file_put_contents("../private/passwd", $str, FILE_APPEND);
		}
	}
}
?>
