<html>
	<head>
	<title>Ajout Opération</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php 

include "connect.php";
$vConn = fConnect();
$num=$_POST['numero'];
$med=$_POST['Medecin'];
$pat=$_POST['Patient'];
$medic=$_POST['Medicament'];
$debut=$_POST['debut'];
$fin=$_POST['fin'];
$nombre=$_POST['nombre'];
$vSql = "INSERT INTO tPrescription (numero, medecin, patient) values ('$num','$med','$pat')";
$vQuery=pg_query($vConn, $vSql);
$vSql1 = "Insert into tDuree (numero, nom, debut, fin, nombre) values ('$num','$medic','$debut','$fin','$nombre')";
$vQuery1=pg_query($vConn, $vSql1);
pg_close($vConn);
?>
