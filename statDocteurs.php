<html>
    
<head>
	<title>Médecins utilisant le plus de médicaments</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Médecins utilisant le plus de médicaments :";
        include "connect.php";
        $vConn = fConnect();
        $vSql="SELECT sum(d.nombre) as total, m.nom, m.prenom FROM tDuree d, tPrescription p, tMedecin m where p.numero=d.numero and p.medecin=m.id group by m.nom,m.prenom order by total desc;";
 	$vQuery= pg_query($vConn, $vSql);

        echo"<table border='1'>";
        echo"<tr><th>Nom</th>";
        echo"<th>Prenom</th>";
	echo"<th>Nombre total</th></tr>";
        while($vResult=pg_fetch_array($vQuery)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
		echo"<td>$vResult[prenom]</td>";
            echo"<td>$vResult[total]</td>";
            echo "</tr>";
}
       
    pg_close($vConn);

    ?>

</body>

</html>
