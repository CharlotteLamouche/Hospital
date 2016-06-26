<html>
    
<head>
	<title>Resultats de le recherche de spécialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de spécialité :</br>";
        include "connect.php";
        $vConn = fConnect();
        $specialite=$_POST['specialite'];
        $vSql="SELECT m.id AS id, m.nom AS nom, m.prenom AS prenom FROM tMedecin m, tPossede p WHERE m.id=p.medecin AND p.specialite='$specialite';";
        $vQuery = pg_query($vConn, $vSql);
	if(pg_num_rows($vQuery)){
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>ID</th>";
        echo"<th>Nom</th>";
        echo"<th>Prénom</th></tr>";
        while($vResult=pg_fetch_array($vQuery)){
            echo "<tr>";
            echo"<td>$vResult[id]</td>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[prenom]</td>";
            echo "</tr>";
            
        }
    echo"</table>";
	echo "Entrer le nom de la spécialité à modifier</br>";
    echo '  <form method="POST" action="modifierSpecialite.php">

   	 <input type="text" name="nom" required>

	<input type="submit"/> </form>';

	echo "<br> <br>";

	echo "Entrer le nom de la spécialité à supprimer </br>";
        echo '  <form method="POST" action="supprimerSpecialite.php">

   	 <input type="text" name="nom" required>

	<input type="submit"/> </form>';
	
	}else{
	echo "<br>Il n'y a pas de médecin ayant cette spécialité.</br></br>";
	}
    pg_close($vConn);
    ?>

</body>

</html>
