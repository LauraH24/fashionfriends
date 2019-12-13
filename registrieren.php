<html>
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<form action='' method='POST'>";
				echo "Vorname: <input type='text' name='vorname'></br>";
				echo "Nachname: <input type='text' name='nachname'></br>";
				echo "Benutzername: <input type='text' name='benutzername'></br>";
				echo "E-Mail: <input type='email' name='email'></br>";
				echo "Passwort: <input type='password' name='pass'></br>";
				echo "Passwort wiederholen: <input type='password' name='passwied'></br>";
				echo "<input type='submit' name='senden' value='Senden'>";
				echo "<input type='reset' name='loeschen' value='Löschen'>";
			}
			else
			{
				$vorname = $_POST['vorname'];
				$nachname = $_POST['nachname'];
				$benutzername = $_POST['benutzername'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$passwied = $_POST['passwied'];
				
				if($pass != $passwied)
				{
					echo "Die Passwörter stimmen nicht überein! Bitte versuche es erneut. </br>";
					echo "<a href='registrieren.php'>Erneut versuchen</a>";
				}
			$db = mysql_connect('localhost','root','','bbs');
			$sql = "SELECT benutzername FROM ffbenutzer WHERE benutzername=$benutzername";
			$res = mysql_query($db, $sql);
			$num = mysql_num_rows($res);
			if ($num == 1)
			{
				echo "Dieser Benutzername existiert bereits. Bitte wähle einen anderen Benutzernamen aus.</br>";
				echo "<a href='registrieren.php'>Erneut versuchen</a>";
			}
			mysql_close($db);
			}
		?>
	</body>
</html>