<html>
	<head>
		<meta charset="utf-8">
		<link href=".css" rel="stylesheet">
		<title> Fashionfriends Login </title>
	</head>
	<body>

		<h1> Willkommen bei FashionFriends! Hier kannst du dich einloggen:</h1>

		<a href="./start.php">Zurück zur Startseite</a></br></br>

		<?php

			if(!isset($_POST['senden']))
			{
				echo"<form action='' method='POST'>";
					echo"<table>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihre E-Mail an: </td>";
						echo"<td> <input type='text' name='email'/> </td>";
					echo"</tr>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihr Passwort ein: </td>";
						echo"<td> <input type='password' name='passwort'/> </td>";
					echo"</tr>";
					echo"</table> </br>";
			
					echo"<input type='submit' name='Senden'/></br>";
					echo"<input type='reset' name='Zurücksetzen'/></br>";
				echo"</form>";
			}
			else{
				$email = $_POST['email'];
				$passwort = $_POST['passwort'];

				$db = mysqli_connect('','','','');
		
				$sql = "SELECT * FROM  WHERE name = '$email' ";
				$res = mysqli_query ($db, $sql);
		
		
				while($datensatz = mysqli_fetch_assoc($res))
				{
			
					$email = "$datensatz[email]";
					$email = $email;
					$passwort = "$datensatz[passwort]";
				}
				if($email==$email && $passwort==$passwort)
				{
				echo "<h1>Vielen Dank für deine Anmeldung!</h1></br>";
				echo "<a href='.php'>Weiter zu deinem Profil</a>";
				}
				else
				{
				echo "<h1>Passwort oder E-Mail ist falsch!</h1></br>";
				echo "<a href='login.php'>Nochmal versuchen</a>";
			}
		?>
	</body>
</html>
