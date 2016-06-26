<html>
    
<head>
	<title>Resultats de le recherche des allergies </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche d'allergies :";
        include "connect.php";
        $vConn = fConnect();
        $allergie=$_POST['allergie'];
        $vSQL = "SELECT medicament FROM tEst_contre_indique WHERE allergie = '$allergie';";
        $vQuery = pg_query($vConn, $vSQL);
	if(pg_num_rows($vQuery)){
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Médicament contre indiqué</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[medicament]</td>";
            echo "</tr>";
        }
        echo "</table>";
	 echo '  <form method="POST" action="supprimerAllergie.php">
   	 Nom de l allergie:
   	 <input type="text" name="allergie" required>
   	 <input type="submit"/> </form>';
	}
	else {
	$vSQL1= "SELECT * FROM tAllergie WHERE nom= '$allergie';";
	$vQuery1 = pg_query($vConn, $vSQL1);
	if(pg_num_rows($vQuery1)){ echo"cette allergie n'a aucun médicament contre-indiqué";
	echo '  <form method="POST" action="supprimerAllergie.php">
   	 Nom de l allergie:
   	 <input type="text" name="allergie" required>
   	 <input type="submit"/> </form>';
	}else { echo"cette allergie n'existe pas";}}
	 pg_close($vConn);


    ?>

</body>

</html>
