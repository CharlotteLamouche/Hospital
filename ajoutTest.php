
<html>
	<head>
	<title>Ajout Batiment</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

	// On affiche le morceau html qui suit uniquement si on accède à cette
	// page depuis accueil.html. Il faut que la variable $_POST[identifiant],
	// contenant le texte inséré par l'utilisateur dans le champs de texte
	// "identifiant".
	if(isset($_POST[batiment]))
	{
		include "connect.php";
		$vConn = fConnect();
		$vBatiment = $_POST['batiment'];
		$vSql = "INSERT INTO tBatiment values('$vBatiment');";
		$vQuery = pg_query($vConn, $vSql);
		pg_close($vConn);
	}	
	?>
	
</body>

