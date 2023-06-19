<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['submit'])) {
	$firstname = $_POST['first'];
	$lastname = $_POST['last'];
	$password = $_POST['pw'];	
	$login = $_POST['login'];	
	$department = $_POST['department'];
	$myfile = fopen("account.csv", "w") or die ("Unable to open file");
	$txt = '"firstname","lastname","username","department","password"';
	fwrite($myfile, $txt);
	$txt = "\n";
	fwrite($myfile, $txt);
	$txt = '"'. $firstname . '"' . ',' . '"' . $lastname. '"' . ',' . '"' . $login . '"' . ',' . '"' . $department . '"'. ',' . '"'.$password . '"';
	fwrite($myfile, $txt);
	fclose($myfile);
	echo "Running script";
	echo "<pre>";
	$script = Shell_Exec("powershell.exe -ExecutionPolicy Unrestricted -File C:\inetpub\wwwroot/createuser.ps1");
	echo $script;
	echo "</pre>";
}
?>

</body>
</html>