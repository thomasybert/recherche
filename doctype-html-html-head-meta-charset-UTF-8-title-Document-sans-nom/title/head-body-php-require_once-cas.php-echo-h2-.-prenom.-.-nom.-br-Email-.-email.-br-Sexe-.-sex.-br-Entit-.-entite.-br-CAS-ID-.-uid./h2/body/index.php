<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document sans nom</title>
</head>

<body>
	<?php
		require_once('cas.php');

		echo '<h2>'.$prenom.' '.$nom.'<br>
		Email : '.$email.'<br>
		Sexe : '.$sex.'<br>
		Entité : '.$entite.'<br>
		CAS ID : '.$uid.'
		</h2>';
	?>
</body>
</html>
