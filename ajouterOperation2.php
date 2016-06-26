<html>
	<head>
	<title>Ajout Opération</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
include "connect.php";
$vConn = fConnect();
$jour = $_POST['jour'];
$hdeb = $_POST['hdeb'];
$Spe = $_POST['spe'];
$Bat = $_POST['batiment'];
$Patient = $_POST['patient'];
$salle=$_POST['Salle'];
$med=$_POST['medecin'];


$vSql = "INSERT INTO tOperation (jour, h_deb, specialite_requise, salle, batiment, patient) values('$jour','$hdeb','$Spe','$salle','$Bat','$Patient')";
$vQuery=pg_query($vConn, $vSql);

$id="select id from tOperation where tOperation.patient='$Patient' and tOperation.jour='$jour'";
$vQueryid=pg_query($vConn, $id);
$result=pg_fetch_array($vQueryid);


$vSql1 = "INSERT INTO tEffectue (medecin, operation) values ('$med','$result[id]')";
$vquery1=pg_query($vConn, $vSql1);
pg_close($vConn);
?>

