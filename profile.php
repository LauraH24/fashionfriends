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
				$email = $_SESSION['email'];
				$passwort = $_SESSION['passwort'];
				
				$db = mysqli_connect('localhost','root','','bbs');
				
				$sql = "SELECT * FROM ffbenutzer WHERE email = '$email'";
				$res = mysqli_query($db, $sql);
				
				while($datensatz = mysqli_fetch_assoc($res))
				{
					$id = "datensatz[id]";
					$vorname = "datensatz[vorname]";
					$nachname = "datensatz[nachname]";
					$benutzername = "datensatz[benutzername]";
					$profilbild = "datensatz[profilbild]";
				}
				
				$id = $_SESSION['id'];
				$vorname = $_SESSION['vorname'];
				$nachname = $_SESSION['nachname'];
				$benutzername = $_SESSION['benutzername'];
				$profilbild = $_SESSION['profilbild'];
				
				echo "<div id='profilbild'>";
					echo "<img src='profiles/'$profilbild''>";
				echo "</div>";
				echo "<div id='benutzername'>";
					echo "<h3>$benutzername</h3></br></br>";
					echo "<h4>$vorname $nachname</h4>";
				echo "</div>";
				echo "<div id='bio'>";
					echo "So stylt sich $vorname:</br>";
					
				echo "</div>"
				
				
				echo "<table>";
				echo "<tr>";
				echo "<th> </th>";
				echo "</tr>";
				echo "<td><img src=''</td>";
				echo "<td><img src=''</td>";
				echo "<td><img src=''</td>";
				echo "</tr>";
				echo "</table>";
				
				echo "<a href='logout.php'>Logout</a>";
			}
		?>
	</body>
</html>