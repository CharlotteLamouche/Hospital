<html>
	<head>
	<title>Ajout Patient</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

		include "connect.php";
		$vConn = fConnect();
	$vDossier = $_POST['dossier'];
	$vNom = $_POST['nom'];
        $vPrenom = $_POST['prenom'];
        $vRue = $_POST['Rue'];
        $vNRue = $_POST['nRue'];
        $vCP = $_POST['cp'];
        $vTelephone = $_POST['telephone'];
	$vBat = $_POST['Bat'];
	$vSalle = $_POST['Salle'];
	$vsql1="Select dossier from tPatient where dossier='$vDossier';";
	$vQuery1=pg_query($vConn,$vsql1);
	$result=pg_fetch_array($vQuery1);
	$vsql2="Select count(*) as total from tPatient where chambre='$vSalle' AND batiment='$vBat';";
	$vQuery2=pg_query($vConn,$vsql2);
	$vsql3="Select capacite_max from tChambre where numero='$vSalle' AND batiment='$vBat';";
	$vQuery3=pg_query($vConn,$vsql3);
	if (pg_num_rows($vQuery1)!=0){
	echo "Ce numéro de dossier existe déjà";
	}
	else{
	while($vresult3 = pg_fetch_array($vQuery3)) {
	while ($vresult2 = pg_fetch_array($vQuery2)){
	if($vresult2['total']<$vresult3['capacite_max']){
	$vSql = "INSERT INTO tPatient (dossier,nom, prenom, rue, num_rue, code_postal, telephone, chambre, batiment) values('$vDossier','$vNom','$vPrenom','$vRue','$vNRue','$vCP','$vTelephone','$vSalle','$vBat');";
        $vQuery = pg_query($vConn, $vSql);}
	else {
	echo "La chambre est pleine";}
	}
	}
	}
		
		pg_close($vConn);
		
	?>
	
</body>
