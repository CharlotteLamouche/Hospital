<html>
	<head>
	<title>Ajout Spécialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
		include "connect.php";
		$vConn = fConnect();
		$vNom = $_POST['nom'];
		$vType = $_POST['type'];
		$vsql1="Select nom from tSpecialite where nom='$vNom';";
		$vQuery1=pg_query($vConn,$vsql1);
		$result=pg_fetch_array($vQuery1);
		if (pg_num_rows($vQuery1)>0){
		echo "Cette spécialité existe déjà";
		}
		else{
		$vSql = "INSERT INTO tSpecialite values('$vNom','$vType');";
        	$vQuery = pg_query($vConn, $vSql);
		}

		pg_close($vConn);	
	?>
	
</body>
