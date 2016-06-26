<html>
	<head>
	<title>Ajout Patient</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php

include "connect.php";
$vConn = fConnect();
$dossier = $_POST['dossier'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nRue = $_POST['nRue'];
$Rue = $_POST['rue'];
$cp = $_POST['cp'];
$telephone = $_POST['telephone'];
$Bat = $_POST['Bat'];
$vSql="Select tSalle.numero from tSalle, tChambre where tSalle.batiment='$Bat' and tSalle.numero=tChambre.numero;"; 
$vQuery=pg_query($vConn, $vSql);
echo '<form method="POST" action="ajoutPatient1.php"> ';
echo "Rentrez le numéro de la salle du Batiment concerné";

echo'<select name="Salle">';
while ($vResult = pg_fetch_array($vQuery)){

?>

    <option value="<?php echo $vResult['numero']; ?>"><?php echo $vResult['numero']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante


echo '<input type="hidden" value="'.$dossier.'" name ="dossier"/>
<input type="hidden" value="'.$nom.'" name ="nom"/>
<input type="hidden" value="'.$prenom.'" name ="prenom"/>
<input type="hidden" value="'.$nRue.'" name ="nRue"/>
<input type="hidden" value="'.$Rue.'" name ="Rue"/>
<input type="hidden" value="'.$cp.'" name ="cp"/>
<input type="hidden" value="'.$telephone.'" name ="telephone"/>
<input type="hidden" value="'.$Bat.'" name ="Bat"/>';
echo'<input type="submit"/></form>';
pg_close($vConn);	
	?>
	
