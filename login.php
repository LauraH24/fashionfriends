<html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link href="login.css" rel="stylesheet">
		<title>Login</title>
	</head>
	<body>

	<form class="box" action="" method="post">
		<h1> Login</h1></br>

		<?php
			if(!isset($_POST['senden']))
			{
					
						echo "<input type='email' name='email' placeholder='Email'>";
						echo "<input type='password' name='passwort' placeholder='Passwort'></br>";
						echo"<input type='submit' name='senden' value='Login'/>";
						echo"<input type='reset' name='Zurücksetzen'/></br>";
				echo"</form>";
			}
			else{
				session_start();
				$email = $_POST['email'];
				$pass = $_POST['passwort'];
				$hash = hash('sha256',$pass);
				
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
				
				if($hash == $pass2)
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
	</form>
		
	</body>
</html>