<html>
	<head>
	<title>Ajout Allergie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

		include "connect.php";
		$vConn = fConnect();
		$vNom = $_POST['nom'];
		$vSql = "INSERT INTO tAllergie values('$vNom');";
        	$vQuery = pg_query($vConn, $vSql);
		
		pg_close($vConn);	
	?>
	
</body>
