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
				echo "<h1>Bitte logge dich erst ein!</h1></br>";
				echo "<a href='login.php'>Login</a></br></br>";
				echo "<h3>Noch nicht registriert? Melde dich jetzt an!</h3></br>";
				echo "<a href='registrieren.php'>Registrieren</a>";
			}
			else
			{
				$email = $_SESSION['email'];
				$passwort = $_SESSION['passwort'];
				
				echo "<div id='profilbild'>";
				echo "<div id='benutzername'>";
				echo "<div id='bio'>";
				echo "<table>";
				echo "<th></th>";
				
				echo "<a href='logout.php'>Logout</a>";
			}
		?>
	</body>
</html>