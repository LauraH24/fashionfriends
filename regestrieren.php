<html>
<html lang="en" dir="ltr">
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
		<link href='registrieren2.css' rel='stylesheet' >
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
	</head>
	<body>
		<form class="box" action="" method="post" enctype='multipart/form-data'>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<h1>Registrieren bei FashionFriends</h1>";
				echo "<table>";
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
				echo "<td>Profilbild:</td><td><input type='file' name='image'></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><input type='submit' name='senden' value='Senden'></td>";
				echo "<td><input type='reset' name='loeschen' value='Löschen'></td>";
				echo "</tr>";
				echo "</form>";
				
				echo "</tr>";
				echo "</table>";
				
			}
			else
			{
				session_start();
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
				
								if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					$msg = "Image uploaded successfully";
				}else{
					$msg = "Failed to upload image";
				}
				

				$sql = "INSERT INTO ffbenutzer VALUES ('', '$vorname', '$nachname', '$benutzername', '$email', '$hash', '$image')";

				
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