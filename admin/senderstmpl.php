<!doctype html>
<html>
<head>
	<title></title>
</head>

<body>

	<h1>People who send me mail</h1>
	<?php 
	if ( $senders ) {
		foreach($senders as $user) {
			list($name, $email, $comments) = $user;
			echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
		}
	}else {
		echo "<li>No registered</li>";
	}
	?>

</body>
</html>