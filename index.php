<?php
include('config.php');
 ?>

<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
	<title>Únete a yeira e-learning</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
	<link href="styles.css" rel="stylesheet" type="text/css" />	
</head>
<body>
	<div class="bg">
		<div class="bg-inner">
			<div class="main"><img class="logo" src="logo.png"/>
			<div class="info">
				<h2>Únete a yeira en slack</h2>
				<h4>
					Hablemos de e-learning
				</h4>
			</div>
			<form action="register.php" method="POST">
			<input class="email" type="text" placeholder="Email" name="email"><input class="button" type="submit" name="submit" value="Únete">
			</form>
			<div class="info-bottom">¿Necesitas ayuda? Contacta a <a href="mailto:<?php echo $GLOBALS['contactEmail']; ?>"><?php echo $GLOBALS['contactName']; ?></a>.
				</div>
			</div>
		</div>
	</div>
</body>
</html>