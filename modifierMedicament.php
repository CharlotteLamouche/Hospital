<html>
    
<head>
	<title>Modification d'un médicament</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification d'un médicament:";
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
	$vSql= "SELECT labo, nb from tmedicament where nom='$nom';";
	$vQuery = pg_query($vConn, $vSql);
	$vResult=pg_fetch_array($vQuery);
	if(!empty($vQuery)){
    echo '  <form method="POST" action="modifierMedicament1.php">  </br>
	Nom du laboratoire :
   	<input type="text" name="labo" value="'.$vResult[labo].'" required> </br>
	Stock:
     	<input type="text" name="nb" value="'.$vResult[nb].'" required> </br>
	<input type="hidden" name="nom" value="'.$nom.'">

	<input type="submit"/> </form>';
	
	}

 pg_close($vConn);
    ?>

</body>

</html>
