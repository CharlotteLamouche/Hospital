<html>
	<head>
		<title>Ajout Créneau</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vMed = "Select id,nom,prenom FROM tMedecin;"; 
	$vQueryMed=pg_query($vConn, $vMed);
	$vBat = "Select batiment from tSalle;";
	$vQueryBat=pg_query($vConn, $vBat);
	$vPat = "Select dossier,nom,prenom FROM tPatient;"; 
	$vQueryPat=pg_query($vConn, $vPat);
    	echo'<form method="POST" action="ajoutCreneau1.php"> 
	Jour:
   	 <input type="text" name="jour" required>
   	 Heure de début:
   	 <input type="text" name="hdebut" required>
     	Heure de fin:
   	 <input type="text" name="hfin" required>';
echo"Médecin:";    
echo'<select name="Medecin">';
   
    while ($vResult = pg_fetch_array($vQueryMed))

    {

?>

    <option value="<?php echo $vResult['id'];?>"><?php echo $vResult['id'],$espace,$vResult['nom'],$espace,$vResult['prenom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante

echo'<select name="Patient">';
while ($vResult2 = pg_fetch_array($vQueryPat)){

?>

    <option value="<?php echo $vResult2['dossier']; ?>"><?php echo $vResult2['nom'],$espace,$vResult2['prenom'],$espace,$vResult2['dossier']; ?></option> 
     
<?php 

    } 

	echo'</select>';

echo'<select name="Bat">';
while ($vResult1 = pg_fetch_array($vQueryBat))
	{

?>

    <option value="<?php echo $vResult1['batiment']; ?>"><?php echo $vResult1['batiment']; ?></option> 
     
<?php 

    } 
  
    echo'</select>';
	
	echo'<input type="submit"/></form>';

     
   pg_close($vConn);



?>
