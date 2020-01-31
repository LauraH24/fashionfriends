<html>
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
		<link href='registrieren_style.css' rel='stylesheet' >
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
	</head>
	<body>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<h1>Anmelden bei FashionFriends</h1>";
				echo "<table>";
				echo "<td><form method='POST' action='' enctype='multipart/form-data'></td>";
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
				echo "<td><input type='file' name='image'></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><input type='submit' name='senden' value='Senden'></td>";
				echo "<td><input type='reset' name='loeschen' value='Löschen'></td>";
				echo "</tr>";
				echo "</form>";
				
				echo "<td><img id='imageklein' src='user.png'></td>";
				echo "</tr>";
				echo "</table>";
				
			}
			else
			{
				seesion_start();
				$db = mysqli_connect('localhost','root','','bbs');
				
				$vorname = $_POST['vorname'];
				$nachname = $_POST['nachname'];
				$benutzername = $_POST['benutzername'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$hash = hash('sha256',$pass);
				$passwied = $_POST['passwied'];
				$image = $_FILES['image']['name'];
				$target = "profiles/".basename($image);
				
				$_SESSION['vorname']=$vorname;
				$_SESSION['nachname']=$nachname;
				$_SESSION['benutzername']=$benutzername;
				$_SESSION['email']=$email;
				$_SESSION['pass']=$pass;
				$_SESSION['image']=$image;

				$sql = "INSERT INTO ffbenutzer VALUES ('', '$vorname', '$nachname', '$benutzername', '$email', '$pass', '$image')";
				
				mysqli_query($db, $sql);
  
				$result = mysqli_query($db, "SELECT * FROM ffbenutzer");
								if($pass != $passwied)
				{
					echo "Die Passwörter stimmen nicht überein! Bitte versuche es erneut. </br>";
					echo "<a href='registrieren.php'>Erneut versuchen</a>";
				}

			
			mysqli_close($db);
			echo "<img src='$target'></br></br></br>";
			echo "<h1>Willkommen bei FashionFriends, $vorname!</h1></br></br>";
			echo "<a href='profile.php'>Trends entdecken</a>";

			}
		?>
	</body>
</html>