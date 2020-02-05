<html>
	<head>
		<meta charset="utf-8">
		<link href=".css" rel="stylesheet">
		<title>Login</title>
	</head>
	<body>

		<h1> Logge dich ein:</h1>

		<a href="start.php">Zurück zur Startseite</a></br></br>

		<?php
			if(!isset($_POST['senden']))
			{
				echo"<form action='' method='POST'>";
					echo"<table>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihre E-Mail an: </td>";
						echo"<td> <input type='email' name='email'/> </td>";
					echo"</tr>";
					echo"<tr>";
						echo"<td> Bitte geben sie ihr Passwort ein: </td>";
						echo"<td> <input type='password' name='passwort'/> </td>";
					echo"</tr>";
					echo"</table> </br>";
			
					echo"<input type='submit' name='senden'/></br>";
					echo"<input type='reset' name='Zurücksetzen'/></br>";
				echo"</form>";
			}
			else{
				session_start();
				$email = $_POST['email'];
				$pass = $_POST['passwort'];
				
				$_SESSION['email']=$email;
				$_SESSION['passwort']=$pass;

				$db = mysqli_connect('localhost','root','','bbs');
		
				$sql = "SELECT pass, id FROM ffbenutzer WHERE email='$email'";
				$res = mysqli_query ($db, $sql);
		
		
				while($datensatz = mysqli_fetch_assoc($res))
				{
			
					$pass2 = "$datensatz[pass]";
					$id = "$datensatz[id]";
				}
				
				$_SESSION['id']=$id;
				
				if($pass == $pass2)
				{
				echo "<h1>Vielen Dank für deine Anmeldung!</h1></br>";
				echo "<a href='profile.php'>Weiter zu deinem Profil</a>";
				echo "<a href='beitrag_erstellen.php'>Beitrag erstellen</a>";
				}
				else
				{
				echo "<h1>Passwort oder E-Mail ist falsch!</h1></br>";
				echo "<a href='login.php'>Erneut versuchen</a>";
				}
			}
		?>
	</body>
</html>