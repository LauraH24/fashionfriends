<html>
	<head>
		<meta charset="utf-8">
		<link href="explore.css" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
		<title>Explore</title>

	</head>
	<body>
		<h1> Explore Styles</h1>
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
			

			$sql="SELECT * FROM ffupload, ffbenutzer WHERE ffupload.id=ffbenutzer.id";

			$res = mysqli_query ($db, $sql);

			echo"<div id='content'>";
			while($datensatz=mysqli_fetch_assoc($res))
			{
				$profilbild= "$datensatz[profilbild]";
				$benutzername = "$datensatz[benutzername]";
				$image = "$datensatz[image]";
				$image_text = "$datensatz[image_text]";
				$head = "$datensatz[kopf]";
				$top = "$datensatz[oben]";
				$bottom = "$datensatz[unten]";
				$shoes = "$datensatz[schuhe]";
				

				  echo "<div id='img_div'>";
					echo "<img src='profiles/$profilbild' width='50' height='50'>";
					echo "<p>$benutzername</p>";
					echo "<img usemap='#$image' src='images/$image' width='518' height='777'>";
					echo "<p>$benutzername: $image_text</p>";
				  echo "</div></br></br></br>";
				 
				  
				echo"<map name='$image'>
					<area shape='rect' coords='100,40,400,200' href='$head' target='blank'>
					<area shape='rect' coords='100,200,400,350' href='$top' target='blank'>
					<area shape='rect' coords='100,350,400,700' href='$bottom' target='blank'>
					<area shape='rect' coords='100,700,400,777' href='$shoes' target='blank'>";
				}	
		

	}
		?>
	</body>
</html>