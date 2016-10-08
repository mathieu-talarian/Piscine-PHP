<?PHP
if ($_POST[submit] == "OK")
{
	if (!$_POST[login] || !$_POST[passwd])
	{
		echo "ERROR";
		exit;
	}
	else
	{
		$e = array('login'=>$_POST[login], 'passwd'=> hash('whirlpool', $_POST[passwd]));
		$str = serialize($e);
		if (!file_exists("../private/"))
		{
			mkdir("../private", 0777, true);
			file_put_contents("../private/passwd", $str, FILE_APPEND);
			echo "OK";
		}
		else
		{
			$e = file_get_contents("../private/passwd");
			$t = unserialize($e);
			foreach ($t as $value)
			{
				if ($value[login] === $_POST[login])
				{
					echo "ERROR";
					exit;
				}
			}
			file_put_contents("../private/passwd", $str, FILE_APPEND);
			echo "OK";
		}
	}
}
?>
