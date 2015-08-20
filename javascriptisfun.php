<!DOCTYPE html>
<html>
<head>
	<title>Level 3</title>
</head>
<body>
<p>Oh no! Angsty Admin Adam left a XSS (Cross Site Scripting) Vulnerability
in this website, see if you can put in a javascript alert function into the field below.</p>
<form id="form" action="checkpassword.php" method="post">
	Code: <input type="text" name="psswrd">
<input type="hidden" name="page" value="1">
<input type="submit">
</form>
</body>
</html>