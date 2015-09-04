<!DOCTYPE html>
<html>
<style type="text/css">
	#htmlbutton {
		visibility: hidden;
	}
	#password {
		font-size: 20px;
	}
	#kidding {
		font-size: 6px;
	}
</style>
<head>
	<title>Andrew is one of the guys at the front</title>
</head>
<body>
<p>Welp, this is embarising. After you figured out how to get paul logged in, Angsty Admin Adam managed to make the login button disappear! </p>
<p id="password">(By the way the password is 'askdmlasmkksdfnskdfnskdfnskdfnksdfnskdfskdfnskdfskdfnskdf'</p>
<p id="kidding">*Just kdding it's 'Jim'</p>


<form id="form" action="checkpassword.php" method="post">
	Password: <input type="password" name="psswrd">
<input type="hidden" name="page" value="7">
<input id="htmlbutton" type="submit">
</form>
</body>
</html>