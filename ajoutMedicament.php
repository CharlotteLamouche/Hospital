<html>
	<head>
		<title>Ajout Médicament</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
    	echo'<form method="POST" action="ajoutMedicament1.php"> 
	       Nom du médicament:
		<input type="text" name="nom" required><br>
	      Laboratoire du médicament:
		<input type="text" name="labo" required><br>
	      Nombre :
		<input type="text" name="nombre" required><br>';
	echo'<input type="submit"/></form>';

     
   pg_close($vConn);

?>
