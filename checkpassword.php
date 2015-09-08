<!DOCTYPE html>
<html>
<body>
<?php 
$password = $_POST['psswrd'];
$page = $_POST['page'];

$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

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
	header("Location: http://$host$uri/next.php");
	exit();
}
elseif ($page == 2 && $password == 'nerds4life') {
	header("Location: http://$host$uri/javascriptisfun.php");
	exit();
}elseif ($page == 3 && substr($password, 0, 14) == '<script>alert(' && substr($password, strlen($password)-9, strlen($password)) == '</script>') {
	header("Location: http://$host$uri/describethenumbers.php");
	exit();
}elseif ($page == 4 && $password == '312211') {
	header("Location: http://$host$uri/mathguruorcheated.php");
	exit();
}elseif ($page == 5 && $password == 'password') {
	header("Location: http://$host$uri/destroyerofimages.php");
	exit();
}elseif ($page == 7 && $password == 'Jim') {
	header("Location: http://$host$url/victory.php");
}
else{
	wrongPassword();
}
 ?>
</body>
</html>
