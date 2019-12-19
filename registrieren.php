<html>
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<form action='' method='POST' ectype='multipart/form-data'>";
				echo "Vorname: <input type='text' name='vorname'></br>";
				echo "Nachname: <input type='text' name='nachname'></br>";
				echo "Benutzername: <input type='text' name='benutzername'></br>";
				echo "E-Mail: <input type='email' name='email'></br>";
				echo "Passwort: <input type='password' name='pass'></br>";
				echo "Passwort wiederholen: <input type='password' name='passwied'></br>";
				echo "<input type='submit' name='senden' value='Senden'>";
				echo "<input type='reset' name='loeschen' value='Löschen'>";
				echo "<input type='file' name='profilbild'>";
				echo "</form>";
				
			}
			else
			{
				$target = "images/".basename($_FILES['profilbild']['name']);
				$db = mysqli_connect('localhost','root','','bbs');
				
				$vorname = $_POST['vorname'];
				$nachname = $_POST['nachname'];
				$benutzername = $_POST['benutzername'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$passwied = $_POST['passwied'];
				$profilbild = $_FILES['profilbild']['name'];
				
				
				if($pass != $passwied)
				{
					echo "Die Passwörter stimmen nicht überein! Bitte versuche es erneut. </br>";
					echo "<a href='registrieren.php'>Erneut versuchen</a>";
				}
			$sql = "SELECT benutzername FROM ffbenutzer WHERE benutzername=$benutzername";
			$res = mysqli_query($db, $sql);
			$num = mysqli_num_rows($res);
			if ($num == 1)
			{
				echo "Dieser Benutzername existiert bereits. Bitte wähle einen anderen Benutzernamen aus.</br>";
				echo "<a href='registrieren.php'>Erneut versuchen</a>";
			}
			$insert = "INSERT INTO ffbenutzer VALUES ('$vorname','$nachname','$benutzername','$email','$pass','$profilbild')";
			$inres = mysqli_query($db, $insert);
			$innum = mysqli_query($inres);
			
			move_uploaded_file($_FILES['profilbild']['tmp_name'], $target);
			
			mysqli_close($db);
			}
		?>
	</body>
</html>