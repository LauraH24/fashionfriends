<html>
	<head>
		<title>FF - Beitrag erstellen</title>
		<meta charset='utf-8'>
		<link href='beitragerstellen1.css' rel='stylesheet'>
		<link rel="shortcut icon" type="image/x-icon" href="logo_neu.png">
	</head>
	<body>
		<form class="box" action="" method="post" enctype='multipart/form-data'>
	<h1>Beitrag erstellen</h1>
		<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
		echo "<h1>Bitte logge dich erst ein!</h1></br>";
		echo "<a href='login.php'>Login</a></br></br>";
		echo "<h1>Noch nicht registriert? Melde dich jetzt an!</h1></br>";
		echo "<a href='registrieren.php'>Registrieren</a>";
	}
	else
	{
		if(!isset($_POST['upload']))
		{
			echo"<input type='hidden' name='size' value='1000000'>";
			echo"<div>";
			echo"<input type='file' name='image'>";
			echo"</div>";
			echo"<div>";
			echo"<input type='text' name='image_text' placeholder='Bildbeschreibung'>";	
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
				echo "<h1>Bild wurde erfolgreich hochgeladen.</h1></br>";
				echo "<a href='profile.php'>Profil</a> <a href='explore.php'</a>";
				
				
			  }
		}
	}
		?>
	</form>
	</body>
</html>