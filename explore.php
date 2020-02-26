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

			$sql_abfrage="SELECT $profilbild,$benutzername, $id FROM ffbenutzer AND $image, $image_text, $id FROM ffupload AND $like_id FROM fflike AND $kommentar_id, $kommentar FROM ffkommentare AND SELECT COUNT $like_id FROM fflike";

			$res = mysqli_query ($db, $sql);
			$num=mysqli_num_rows($sql);

			echo"<h2> Fashion Friends </h2>";
			echo"<img src='logo_neu.png' name='logo'></br>";
			echo"<div id='name_bild'>";
				echo"$benutzername";
				echo"$profilbild </br>";
			echo"</div>";
      		echo "<div id='img'>";
      			echo "$image";
      		echo "</div>";
      		echo"<div id='likes'>";
      			echo"<img src='herz1.jpg' onclick='switchImg(this)'>";
    			echo"<img src='herz2.jpg' onclick='switchImg(this)'>";
      		echo"</div>";
      		echo"<div id='image text'>";
      			echo"$image_text </br>";
      		echo"</div>";
      		echo"<div id='kommentare'>";
      			echo"$kommentar";
      			echo"<form action='' method='POST'>";
      				echo"<input type='text' id='kommentar' name='kommentar'></br>";
      				echo"<input type='submit' id='senden' name='senden'>";
      				echo"<input type='reset' id='loeschen' name='loeschen'>";
      			echo"</form>";
      		echo"</div>";
    	}		
    		else{
			session_start();
			$like = $_POST['like_id'];
			$kommentar = $_POST['kommentar'];
			$kommentar_id = $_POST['kommentar_id'];
			$profilbild = $_POST['profilbild'];
			$benutzername = $_POST['benutzername'];
			$image = $_POST['image'];
			$image_text = $_POST['image_text'];
				
			$_SESSION['like_id']=$like_id;
			$_SESSION['kommentar']=$kommentar;
			$_SESSION['$kommentar_id']=$kommentar_id;
			$_SESSION['$profilbild']=$profilbild;
			$_SESSION['$benutzername']=$benutzername;
			$_SESSION['$image']=$image;
			$_SESSION['$image_text']=$image_text;
		}
		?>
	</body>
</html>