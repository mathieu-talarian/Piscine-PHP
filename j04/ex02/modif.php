<?PHP
if ($_POST["submit"] === "OK")
{
	if (!$_POST["newpw"])
		echo "ERROR\n";
	else
	{
		$modify = FALSE;
		$pwd = hash('whirlpool', $_POST['newpw']);
		$oldpwd = hash("whirlpool", $_POST['oldpw']);
		$array = file_get_contents("../private/passwd");
		$test = unserialize($array);
		$i = 0;
		foreach ($test as $value)
		{
			if ($value['login'] === $_POST['login'] && $oldpwd === $value['passwd'])
			{
				if ($test[$i]['passwd'] = $pwd);
				{
					$seri = serialize($test);
					file_put_contents("../private/passwd", $seri);
					echo "OK\n";
					exit;
				}
			}
			$i++;
		}
		echo "ERROR\n";
	}
}
?>
