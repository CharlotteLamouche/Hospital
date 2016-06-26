<html>
    
<head>
	<title>Resultats de le recherche d'opérations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche d'opérations :";
        include "connect.php";
        $vConn = fConnect();
        $date=$_POST['date'];
        $salle=$_POST['salle'];
        if (empty($salle) && empty($date))
        {
            echo"Rentrez au moins un des deux champs !";
        }
        else
        {
            if(empty($salle)) {
                $vSql="SELECT id, h_deb, specialite_requise, salle FROM tOperation WHERE jour='$date';";
                $vQuery = pg_query($vConn,$vSql);
		if(pg_num_rows($vQuery)>0){
                echo"<table border='1'>";
                echo"<tr><th>ID</th>";
                echo"<th>Heure de début</th>";
                echo"<th>Spécialité requise</th>";
                echo"<th>Salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[id]</td>";
                    echo"<td>$vResult[h_deb]</td>";
                    echo"<td>$vResult[specialite_requise]</td>";
                    echo"<td>$vResult[salle]</td>";
                    echo "</tr>";
                    
                }
                echo"</table>";
		echo "Entrer id";
    echo '  <form method="POST" action="supprimerOperation.php">
   	 <input type="text" name="id">
   	 <input type="submit"/> </form>';
		}else echo "Il n'y a pas d'opération prévue à cette date.";
            }
            
            else if(empty($date)){
                    $vSql="SELECT id, jour, h_deb, specialite_requise FROM tOperation WHERE salle='$salle';";
                    $vQuery = pg_query($vConn,$vSql);
			if(pg_num_rows($vQuery)>0){
                    echo"<table border='1'>";
                    echo"<tr><th>ID</th>";
                    echo"<th>Date</th>";
                    echo"<th>Heure de début</th>";
                    echo"<th>Spécialité requise</th></tr>";
                    while($vResult=pg_fetch_array($vQuery)){
                        echo "<tr>";
                        echo"<td>$vResult[id]</td>";
                        echo"<td>$vResult[jour]</td>";
                        echo"<td>$vResult[h_deb]</td>";
                        echo"<td>$vResult[specialite_requise]</td>";
                        echo "</tr>";
                    }
                    echo"</table>";
		    echo '  <form method="POST" action="supprimerOperation.php">
		   	 <input type="text" name="id">
		   	 <input type="submit"/> </form>';
		}else echo "Il n'y a pas d'opération prévue dans cette salle.";
                }
                else
                {
                        $vSql="SELECT id, jour, h_deb, specialite_requise, salle FROM tOperation WHERE salle='$salle' AND jour='$date';";
                        $vQuery = pg_query($vConn,$vSql);
			if(pg_num_rows($vQuery)>0){
                        echo"<table border='1'>";
                        echo"<tr><th>ID</th>";
                        echo"<th>Date</th>";
                        echo"<th>Heure de début</th>";
                        echo"<th>Spécialité requise</th>";
                        echo"<th>Salle</th></tr>";
                        while($vResult=pg_fetch_array($vQuery)){
                            echo "<tr>";
                            echo"<td>$vResult[id]</td>";
                            echo"<td>$vResult[jour]</td>";
                            echo"<td>$vResult[h_deb]</td>";
                            echo"<td>$vResult[specialite_requise]</td>";
                            echo"<td>$vResult[salle]</td>";
                            echo "</tr>";
                        }
                        echo"</table>";
		echo "Entrer l'id de l'opération à supprimer </br>";
			    echo '  <form method="POST" action="supprimerOperation.php">
   			 <input type="text" name="id">
   	 			<input type="submit"/> </form> </br></br>';
		echo "Entrer l'id de l'opération à modifier </br>";
    		echo '  <form method="POST" action="modifierOperation.php">

   	 	<input type="text" name="id" required>

		<input type="submit"/> </form>';
			
			}else echo "Il n'y a pas d'opérations liées à cette date et dans cette salle.";
                }
            }

        
        pg_close($vConn);

    ?>

</body>

</html>
