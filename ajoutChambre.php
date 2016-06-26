<html>
	<head>
	<title>Ajout Chambre</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vSql = "Select nom FROM tBatiment;"; // on select la colonne de la table qui nous intéresse
	$vQuery=pg_query($vConn, $vSql);


    echo"Dans quel Batiment est situé la chambre ?";
    echo'<form method="POST" action="ajoutChambre1.php">'; 
    echo'<select name="Batiment">'; // nom de la liste déroulante

    
    while ($vResult = pg_fetch_array($vQuery))

    {

?>

     
    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 

     
<?php // au dessus : value = ... $vResult[' le nom que vous voulez pour passer en paramètre au php suivant'] puis ensuite
	  // ... $vResult['nom que vous voulez afficher dans la LD']

    } 

     
    echo'</select>'; // fermeture de la liste déroulante
    echo '<br> Numéro de chambre:
	<input type="text" name="numero" required>
	<br> Capacité de la chambre:
    	<input type="text" name="capacite" required>';
    echo'<input type="submit"/>';
    echo'</form>';
   pg_close($vConn);

?>
