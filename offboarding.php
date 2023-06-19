<!DOCTYPE html>
<html>
<head>
<title>Offboarding page</title>
<style>

.main {
	text-align=center;
}

</style>
</head>
<body>

<div class="main">
<form name ="offboarding" action="accountdeletion.php" method="post" autocomplete="off">
<fieldset><legend>Offboarding</legend>
<p>Login username: <input type="text" name="username"/></p>
<p>Are you sure you want to delete this user?  <input type="checkbox"  name="check" required/></p>
<p><input type="submit" name="submit" value="Delete user"/></p>

</form>
</div>

</body>
</html>