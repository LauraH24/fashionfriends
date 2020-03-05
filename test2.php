<html>
	<head>
		<title>FF - Beitrag erstellen</title>
		<meta charset='utf-8'>
		<link href='beitragerstellen.css' rel='stylesheet'>
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
	</head>
	<body>
		<form class="box" action="" method="post">
	<h1>Beitrag erstellen</h1>
		<?php
		if(!isset($_POST['upload']))
		{
		echo"<form  method='POST' action='beitrag_erstellen.php' enctype='multipart/form-data'>";
			echo"<input type='hidden' name='size' value='1000000'>";
			echo"<div>";
			echo"<input type='file' name='image'>";
			echo"</div>";
			echo"<div>";
			echo"<textarea
				id='text' 
				cols='40' 
				rows='4' 
				name='image_text' 
				placeholder='Bildbeschreibung hinzufügen'></textarea>";
			echo "</br>";	
			echo "<input type='text' name='head' placeholder='Kopf'>";
			echo "<input type='text' name='top' placeholder='Oberteil'>";
			echo "<input type='text' name='bottom' placeholder='Unterteil'>";
			echo "<input type='text' name='shoes' placeholder='Schuhe'>";
			echo"</div>";
			echo"<div>";
			echo"<button type='submit' name='upload'>Upload</button>";
			echo"</div>";
		echo"</form>";
		}
		else
		{	
		session_start();
				$db = mysqli_connect('localhost','root','','bbs');
				
				$head = $_POST['head'];
				$top = $_POST['top'];
				$bottom = $_POST['bottom'];
				$shoes = $_POST['shoes'];
				
				$id = $_SESSION['id'];
				
			  // If upload button is clicked ...
			  if (isset($_POST['upload'])) {
				// Get image name
				$image = $_FILES['image']['name'];
				// Get text
				$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

				// image file directory
				$target = "images/".basename($image);

				$sql = "INSERT INTO ffupload (image, image_text, id, kopf, oben, unten, schuhe) VALUES ('$image', '$image_text','$id','$head','$top','$bottom','$shoes')";
				// execute query
				mysqli_query($db, $sql);

				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					$msg = "Image uploaded successfully";
				}else{
					$msg = "Failed to upload image";
				}
			  }
			  $result = mysqli_query($db, "SELECT * FROM ffupload");

			echo"<div id='content'>";
				while ($row = mysqli_fetch_array($result)) {
				  echo "<div id='img_div'>";
					echo "<img usemap'#map' src='images/".$row['image']."' width='518' height='777'>";
					echo "<p>".$row['image_text']."</p>";
				  echo "</div>";
				}

				echo"<map name='map'>";
					echo"<area shape='rect' coords='100,40,400,200' href='https://www.zalando.de/damen-home/' target='blank'>";
					echo"<area shape='rect' coords='100,200,400,350' href='$top' target='blank'>";
					echo"<area shape='rect' coords='100,350,400,700' href='$bottom' target='blank'>";
					echo"<area shape='rect' coords='100,700,400,777' href='$shoes' target='blank'>";
		}
		?>
	</form>
	</body>
</html>