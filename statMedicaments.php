<html>
    
<head>
	<title>Médicaments les plus utilisés</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Médicaments les plus utilisés :";
        include "connect.php";
        $vConn = fConnect();
        $vSql="SELECT nom, sum(nombre) as total FROM tDuree group by nom order by total desc;";
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
