<?php 
	include("header.php");
?>
<html>
<head>
	<title>Connection</title>
	<link rel="stylesheet" href="./css/page.css">
</head>
<body style="text-align: center;">
	<div class="connection">
		<div>Connection</div>
		<form method="POST">
			<label for="username">Username</label>
				<input type="text" name="username" placeholder="username">
			<label for="password">Password</label>
				<input type="password" name="password" placeholder="password">
			<div><a class="link" href="./mail.php">Forgot your Password?</a></div>
		</form>
	</div>
</body>
</html>
<?php 
	include("footer.php");
?>