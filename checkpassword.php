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
}else{
	wrongPassword();
}
 ?>
</body>
</html>