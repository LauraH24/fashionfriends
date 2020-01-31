<html>
	<head>
		<title>Testseite</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<?php
			if(!isset($_POST['senden']))
			{
				echo "<form action='' method='POST'>";
				echo "<input type='password' name='passwort'>";
				echo "<input type='submit' name='senden' value='Senden'>";
			}
			else
			{
				$passwort = $_POST['passwort'];
				$hash = hash('sha256', $passwort);
				
				echo "$passwort";
				echo "$hash";
			}
		?>
	</body>
</html>