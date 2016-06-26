<html>
    
<head>
	<title>Resultats de le recherche de patients</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche du patient : </br>";
        include "connect.php";
        $vConn = fConnect();
        $dossier=$_POST['dossier'];
        $vSQL = "SELECT p.dossier AS dossier, p.nom AS nom, p.prenom AS prenom, p.num_rue AS num_rue, p.rue AS rue, p.code_postal AS code_postal, p.telephone AS telephone, p.chambre AS chambre FROM tPatient p WHERE dossier = '$dossier';";
        $vQuery = pg_query($vConn, $vSQL);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Numéro de dossier</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "<th>Téléphone</th>";
        echo "<th>Chambre</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[dossier]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[num_rue]</td>";
            echo "<td>$vResult[rue]</td>";
            echo "<td>$vResult[code_postal]</td>";
            echo "<td>$vResult[telephone]</td>";
            echo "<td>$vResult[chambre]</td>";
            echo "</tr>";
        }
        
        echo "</table>";
	echo "</br>";
	echo "<br><br><br>Entrez l'ID du patient pour le supprimer : </br>";
   	echo '  <form method="POST" action="supprimerPatient.php">
    <input type="text" name="dossier" required>
    <input type="submit"/> </form>';

	echo "<br><br><br>Entrez l'ID du patient pour le modifier : </br>";
    	echo '  <form method="POST" action="modifierPatient.php">
    <input type="text" name="dossier" required>
    <input type="submit"/> </form>';
        
        $vSQL1 = "SELECT allergie FROM tSouffre WHERE patient = '$dossier';";
        $vQuery1 = pg_query($vConn, $vSQL1);
	if(pg_num_rows($vQuery1)){
	echo "Voici les allergies dont souffre le patient : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Allergie</th>";
        echo "</tr>";
        
		while($vResult1 = pg_fetch_array($vQuery1)){
		    echo "<tr>";
		    echo "<td>$vResult1[allergie]</td>";

		    echo "</tr>";
		}
        echo "</table>";
        
        echo "</table>";
	echo "</br>";
	}
        
        $vSQL2 = "SELECT id, jour, h_deb, specialite_requise, salle, batiment FROM tOperation WHERE patient = '$dossier';";
        $vQuery2 = pg_query($vConn, $vSQL2);
	if(pg_num_rows($vQuery2)){
	echo "Voici les opérations de ce patient : </br>";
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
        
        
        $vSQL3 = "SELECT creneau, horaire, duree FROM tRDV WHERE patient = '$dossier';";
        $vQuery3 = pg_query($vConn, $vSQL3);
	if(pg_num_rows($vQuery3)){
	echo "Voici les consultation de ce patient : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Créneau</th>";
        echo "<th>Horaire</th>";
        echo "<th>Durée</th>";
        echo "</tr>";
		
		while($vResult3 = pg_fetch_array($vQuery3)){
		    echo "<tr>";
		    echo "<td>$vResult3[creneau]</td>";
		    echo "<td>$vResult3[horaire]</td>";
		    echo "<td>$vResult3[duree]</td>";
		    echo "</tr>";
		}
        echo "</table>";
	echo "</br>";

	}	
        
        pg_close($vConn);
        
    ?>

</body>

</html>
