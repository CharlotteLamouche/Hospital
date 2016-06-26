
<html>
	<head>
	<title>Ajout Batiment</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
	if(isset($_POST['batiment']))
	{
		include "connect.php";
		$vConn = fConnect();
		$vBatiment = $_POST['batiment'];
		$vsql1="Select nom from tBatiment where nom='$vBatiment';";
	$vQuery1=pg_query($vConn,$vsql1);
	$result=pg_fetch_array($vQuery1);
	if (pg_num_rows($vQuery1)>0){
	echo "Ce Batiment existe déjà";
	}
	else{
		$vSql = "INSERT INTO tBatiment values('$vBatiment');";
		$vQuery = pg_query($vConn, $vSql);
		 }
		pg_close($vConn);
	}	
	?>
	
</body>
</html>

