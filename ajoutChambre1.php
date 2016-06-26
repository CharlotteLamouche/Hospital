<html>
	<head>
	<title>Ajout Chambre</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
		include "connect.php";
		$vConn = fConnect();
		$vBatiment = $_POST['Batiment'];
		$vNumero=$_POST['numero'];
		$vCapacite=$_POST['capacite'];
		$vsql3="Select numero from tChambre where numero=$vNumero and batiment = '$vBatiment';";
		$vQuery3=pg_query($vConn,$vsql3);
		$vSql = "INSERT INTO tSalle values('$vNumero','$vBatiment');";
		$vSql1 = "Insert into tChambre values ('$vNumero','$vBatiment','$vCapacite');";
		if (pg_num_rows($vQuery3)>0){
		echo "Cette chambre existe déjà";
		}
		else{
		$vQuery = pg_query($vConn, $vSql);
		$vQuery1= pg_query($vConn, $vSql1);
		}
		pg_close($vConn);
	?>
	
</body>	

