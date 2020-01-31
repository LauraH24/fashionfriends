<html>
	<head>
		<meta charset='utf-8'>
		<title>Logout</title>
		<link href='' rel='stylesheet'>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			echo "Logout erfolgreich.</br>";
			echo "<a href='login.php'>Login</a>";
		?>
	</body>
</html>