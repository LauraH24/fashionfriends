<html>
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
		<link href='registrieren_style.css' rel='stylesheet' >
	</head>
	<body>
	<h1>Anmelden bei FashionFriends</h1>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<table>";
				echo "<td><form action='' method='POST' ectype='multipart/form-data'></td>";
				echo "<tr>";
				echo "<td>Vorname:</td><td><input type='text' name='vorname'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Nachname:</td><td><input type='text' name='nachname'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Benutzername:</td><td><input type='text' name='benutzername'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>E-Mail:</td><td><input type='email' name='email'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Passwort:</td><td><input type='password' name='pass'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Passwort wiederholen:</td><td><input type='password' name='passwied'></br></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><input type='submit' name='senden' value='Senden'></td>";
				echo "<td><input type='reset' name='loeschen' value='Löschen'></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><input type='file' name='profilbild'></td>";
				echo "</form>";
				
				echo "<td><img id='imageklein' src='user.png'></td>";
				echo "</tr>";
				echo "</table>";
				
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
				
				$target = "profiles/".basename($profilbild);
				
				
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
			
			move_uploaded_file($_FILES['image']['tmp_name'], $target);
			
			mysqli_close($db);
			echo "<img id='imagegross' src='$profilbild'></br></br></br>";
			echo "<h1>Willkommen bei FashionFriends, $vorname!</h1></br></br>";
			echo "<a href=''>Trends entdecken</a>";
			}
		?>
	</body>
</html>