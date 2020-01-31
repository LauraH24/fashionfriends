<html>
	<head>
		<meta charset="utf-8">
		<title>Bilder zufällig auswählen</title>
	</head>
	

	<body>

	<?php

	$var = rand(1,3);
	
	if($var == 1){
		echo '<img src="silas.png">';
	}
	if($var == 2){
		echo '<img src="party.jpg">';
	}
	if($var == 3){
		echo '<img src="balumama.jpg">';
	}
	
	
	?>
	
	</body>
</html>