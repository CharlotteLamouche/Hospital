<html>
    
<head>
	<title>Médecins ayant le plus de patients</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Médecins ayant le plus de patients :";
        include "connect.php";
        $vConn = fConnect();
        $vSql="SELECT  m.nom, m.prenom, count(DISTINCT r.patient) as total FROM tMedecin m, tCreneau c, tRDV r where m.id=c.medecin and c.id=r.creneau group by m.nom, m.prenom order by m.nom;";
 	$vQuery= pg_query($vConn, $vSql);

        echo"<table border='1'>";
        echo"<tr><th>Médicament</th>";
        echo"<th>Nombre total</th></tr>";
        while($vResult=pg_fetch_array($vQuery)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[total]</td>";
            echo "</tr>";
}
       
    pg_close($vConn);

    ?>

</body>

</html>
