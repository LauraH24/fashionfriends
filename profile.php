<html>
	<head>
		<meta charset='utf-8'>
		<link href='' rel='stylesheet'>
		<title>FashionFriends</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['email']))
			{
				echo "Bitte logge dich erst ein!";
				echo "<a href='login.php'>Login</a>";
				echo "<a href='registrieren.php'>Registrieren</a>";
			}
			else
			{
				$email = $_SESSION['email'];
				$passwort = $_SESSION['passwort'];
				
				echo "<a href='logout.php'>Logout</a>";
			}
		?>
	</body>
</html>