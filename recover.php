<?php 
	include("header.php");
?>
<html>
<head>
	<title>Recover the Password</title>
</head>
<body>
	<div>
		Recover my Password
		<form method="POST">
			<label for="password">Password</label>
				<input type="password" name="password" placeholder="password">
			<label for="password">Verification</label>
				<input type="password" name="verification" placeholder="type the password again">
	</div>
</body>
</html>
<?php 
	include("footer.php");
?>