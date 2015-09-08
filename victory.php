<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	img {
		display: block;
		margin: auto;
	}
	button {
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-top: 50px;
	}
</style>
	<title>YOU DID IT</title>
</head>
<body>
<img src="YOU_DID_IT.jpg">
<button height="100" width="100" type="button" onclick="location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'">Clcik me for a prize!</button>
<audio id="sound" >
	<source src="victory.mp3" type="audio/mpeg">
</audio>
<script type="text/javascript">
	window.onload = function() {
		document.getElementById("sound").play();
	}
</script>
</body>
</html>