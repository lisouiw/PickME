<?php 
	include("header.php");
?>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
	<div>
		<form method="POST">
			<label for="username">Username</label>
				<input type="text" name="username" placeholder="username">
			<label for="password">Password</label>
				<input type="password" name="password" placeholder="password">
			<label for="password">Verification</label>
				<input type="password" name="verification" placeholder="type the password again">
			<label for="email">Email</label>
				<input type="email" name="email" placeholder="email@xxxx.xxx">
		</form>
	</div>
</body>
</html>
<?php 
	include("footer.php");
?>