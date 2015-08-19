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

if ($page == 1) {
	if ($password == 'koolkat') {
	header("Location: http://localhost:93/hackme/next.php");
	exit();
}
	else {
		wrongPassword();
	}
}

elseif ($page == 2) {
	# code...
}


else{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit();
}


 ?>
</body>
</html>