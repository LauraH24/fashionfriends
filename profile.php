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
				$emails = $_SESSION['email'];
				$passwort = $_SESSION['passwort'];
				
				$db = mysqli_connect('localhost','root','','bbs');
				
				$sql = "SELECT * FROM ffbenutzer WHERE email='$emails'";
				$res = mysqli_query($db, $sql);
				
				while($datensatz = mysqli_fetch_assoc($res))
				{
					$id = "$datensatz[id]";
					$vorname = "$datensatz[vorname]";
					$nachname = "$datensatz[nachname]";
					$benutzername = "$datensatz[benutzername]";
					$email = "$datensatz[email]";
					$pass = "$datensatz[pass]";
					$profilbild = "$datensatz[profilbild]";
				}
				echo "$benutzername</br>";
				echo "<img src='profiles/$profilbild'></br>";
				echo "So stylt sich $vorname:</br>";
					
				
				$ausgabe = "SELECT * FROM ffupload WHERE id=$id";
				$ausres = mysqli_query($db, $ausgabe);
				
				
				while($datensatz = mysqli_fetch_assoc($ausres))
				{
					$nr = "$datensatz[nr]";
					$image = "$datensatz[image]";
					$image_text = "$datensatz[image_text]";
					$id = "$datensatz[id]";
					$kopf = "$datensatz[kopf]";
					$oben = "$datensatz[oben]";
					$unten = "$datensatz[unten]";
					$schuhe = "$datensatz[schuhe]";
					
					echo "<img src='images/$image'></br>";
					echo "<p>$image_text</p>";
					
					echo"<map name='map'>";
						echo"<area shape='rect' coords='100,40,400,200' href='$kopf' target='blank'>";
						echo"<area shape='rect' coords='100,200,400,350' href='$oben' target='blank'>";
						echo"<area shape='rect' coords='100,350,400,700' href='$unten' target='blank'>";
						echo"<area shape='rect' coords='100,700,400,777' href='$schuhe' target='blank'>";
					
				}
				echo "<a href='explore.php'>Entdecke Trends</a>";
				echo "<a ref='beitrag_erstellen.php'>Beitrag erstellen</a>";
				echo "<a href='logout.php'>Logout</a>";
			}
		?>
	</body>
</html>