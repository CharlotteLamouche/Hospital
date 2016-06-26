<html>
	<head>
	<title>Ajout Medecin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
	if(isset($_POST['nom']) 
    && isset($_POST['prenom']) 
    && isset($_POST['rue']) 
    && isset($_POST['nRue']) 
    && isset($_POST['cp']) 
    && isset($_POST['telephone']) 
    )
	{
	include "connect.php";
	$vConn = fConnect();
	$vNom = $_POST['nom'];
        $vPrenom = $_POST['prenom'];
        $vRue = $_POST['rue'];
        $vNRue = $_POST['nRue'];
        $vCP = $_POST['cp'];
        $vTelephone = $_POST['telephone'];
	$vSpe = $_POST['Specialite'];

	$vSql = "INSERT INTO tMedecin (nom, prenom, adresse_rue, adresse_numero, adresse_codepostal, numero_tel) values('$vNom','$vPrenom','$vRue','$vNRue','$vCP','$vTelephone');";
        $vQuery = pg_query($vConn, $vSql);
		

$id="select id from tMedecin where numero_tel='$vTelephone';";
$vQueryId=pg_query($vConn, $id);
$result=pg_fetch_array($vQueryId);
            $vSql1= "insert into tPossede values ('$result[id]','$vSpe');";
		$vQuery1 = pg_query($vConn, $vSql1);
    }
		
		pg_close($vConn);	
	?>
	
