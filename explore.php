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

			$sql="SELECT * FROM ffbenutzer, ffupload";

			$res = mysqli_query ($db, $sql);

			echo"<div id='content'>";
			while($datensatz=mysqli_fetch_assoc($res)){
				$profilbild= "$datensatz[profilbild]";
				$benutzername = "$datensatz[benutzername]";
				$image = "$datensatz[image]";
				$image_text = "$datensatz[image_text]";
				

				  echo "<div id='img_div'>";
					echo "<img src='profiles/$profilbild' width='50' height='50'>";
					echo "<p>$benutzername</p>";
					echo "<img usemap='#map' src='images/$image' width='518' height='777'>";
					echo "<p>$benutzername: $image_text</p>";
				  echo "</div></br></br></br>";
				 
				  
				echo"<map name='map'>
					<area shape='rect' coords='100,40,400,200' href='$head' target='blank'>
					<area shape='rect' coords='100,200,400,350' href='$top' target='blank'>
					<area shape='rect' coords='100,350,400,700' href='$bottom' target='blank'>
					<area shape='rect' coords='100,700,400,777' href='$shoes' target='blank'>";
				}	
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