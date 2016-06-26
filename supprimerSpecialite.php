<html>
    
<head>
	<title>Suppression de specialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
        $vSql0 = "BEGIN TRANSACTION ; DELETE FROM tPossede WHERE specialite = '$nom';";
        $vQuery0 = pg_query($vConn, $vSql0);
        $vSql1 = "SELECT id FROM tOperation WHERE specialite_requise = '$nom';";
        $vQuery1 = pg_query($vConn, $vSql1);
        while($Result = pg_fetch_array ($vQuery1))
        {
            $vSql = "DELETE FROM tEffectue WHERE operation = '$Result[id]';";
            $vQuery = pg_query($vConn, $vSql);
            $vSql2 = "DELETE FROM tNecessite WHERE operation = '$Result[id]';";
            $vQuery2 = pg_query($vConn, $vSql2);
            $vSql3 = "DELETE FROM tOperation WHERE id = '$Result[id]';";
            $vQuery3 = pg_query($vConn, $vSql3);
        }
        $vSql4 = "DELETE FROM tSpecialite WHERE nom = '$nom'; COMMIT;";
        $vQuery4 = pg_query($vConn, $vSql4);

    ?>

</body>

</html>
