<html>
	<head>
		<title>Passwort vergessen?</title>
		<meta charset='utf-8'>
		<link href='' rel='stylesheet'>
	</head>
	<body>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<form action='' method='POST'>";
				echo "<input type='email' name='email'></br>";
				echo "<input type='submit' name='senden' value='Senden'>";
				echo "</form";
			}
			else
			{
				$db = mysqli_connect('localhost','root','','bbs');
				
				$email = $_POST['email'];
				
				$sql = "SELECT pass from ffbenutzer WHERE email ='$email'";
				$res = mysqli_query($db, $sql);
				
				while($datensatz = mysqli_fetch_assoc($res))
				{
					$pass = "$datensatz[pass]";
				}
			
				mail($email, 'Vergessenes Passwort', 'Hallo, hier ist dein vergessenes Passwort: $pass. Schreibe dir es direkt auf!','From: Fashion Friends <heringlaura@web.de>\r\n Reply-To: heringlaura@web.de\r\n Content-Type: text/html\r\n');
			}
		?>
	</body>
</html>