<!DOCTYPE html>
<html>
<body>
<?php 
$password = $_POST['psswrd'];
$page = $_POST['page'];

function wrongPassword() {
	echo "<script>
		if (confirm('That is not the right password!')) {
			history.go(-1);
		}else{
			history.go(-1);
		}
	</script>";
}

if ($page == 1 && $password == 'koolkat') {
	header("Location: http://localhost:93/hackme/next.php");
	exit();
}
elseif ($page == 2 && $password == 'nerds4life') {
	header("Location: http://localhost:93/hackme/javascriptisfun.php");
	exit();
}elseif ($page == 3 && substr($password, 0, 14) == '<script>alert(' && substr($password, strlen($password)-9, strlen($password)) == '</script>') {
	echo 'yay';
}
else{
	//wrongPassword();
	echo "" + substr($password, 0, 14);
	echo "<br>";
	echo "$password";
	//echo "" + substr($password, strlen($password)-9, strlen($password);
}
 ?>
</body>
</html>