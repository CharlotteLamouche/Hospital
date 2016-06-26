<html>
<head>
    <title>Page d'ajout d'une Pescription</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
	
	include "connect.php";
	$vConn = fConnect();
	$espace=' ';
	$vSql ="Select id, nom, prenom from tMedecin";
	$vSql1="Select dossier, nom, prenom from tPatient";
	$vSql2="Select nom from tMedicament";
	$vQuery=pg_query($vConn, $vSql);
	$vQuery1=pg_query($vConn,$vSql1);
	$vQuery2=pg_query($vConn,$vSql2);
	echo'<form method="POST" action="ajoutPrescription1.php"> 
	Numéro:
   	 <input type="text" name="numero" required>';
	echo'<br>Médecin';
	echo'<select name="Medecin">';
	while ($vResult = pg_fetch_array($vQuery)){

	?>

	<option value="<?php echo $vResult['id']; ?>"><?php echo $vResult['nom'],$espace, $vResult['prenom']; ?></option> 
     
	<?php 

    	} 
  	
    	echo'</select>'; // fermeture de la liste déroulante
	
	echo'<br>Patient';
	echo'<select name="Patient"> <br>';
	while ($vResult1 = pg_fetch_array($vQuery1)){

	?>

    	<option value="<?php echo $vResult1['dossier']; ?>"><?php echo $vResult1['nom'],$vResult1['prenom']; ?></option> 
     
	<?php 

    	} 
  
    	echo'</select>'; // fermeture de la liste déroulante
	

	echo'<br>Médicament';	
	echo'<select name="Medicament"> <br>';
	while ($vResult2 = pg_fetch_array($vQuery2)){

	?>

    	<option value="<?php echo $vResult2['nom']; ?>"><?php echo $vResult2['nom']; ?></option> 
     
	<?php 

    	} 
  
    	echo'</select>'; // fermeture de la liste déroulante
	echo '<br>Debut:
   	 <input type="text" name="debut" required> <br>
	Fin:
   	 <input type="text" name="fin" required> <br>
	Nombre:
   	 <input type="text" name="nombre" required> <br>';
	echo'<input type="submit"/></form>';

pg_close($vConn);



?>


	
	
	
	





