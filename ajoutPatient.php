<html>
	<head>
		<title>Ajout Patient</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vSql1 = "Select nom from tBatiment;";
	$vQuery1=pg_query($vConn,$vSql1);

    	echo'<form method="POST" action="ajoutPatientinter.php"> 
	Numéro de dossier:
   	 <input type="text" name="dossier" required><br>
	Nom:
   	 <input type="text" name="nom" required><br>
   	 Prénom:
   	 <input type="text" name="prenom" required><br>
     	Rue:
   	 <input type="text" name="rue" required><br>
   	 Numéro de rue:
   	 <input type="text" name="nRue" required><br>
     	Code postal:
   	 <input type="text" name="cp" required><br>
   	 Telephone:
   	 <input type="text" name="telephone" required><br>';

	echo'<br>';
	echo'Batiment de la chambre :';
	echo'<select name="Bat" required>';
	while ($vResult1 = pg_fetch_array($vQuery1))
	{
	?>
    	<option value="<?php echo $vResult1['nom']; ?>"><?php echo $vResult1['nom']; ?></option> ";
    <?php
	}
	echo'</select> <br>';
	echo '<input type="submit"/></form>';

 
   pg_close($vConn);



?>
