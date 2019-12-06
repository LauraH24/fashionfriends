<html>
	<head>
		<title>FF - Beitrag erstellen</title>
		<meta charset='utf-8'>
		<link href='style_start.css' rel='stylesheet'>
	</head>
	<body>
		<?php
			if (!isset($_POST['senden']))
			{
				echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>";
				echo "<input type='file' name='bild'></br>";
				echo "<input type='text' name='beschreibung' placeholder='Bildbeschreibung hinzufügen'></br>";
				echo "<input type='submit' name='senden' value='Erstellen'>";
				echo "</form>";
			}
		?>
	</body>
</html>