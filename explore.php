<html>
	<head>
		<meta charset="utf-8">
		<title> Explore Seite </title>
		<script>
			function switchImg(img){
    			img.src = img.src.match(/_on/) ? 
        		img.src.replace(/_on/, "_off") : 
        		img.src.replace(/_off/, "_on");
			}
		</script>
	</head>
	<body>
		<h1> Explore Seite </h1>
		<?php
		if(!isset($_POST['senden']))
		{
			$db = mysqli_connect('localhost','root','','bbs');

			$sql="SELECT ffbenutzer.profilbild,ffbenutzer.benutzername, ffupload.image, ffupload.image_text FROM ffbenutzer, ffupload";

			$res = mysqli_query ($db, $sql);

			while($datensatz=mysqli_fetch_assoc($res)){
				$profilbild= "$datensatz[profilbild]";
				$benutzername = "$datensatz[benutzername]";
				$image = "$datensatz[image]";
				$image_text = "$datensatz[image_text]";
			}

			echo"<h2> Fashion Friends </h2>";
			echo"<img src='logo_neu.png' name='logo'></br>";
			echo"<div id='name_bild'>";
				echo"$benutzername";
				echo"$profilbild </br>";
			echo"</div>";
      		echo "<div id='img'>";
      			echo "$image";
      		echo "</div>";
      		echo"<div id='image text'>";
      			echo"$image_text </br>";
      		echo"</div>";
    	}		
    	else{
			session_start();
				
			$_SESSION['$profilbild']=$profilbild;
			$_SESSION['$benutzername']=$benutzername;
			$_SESSION['$image']=$image;
			$_SESSION['$image_text']=$image_text;
		}
		?>
	</body>
</html>