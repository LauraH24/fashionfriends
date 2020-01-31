<html>
	<header>
		<meta charset="utf-8">
		<link href=".css" rel="stylesheet">
		<title> Hilfs-Formular </title>
	</header>
	<body>
			<h1> Willkommen bei FashionFriends! Hier kannst du uns dein Problem sagen und wir werden dir helfen!</h1>

		<?php

			if(!isset($_POST['senden']))
			{
				echo"<form action='' method='POST'>";
					echo"<table>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihren Benutzernamen an: </td>";
						echo"<td> <input type='text' name='name'/> </td>";
					echo"</tr>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihre E-Mail an: </td>";
						echo"<td> <input type='email' name='email'/> </td>";
					echo"</tr>";
					echo"<tr>";
						echo"<td> Bitte geben sie das Thema an, welches zu ihrem Problem gehört: </td>";
						echo"<td> 	<form>";
									echo"<select name="Kategorie">";
										echo"<option value="Passwort">Passwort</option>";
										echo"<option value="Mein Konto verwalten">Mein Konto verwalten</option>";
										echo"<option value="Privatsphäre und Sicherheit">Privatsphäre und Sicherheit</option>";
										echo"<option value="Personen blockieren">Personen blockieren</option>";
										echo"<option value="Konto- und Benachrichtigungseinstellungen">Konto- und Benachrichtigungseinstellungen</option>";
										echo"<option value="Sonstiges">Sonstiges</option>";
									echo"</select>";
									echo"</form></td>";
					echo"</tr>";
					echo"<tr>";
						echo"<td> Bitte schreiben sie ihr Problem genauer: </td>";
						echo"<td> <input type='text' name='problem'/> </td>";
					echo"</tr>";
					echo"</table> </br>";
			
					echo"<input type='submit' name='Senden'/></br>";
					echo"<input type='reset' name='Zurücksetzen'/></br>";
				echo"</form>";
			}
			else{
				$email = $_POST['email'];
		
				
			}
		?>
		<a href="./start.php">Zurück zur Startseite</a></br></br>
	</body>
</html>