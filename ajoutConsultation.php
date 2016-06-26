<html>
	<head>
	<title>Ajout Consultation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
	include "connect.php";
	$vConn = fConnect();
	$vSql = "Select nom FROM tBatiment;"; // on select la colonne de la table qui nous intéresse
	$vQuery=pg_query($vConn, $vSql);


    echo"Dans quel Batiment est situé la salle de consultation ?";
    echo'<form method="POST" action="ajoutConsultation1.php">'; 
    echo'<select name="Batiment">'; // nom de la liste déroulante

    
    while ($vResult = pg_fetch_array($vQuery))

    {

?>

     
    <option value="<?php echo $vResult['nom']; ?>"><?php echo $vResult['nom']; ?></option> 

     
<?php // au dessus : value = ... $vResult[' le nom que vous voulez pour passer en paramètre au php suivant'] puis ensuite
	  // ... $vResult['nom que vous voulez afficher dans la LD']

    } 

     
    echo'</select>'; // fermeture de la liste déroulante
    echo '<br> Numéro de salle:
	<input type="text" name="numero">';
    echo'<input type="submit"/>';
    echo'</form>';
   pg_close($vConn);

?>
