<html>
	<head>
		<title>Association patient/allergie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vAll = "Select nom from tAllergie;";
	$vPat = "Select nom,prenom,dossier from tPatient;"; 
	$vQueryAll=pg_query($vConn, $vAll);
	$vQueryPat=pg_query($vConn, $vPat);
    	echo'<form method="POST" action="assoPatient1.php">';
	
	echo "Allergie";
	echo'<select name="allergie">';
   
    while ($vResult = pg_fetch_array($vQueryAll))

    {

?>

    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
    	echo "Patient ayant cette allergie";

	echo'<select name="patient">';
   
    while ($vResult1 = pg_fetch_array($vQueryPat))

    {

?>

    <option value="<?php echo $vResult1['dossier']; ?>"><?php echo $vResult1['nom'],$espace,$vResult1['prenom'],$espace,$vResult1['dossier']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
	echo'<input type="submit"/></form>';

     
   pg_close($vConn);



?>
