<html>
	<head>
	<title>Ajout Créneau</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
include "connect.php";
$vConn = fConnect();
$jour = $_POST['jour'];
$hdeb = $_POST['hdeb'];
$hfin = $_POST['hfin'];
$Bat = $_POST['batiment'];
$Patient = $_POST['patient'];
$salle=$_POST['Salle'];
$med=$_POST['medecin'];

$vSql = "INSERT INTO tCreneau (jour, h_deb, h_fin, salle, batiment, medecin) values('$jour','$hdeb','$hfin','$salle','$Bat','$med')";
$vQuery=pg_query($vConn, $vSql);

$id="select id from tCreneau where tCreneau.medecin='$med' and tCreneau.jour='$jour' and tCreneau.h_deb='$hdeb'";
$vQueryid=pg_query($vConn, $id);
$result=pg_fetch_array($vQueryid);
$duree=$hfin-$hdeb;

$vSql1 = "INSERT INTO tRDV values ('$result[id]', '$Patient', '$hdeb', '$duree')";
$vquery1=pg_query($vConn, $vSql1);
pg_close($vConn);
?>

