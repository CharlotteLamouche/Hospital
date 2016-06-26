<html>
    
<head>
	<title>Resultats de le recherche de consultations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de consultations :";
        include "connect.php";
        $vConn = fConnect();
        $date=$_POST['date'];
        $salle=$_POST['salle'];
        
        if (isset($salle) && isset($date))
        {
            echo"Rentrez au moins un des deux champs !";
        }
        else
        {
            if(isset($salle)) {
                $vSql="SELECT id, h_deb, h_fin, salle FROM tCreneau WHERE jour='$date';";
                $vQuery = pg_query($vConn,$vSql);
                echo"<table border='1'>";
                echo"<tr><th>Recherche de consultation</th>";
                echo"<th>ID</th>";
                echo"<th>Heure de début</th>";
                echo"<th>Heure de fin</th>";
                echo"<th>Salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[id]</td>";
                    echo"<td>$vResult[h_deb]</td>";
                    echo"<td>$vResult[h_fin]</td>";
                    echo"<td>$vResult[salle]</td>";
                    echo "</tr>";
                    
                }
                echo"</table>";
            }
            
                else
                {
                    if(isset($date)){
                        $vSql="SELECT id, jour, h_deb, h_fin FROM tCreneau WHERE salle='$salle';";
                        $vQuery = pg_query($vConn,$vSql);
                        echo"<table border='1'>";
                        echo"<tr><th>Recherche de consultation</th>";
                        echo"<th>ID</th>";
                        echo"<th>Date</th></tr>";
                        echo"<th>Heure de début</th>";
                        echo"<th>Heure de fin</th></tr>";
                        while($vResult=pg_fetch_array($vQuery)){
                            echo "<tr>";
                            echo"<td>$vResult[id]</td>";
                            echo"<td>$vResult[jour]</td>";
                            echo"<td>$vResult[h_deb]</td>";
                            echo"<td>$vResult[h_fin]</td>";
                            echo "</tr>";
                        }
                        echo"</table>";
                    }
                        else
                        {
                                $vSql="SELECT id, jour, h_deb, h_fin, salle FROM tCreneau WHERE salle='$salle' AND jour='$date';";
                                $vQuery = pg_query($vConn,$vSql);
                                echo"<table border='1'>";
                                echo"<tr><th>Recherche de consultation</th>";
                                echo"<th>ID</th>";
                                echo"<th>Date</th></tr>";
                                echo"<th>Heure de début</th>";
                                echo"<th>Heure de fin</th>";
                                echo"<th>Salle</th></tr>";
                                while($vResult=pg_fetch_array($vQuery)){
                                    echo "<tr>";
                                    echo"<td>$vResult[id]</td>";
                                    echo"<td>$vResult[jour]</td>";
                                    echo"<td>$vResult[h_deb]</td>";
                                    echo"<td>$vResult[h_fin]</td>";
                                    echo"<td>$vResult[salle]</td>";
                                    echo "</tr>";
                                }
                                echo"</table>";
                        }
                }
        }
    
    pg_close($vConn);
            
    ?>

</body>

</html>
