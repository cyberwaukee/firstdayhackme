<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 

	$password = $_GET['psswrd'];
	$page = $_GET['page'];
	$username = $_GET['username'];

	$host  = $_SERVER['HTTP_HOST'];
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

	function wrongPassword() {
		if($username == 'paul') {
		echo "<p>Login Failed, click the button to go back.</p>
			<button onclick='goBack()'>Click me</button>
			<script>
			function goBack() {
			history.go(-1);
		}
			</script>";
		}else {
			echo "<p>Login Failed, click the button to go back.</p>
			<button onclick='goBack()'>Click me</button>
			<script>
			function goBack() {
			history.go(-1);
		}
			</script>";
	}
}

	if ($username == 'paul' && $password == 'rememberpearlharbour' && $page == '6') {
		header("Location: http://$host$uri/whatupandrew.php");
		exit();
	}else {
		wrongPassword();
	}

?>
</body>
</html>