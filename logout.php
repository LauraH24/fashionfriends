<html>
	<head>
		<meta charset='utf-8'>
		<meta charset="utf-8">
		<link href="logout.css" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
		<title>Logout</title>
		
	</head>
	<body>
		<form class="box" action="" method="post">
				<h1> Logout</h1></br>
		<?php
			session_start();
			session_destroy();
			echo "Logout erfolgreich.</br></br></br>";
			echo"<a href='login.php'>Login</a>";
		?>
	</body>
</html>