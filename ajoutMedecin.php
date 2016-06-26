
   	<html>
	<head>
		<title>Ajout Médecin</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vSql = "Select nom FROM tSpecialite;"; 
	$vQuery=pg_query($vConn, $vSql);
    	echo "Quelle spécialité exerce ce médecin ? (optionnel)";
    	echo'<form method="POST" action="ajoutMedecin1.php"> 
	Nom:
   	 <input type="text" name="nom" required> <br>
   	 Prénom:
   	 <input type="text" name="prenom" required> <br>
     	Rue:
   	 <input type="text" name="rue" required> <br>
   	 Numéro de rue:
   	 <input type="text" name="nRue" required> <br>
     	Code postal:
   	 <input type="text" name="cp" required> <br>
   	 Telephone:
   	 <input type="text" name="telephone" required> <br>';
    
echo'<select name="Specialite">';
   
    while ($vResult = pg_fetch_array($vQuery))

    {

?>

    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 
     
<?php 

    } 
  
    echo'</select>'; // fermeture de la liste déroulante
	echo'<input type="submit"/></form>';

     
   pg_close($vConn);



?>
