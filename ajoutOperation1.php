<html>
	<head>
	<title>Ajout Salle Operation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
		include "connect.php";
		$vConn = fConnect();
		$vBatiment = $_POST['Batiment'];
		$vNumero=$_POST['numero'];
		$vsql3="Select numero from tSalle_operation where numero=$vNumero and batiment = '$vBatiment';";
		$vQuery3=pg_query($vConn,$vsql3);
		$vSql = "INSERT INTO tSalle values('$vNumero','$vBatiment');";
		$vSql1 = "Insert into tSalle_Operation values ('$vNumero','$vBatiment');";
		if (pg_num_rows($vQuery3)>0){
		echo "Cette salle d'opération existe déjà";
		}
		else{
		$vQuery = pg_query($vConn, $vSql);
		$vQuery1= pg_query($vConn, $vSql1);
		}
		pg_close($vConn);
	?>
	
</body>	

