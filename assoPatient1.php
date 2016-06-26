<html>
	<head>
	<title>Association patient/allergie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

		include "connect.php";
		$vConn = fConnect();
	$vDossier = $_POST['patient'];
	$vAll = $_POST['allergie'];


	$vSql = "INSERT INTO tSouffre values('$vDossier','$vAll');";
        $vQuery = pg_query($vConn, $vSql);
		
		pg_close($vConn);	
	?>
	<p><a href="accueil.html">Revenir à l'accueil</a></p>
	<p><a href="assoPatient.php">Faire une autre association</a></p>

</body>
