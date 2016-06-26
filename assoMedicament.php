<html>
	<head>
		<title>Association médicament/allergie</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vAll = "Select nom from tAllergie;";
	$vMed = "Select nom from tMedicament;"; 
	$vQueryAll=pg_query($vConn, $vAll);
	$vQueryMed=pg_query($vConn, $vMed);
    	echo'<form method="POST" action="assoMedicament1.php">';
	
	echo "Allergie";
	echo'<select name="allergie">';
   
    while ($vResult = pg_fetch_array($vQueryAll))

    {

?>

    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
    	echo "Medicament contre-indiqué";

	echo'<select name="medicament">';
   
    while ($vResult1 = pg_fetch_array($vQueryMed))

    {

?>

    <option value="<?php echo $vResult1['nom']; ?>"><?php echo $vResult1['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
	echo'<input type="submit"/></form>';

     
   pg_close($vConn);



?>
