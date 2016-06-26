<html>
    
<head>
	<title>Resultats de le recherche d'opération</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification d'opération: </br>";
        include "connect.php";
        $vConn = fConnect();
        $id=$_POST['id'];
        $jour=$_POST['jour'];
        $h_deb=$_POST['h_deb'];
        $specialite_requise=$_POST['specialite_requise'];
        $salle=$_POST['salle'];
        $batiment=$_POST['batiment'];
        $patient=$_POST['patient'];
        $vSql="UPDATE tOperation SET id='$id', jour='$jour', h_deb='$h_deb', specialite_requise='$specialite_requise', salle='$salle', batiment='$batiment' WHERE id='$id';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql1="Select * from tOperation where id='$id';";
        $vQuery1= pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo"<th>id</th>";
        echo"<th>jour</th>";
        echo"<th>heure de début</th>";
        echo"<th>spécialité requise</th>";
        echo"<th>salle</th>";
        echo"<th>batiment</th>";
        echo"<th>patient</th>";
        echo"</tr>";
        while($vResult=pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo"<td>$vResult[id]</td>";
            echo"<td>$vResult[jour]</td>";
            echo"<td>$vResult[h_deb]</td>";
            echo"<td>$vResult[specialite_requise]</td>";
            echo"<td>$vResult[salle]</td>";
            echo"<td>$vResult[batiment]</td>";
            echo"<td>$vResult[patient]</td>";
            echo "</tr>";
            
        }



 pg_close($vConn);
    ?>

</body>

</html>
