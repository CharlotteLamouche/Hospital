<html>
    
<head>
	<title>Resultats de le recherche de prescriptions </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
   
        include "connect.php";
        $vConn = fConnect();
        $medecin=$_POST['id'];
        $patient=$_POST['dossier'];
        $vSql="SELECT p.numero AS num, d.nom AS nom, d.debut AS deb, d.fin AS fin , d.nombre AS nb FROM tPrescription p, tDuree d WHERE p.medecin='$medecin' AND p.patient='$patient'AND d.numero=p.numero;";
        $vQuery = pg_query($vConn, $vSql);
	echo"<th>Prescription(s) faite(s) par le médecin n°$medecin au patient n°$patient </th> </br>";
	echo "</br>";
        echo"<table border='1'>";
	echo "<tr>";
        echo"<th>Numéro de prescription</th>";
        echo"<th>Médicament</th>";
        echo"<th>Début</th>";
        echo"<th>Fin</th>";
        echo"<th>Nombre de médicament</th></tr>";
        while($vResult=pg_fetch_array($vQuery)){
            echo "<tr>";
            echo"<td>$vResult[num]</td>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[deb]</td>";
            echo"<td>$vResult[fin]</td>";
            echo"<td>$vResult[nb]</td>";
            echo "</tr>";
            
        }
    echo"</table></br>";

	echo "Entrer le numéro de la prescription pour la supprimer : ";
    echo '  <form method="POST" action="supprimerPrescription.php">

   	 <input type="text" name="numero" required>

	<input type="submit"/> </form>';
    pg_close($vConn);
    ?>

</body>

</html>
