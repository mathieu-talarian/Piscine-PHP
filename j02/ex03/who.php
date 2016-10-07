#!/usr/bin/php
<?PHP
	date_default_timezone_set("Europe/Paris");
	$usr = get_current_user();
	$fd = file_get_contents("/var/run/utmpx");
	$sub = substr($fd, 1256);
	$ret = array();
	while ($sub != NULL)
	{
		$arr = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $sub);
		$user = trim($arr[user]);
		$t = $arr[type];
		if ($user == $usr && $t == 7)
		{
			$date = date("M  j H:i", $arr["time1"]);
			$line = (trim($arr[line])) . "  ";
			$user = (trim($arr[user])) . " ";
			$tab = array($user.$line.$date);
			$ret = array_merge($ret, $tab);
		}
		$sub = (substr($sub, 628));
	}
	foreach($ret as $key)
		echo"$key\n";
?>
