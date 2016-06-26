<html>
	<head>
	<title>Association médicament/allergie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

		include "connect.php";
		$vConn = fConnect();
	$vMed = $_POST['medicament'];
	$vAll = $_POST['allergie'];


	$vSql = "INSERT INTO tEst_contre_indique values('$vMed','$vAll');";
        $vQuery = pg_query($vConn, $vSql);
		
		pg_close($vConn);	
	?>
	<p><a href="accueil.html">Revenir à l'accueil</a></p>
	<p><a href="assoMedicament.php">Faire une autre association</a></p>
	
</body>
