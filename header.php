<?php 
	session_start();
	if(isset($_POST['CREATE']))
	{
		header('Location: ./create.php');
	}
	else if (isset($_POST['CONNECTION']))
	{
		header('Location: ./connection.php');
	}
	else if (isset($_POST['GALERY']))
	{
		header('Location: ./galery.php');
	}
	else if (isset($_POST['LOGOUT']))
	{
		session_unset();
		session_destroy();
		header('Location: ./');
	}
?>
<html>
<head>
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="head">
	<div class="menu">
		<H1><a href="./">CAMAGRU</a></H1>
		<?php
			if(!empty($_SESSION[user])){
		?> 
			<form method="POST" class="button_h">
				<input type="submit" name="GALERY" value="GALERY">
				<input type="submit" name="LOGOUT" value="LOG OUT">
			</form>
		<?php
		  	}
			else{
		?>
			<form method="POST" class="button_h">
				<input type="submit" name="CONNECTION" value="CONNECTION">
				<input type="submit" name="CREATE" value="CREATE AN ACCOUNT">
			</form>
		<?php
			}
		 ?>
	</div>
</body>
</body>
</html>