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
				$db = mysqli_connect('localhost','root','','bbs');
				
				$vorname = $_POST['vorname'];
				$nachname = $_POST['nachname'];
				$benutzername = $_POST['benutzername'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$passwied = $_POST['passwied'];
				$name = $_FILES['profilbild']['name'];
				$type = $_FILES['profilbild']['type'];
				$profilbild = file_get_contents($_FILES['profilbild']['tmp_name']);
				$stmt = $db->prepare("insert into ffbenutzer values('',?,?,?)");
				$stmt->bindParam(1,$name);
				$stmt->bindParam(2,$type);
				$stmt->bindParam(3,$profilbild);
				$stmt->execute();
				
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
			
			mysqli_close($db);
			}
		?>
	</body>
</html>