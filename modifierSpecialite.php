<html>
    
<head>
	<title>Resultats de le recherche de spécialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification de spécialité :";
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
	$vSql= "SELECT type from tspecialite where nom='$nom';";
	$vQuery = pg_query($vConn, $vSql);
	$vResult=pg_fetch_array($vQuery);
	//if(pg_num_rows($vQuery)>0){
    echo '  <form method="POST" action="modifierSpecialite1.php">
	type:
   	 <input type="text" name="type" value="'.$vResult[type].'" required>
	<input type="hidden" name="nom" value="'.$nom.'" required>

	<input type="submit"/> </form>';
	
	//}

 pg_close($vConn);
    ?>

</body>

</html>
