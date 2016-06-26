<html>
    
<head>
	<title>Resultats de le recherche de médecins</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de médecins :</br>";
        include "connect.php";
        $vConn = fConnect();
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $vSQL = "SELECT * FROM tMedecin WHERE nom = '$nom' AND prenom = '$prenom';";
        $vQuery = pg_query($vConn, $vSQL);
	if(pg_num_rows($vQuery)){
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[id]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[adresse_numero]</td>";
            echo "<td>$vResult[adresse_rue]</td>";
            echo "<td>$vResult[adresse_codepostal]</td>";
            echo "</tr>";
        }
        echo "</table></br></br>";
        
        echo '  <form method="POST" action="resultatsMedecin2.php">
        Entrez ID correspondant au médecin dont vous voulez voir les informations : </br>
        <input type="text" name="id" required>
        <input type="submit"/> </form>';
	}
	else{echo "</br>Il n'y a pas de médecin nommé ainsi.";}

    ?>

</body>

</html>
