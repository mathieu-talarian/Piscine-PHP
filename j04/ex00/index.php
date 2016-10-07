<?PHP
session_start();
if ($_GET[submit])
{
	if ($_GET[submit] === "OK" && $_GET[login] && $_GET[password])
	{
		$_SESSION[login] = $_GET[login];
		$_SESSION[password] = $_GET[password];
	}
}
?>
<html><body>
<form action="index.php" method="get">
Identifiant : <input type="text" name="login" value="<?PHP echo $_SESSION[login]; ?>"><br />
Mot de passe :<input type="text" name="password" value="<?PHP echo $_SESSION[password]; ?>"><br />
<input type="submit" name="submit" value="OK">
</form>
</body></html>
