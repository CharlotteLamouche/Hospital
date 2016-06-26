<html>
	<head>
	<title>Ajout Salle Consultation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
		include "connect.php";
		$vConn = fConnect();
		$vBatiment = $_POST['Batiment'];
		$vNumero=$_POST['numero'];
		$vSql = "INSERT INTO tSalle values('$vNumero','$vBatiment');";
		$vSql1 = "Insert into tSalle_Consultation values ('$vNumero','$vBatiment');";
		$vQuery = pg_query($vConn, $vSql);
		$vQuery1= pg_query($vConn, $vSql1);
		pg_close($vConn);
	?>
	
</body>	

