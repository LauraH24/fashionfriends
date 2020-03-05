<html>
<html lang="en" dir="ltr">
	<head>
		<title>Registrier dich!</title>
		<meta charset='utf-8'>
		<link href='registrieren.css' rel='stylesheet' >
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
	</head>
	<body>
		<form class="box" action="" method="post" enctype='multipart/form-data'>
			<h1> Registrierung</h1></br>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<input type='text' name='vorname' placeholder='Vorname'>";
				echo "<input type='text' name='nachname' placeholder='Nachname'>";
				echo "<input type='text' name='benutzername' placeholder='Benutzername'>";
				echo "<input type='email' name='email' placeholder='Email'>";
				echo "<input type='password' name='pass' placeholder='Passwort'>";
				echo "<input type='password' name='passwied' placeholder='Passwort wiederholen'>";
				echo "<input type='file' name='image' placeholder='Profilbild hinzufügen'></br>";
				echo"<input type='submit' name='senden' value='Senden'/>";
				echo"<input type='reset' name='loeschen' value='Löschen'/>";	
				echo "</form>";
				
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