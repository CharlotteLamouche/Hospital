<html>
	<head>
	<title>Ajout Médicament</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
		include "connect.php";
		$vConn = fConnect();
		$vNom = $_POST['nom'];
        $vLabo= $_POST['labo'];
        $vNombre = $_POST['nombre'];
	$vsql1="Select nom from tMedicament where nom='$vNom';";
	$vQuery1=pg_query($vConn,$vsql1);
	$result=pg_fetch_array($vQuery1);
	if (pg_num_rows($vQuery1)){
	echo "Ce medicament existe déjà";
	}
	else{

	$vSql = "INSERT INTO tMedicament values('$vNom','$vLabo','$vNombre');";
        $vQuery = pg_query($vConn, $vSql);
	}

		pg_close($vConn);	
	?>
</body>
