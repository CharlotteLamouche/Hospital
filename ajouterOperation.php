<html>
<head>
    <title>Page d'ajout d'une Opération</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
	
	include "connect.php";
	$cLigne='|';
	$espace=' ';
	$vConn = fConnect();
	$vSql = "Select nom FROM tSpecialite;"; 
	$vSql1 = "Select nom from tBatiment;";
	$vSql2 = "Select nom, prenom, dossier from tPatient;";
	$vSql3 = "Select id, nom, prenom from tMedecin;";
	$vQuery=pg_query($vConn, $vSql);
	$vQuery1=pg_query($vConn,$vSql1);
	$vQuery2=pg_query($vConn,$vSql2);
	$vQuery3=pg_query($vConn,$vSql3);
	echo'<form method="POST" action="ajouterOperation1.php"> 
	Jour:
   	 <input type="date" name="jour" required><br>
   	Heure de début:
   	 <input type="time" name="h_deb" required><br>';
echo'Spécialité :';
echo'<select name="Specialite">';
while ($vResult = pg_fetch_array($vQuery)){

?>

    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante






echo'<br>';
echo'Batiment :';
echo'<select name="Bat">';
while ($vResult1 = pg_fetch_array($vQuery1))
	{

?>

    <option value="<?php echo $vResult1['nom']; ?>"><?php echo $vResult1['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
echo'<br>';
echo'Patient :';
echo'<select name="Patient">';
while ($vResult2 = pg_fetch_array($vQuery2)){

?>

    <option value="<?php echo $vResult2['dossier']; ?>"><?php echo $vResult2['nom'],$espace,$vResult2['prenom'],$espace,$vResult2['dossier']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
echo'<br>';
echo'Medecin :';
echo'<select name="Medecin">';
while ($vResult3 = pg_fetch_array($vQuery3)){

?>

    <option value="<?php echo $vResult3['id']; ?>"><?php echo $vResult3['nom'],$espace,$vResult3['prenom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante






echo'<br>';
echo'<input type="submit"/></form>';

pg_close($vConn);



?>

	
