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
			$sql_abfrage="SELECT $profilbild,$benutzername, $image, $image_text, $kommentare FROM ffbenutzer INNER JOIN ffupload ON $id=$id";
			while ($row = mysqli_fetch_array($result)) {
			echo"<div id='name und bild'>";
				echo"$benutzername";
				echo"$profilbild </br>";
			echo"</div>";
      		echo "<div id='img'>";
      			echo "$image >";
      		echo "</div>";
      		echo"<div id='likes'>";
      			echo"<img src="img1_on.jpg" onclick="switchImg(this)">";
    			echo"<img src="img2_on.jpg" onclick="switchImg(this)">";
      		echo"</div>";
      		echo"<div id='image text'>";
      			echo"$image_text </br>";
      		echo"</div>";
      		echo"<div id='kommentare'>";
      			echo"$kommentare";
      			echo"<form action='' method='POST'>";
      				echo"<input type='text' id='kommentar_schreiben' name='kommentar_schreiben'></br>";
      				echo"input type='submit' id='senden' name='senden'>";
      				echo"<input type='reset' id='loeschen' name='loeschen'>";
      			echo"</form>";
      		echo"</div>";
    		}
    	}
		else{
			session_start();
			$like = $_POST['like'];
			$kommentar_schreiben = $_POST['kommentar_schreiben'];
				
			$_SESSION['like']=$like;
			$_SESSION['kommentar_schreiben']=$kommentar_schreiben;

			$db = mysqli_connect('localhost','root','','bbs');

			$res = mysqli_query ($db, $sql);
		}
		?>
	</body>
</html>