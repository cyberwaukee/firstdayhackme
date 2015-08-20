<!DOCTYPE html>
<html>
<head>
	<title>Level 2</title>
</head>
<body>
<p>Ayy, you found the password. Can you find the next one?</p>

<form id="form" action="checkpassword.php" method="post">
	Password: <input type="password" name="psswrd">
<input type="hidden" name="page" value="2">
<input type="submit"><br>
</form>
<script type="text/javascript">
	var x = document.getElementById('form');
	char pass = x.elements[0].value;
	if (pass == 'nerds4life') {
		//Correct Password!
	};
</script>
</body>
</html>