<html>
    
<head>
	<title>Resultats de le recherche de médecins</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de médecin : </br>";
        include "connect.php";
        $vConn = fConnect();
        $id=$_POST['id'];
        $vSQL = "SELECT m.id AS id, m.nom AS nom, m.prenom AS prenom, m.adresse_numero AS adresse_numero, m.adresse_rue AS adresse_rue, m.adresse_codepostal AS adresse_codepostal, m.numero_tel AS numero_tel FROM tMedecin m WHERE id = '$id';";
        $vQuery = pg_query($vConn, $vSQL);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "<th>Téléphone</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[id]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[adresse_numero]</td>";
            echo "<td>$vResult[adresse_rue]</td>";
            echo "<td>$vResult[adresse_codepostal]</td>";
            echo "<td>$vResult[numero_tel]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";
        
        
        $vSQL1 = "SELECT specialite FROM tPossede WHERE medecin = '$id';";
        $vQuery1 = pg_query($vConn, $vSQL1);
	if (pg_num_rows($vQuery1)){
        echo "Voici les spécialités de ce médecin : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Spécialité</th>";
        echo "</tr>";
        
        while($vResult1 = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult1[specialite]</td>";
            
            echo "</tr>";
        }
        echo "</table>";
        
        echo "</table>";
	echo "</br>";
	}
        
        $vSQL2 = "SELECT o.id AS id, o.jour AS jour, o.h_deb AS h_deb, o.specialite_requise AS specialite_requise, o.salle AS salle, o.batiment AS batiment FROM tOperation o, tEffectue e WHERE e.operation = o.id AND e.medecin = '$id';";
        $vQuery2 = pg_query($vConn, $vSQL2);
	if (pg_num_rows($vQuery2)){
        echo "Voici les opérations de ce médecin : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Jour</th>";
        echo "<th>Heure de début</th>";
        echo "<th>Spécialité requise</th>";
        echo "<th>Salle</th>";
        echo "<th>Bâtiment</th>";
        echo "</tr>";
        
        while($vResult2 = pg_fetch_array($vQuery2)){
            echo "<tr>";
            echo "<td>$vResult2[id]</td>";
            echo "<td>$vResult2[jour]</td>";
            echo "<td>$vResult2[h_deb]</td>";
            echo "<td>$vResult2[specialite_requise]</td>";
            echo "<td>$vResult2[salle]</td>";
            echo "<td>$vResult2[batiment]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";
	}
        
        
        $vSQL3 = "SELECT id, jour, h_deb, h_fin, salle, batiment FROM tCreneau WHERE medecin = '$id';";
        $vQuery3 = pg_query($vConn, $vSQL3);
	if (pg_num_rows($vQuery3)){
        echo "Voici les consultations de ce médecin : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Jour</th>";
        echo "<th>Heure de début</th>";
        echo "<th>Heure de fin</th>";
        echo "<th>Salle</th>";
        echo "<th>Bâtiment</th>";
        echo "</tr>";
        
        while($vResult3 = pg_fetch_array($vQuery3)){
            echo "<tr>";
            echo "<td>$vResult3[id]</td>";
            echo "<td>$vResult3[jour]</td>";
            echo "<td>$vResult3[h_deb]</td>";
            echo "<td>$vResult3[h_fin]</td>";
            echo "<td>$vResult3[salle]</td>";
            echo "<td>$vResult3[batiment]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";
	}
        
        
        pg_close($vConn);

    ?>

</body>

</html>
