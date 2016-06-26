<html>
    
<head>
	<title>Resultats de le recherche de médicaments</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de médicaments :";
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
	$vSql1="select * from tEst_contre_indique where medicament='$nom';";
        $vSql="SELECT m.nom AS nom, m.labo AS lab, m.nb AS nb, c.allergie AS all FROM tMedicament m, tEst_contre_indique c WHERE m.nom='$nom' AND c.medicament='$nom';";
	$vSql2="SELECT nom, labo, nb FROM tMedicament WHERE nom='$nom' ;";

 	$vQuery1= pg_query($vConn, $vSql1);
	if(pg_num_rows($vQuery1)){
        $vQuery = pg_query($vConn, $vSql);
        echo"<table border='1'>";
        echo"<tr><th>Médicament</th>";
        echo"<th>Laboratoire</th>";
        echo"<th>Stock disponible</th>";
        echo"<th>Contre indication</th></tr>";
        while($vResult=pg_fetch_array($vQuery)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[lab]</td>";
            echo"<td>$vResult[nb]</td>";
            echo"<td>$vResult[all]</td>";
            echo "</tr>";
            
        }
    	echo"</table>";
	}else {
	$vQuery2= pg_query($vConn, $vSql2);
	if(pg_num_rows($vQuery2)){
        echo"<table border='1'>";
        echo"<tr><th>Médicament</th>";
        echo"<th>Laboratoire</th>";
        echo"<th>Stock disponible</th>";
        echo"</tr>";
        while($vResult=pg_fetch_array($vQuery2)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[labo]</td>";
            echo"<td>$vResult[nb]</td>";
            echo "</tr>";
            
        }
    	echo"</table>";
	echo "Entrer le nom du médicament à modifier </br>";
    	echo '  <form method="POST" action="modifierMedicament.php">

   	 <input type="text" name="nom" required>

	<input type="submit"/> </form>';
	}else{echo "il n'y a pas de médicament nommé ainsi.";} }
    pg_close($vConn);

    ?>

</body>

</html>
