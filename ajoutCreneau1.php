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
$hdeb = $_POST['hdebut'];
$hfin = $_POST['hfin'];
$Bat = $_POST['Bat'];
$Patient = $_POST['Patient'];
$Medecin = $_POST['Medecin'];
$vSql="Select tSalle.numero from tSalle, tSalle_Consultation where tSalle.batiment='$Bat' and tSalle.numero=tSalle_Consultation.numero;"; 
$vQuery=pg_query($vConn, $vSql);
echo '<form method="POST" action="ajoutCreneau2.php"> ';
echo "Rentrez le numéro de la salle du Batiment concerné";

echo'<select name="Salle">';
while ($vResult = pg_fetch_array($vQuery)){

?>

    <option value="<?php echo $vResult['numero']; ?>"><?php echo $vResult['numero']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante


echo '<input type="hidden" value="'.$jour.'" name ="jour"/>
<input type="hidden" value="'.$hdeb.'" name ="hdeb"/>
<input type="hidden" value="'.$hfin.'" name ="hfin"/>
<input type="hidden" value="'.$Bat.'" name ="batiment"/>
<input type="hidden" value="'.$Patient.'" name ="patient"/>
<input type="hidden" value="'.$Medecin.'" name ="medecin"/>';
echo'<input type="submit"/></form>';
pg_close($vConn);	
	?>
	
