<html>
    
<head>
	<title>Suppression de patient</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $dossier=$_POST['dossier'];
        $vSql0 = "BEGIN TRANSACTION ; SELECT numero FROM tPrescription WHERE patient = '$dossier';";
        $vQuery0 = pg_query($vConn, $vSql0);
        while($Result0 = pg_fetch_array ($vQuery0))
        {
            $vSqld = "DELETE FROM tDuree WHERE numero = '$Result0[numero]';";
            $vQueryd = pg_query($vConn, $vSqld);
            $vSqlp = "DELETE FROM tPrescription WHERE numero = '$Result0[numero]';";
            $vQueryp = pg_query($vConn, $vSqlp);
        }
        $vSqls = "DELETE FROM tSouffre WHERE patient = '$dossier';";
        $vQuerys = pg_query($vConn, $vSqls);
        $vSql1 = "SELECT id FROM tOperation WHERE patient = '$dossier';";
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
        $vSql4 = "DELETE FROM tRDV WHERE patient = '$dossier';";
        $vQuery4 = pg_query($vConn, $vSql4);
        $vSql5 = "DELETE FROM tPatient WHERE dossier = '$dossier'; COMMIT;";
        $vQuery5 = pg_query($vConn, $vSql5);

    ?>

</body>

</html>
