<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$myfile = fopen("delete.csv", "w") or die ("Unable to open file");
	$txt = '"username"';
	fwrite($myfile, $txt);
	$txt = "\n";
	fwrite($myfile, $txt);
	$txt = '"'. $username .'"';
	fwrite($myfile, $txt);
	fclose($myfile);
	echo "Running script";
	echo "<pre>";
	$script = Shell_Exec("powershell.exe -ExecutionPolicy Unrestricted -File C:\inetpub\wwwroot/deleteuser.ps1");
	echo $script;
	echo "</pre>";
}
?>

</body>
</html>