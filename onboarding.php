<!DOCTYPE html>
<html>
<head>
<title>Onboarding page</title>
<style>

.main {
	text-align=center;
}

</style>
</head>
<body>

<div class="main">
<form name ="onboarding" action="accountcreation.php" method="post" autocomplete="off">
<fieldset><legend>Onboarding</legend>
<p>First Name: <input type="text" name="first"/></p>
<p>Last Name: <input type="text" name="last"/></p>
<p>Password: <input type="password" name="pw"/></p>
<p>Login name (First + Lastname): <input type="text" name="login"/></p>
<p>Department: <input type="text" name="department"/></p>
<p><input type="submit" name="submit" value="Create user"/></p>

</form>
</div>

</body>
</html>