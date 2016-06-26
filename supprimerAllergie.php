<html>
    
<head>
	<title>Suppression de allergie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['allergie'];
        $vSql = "BEGIN TRANSACTION ; DELETE FROM tEst_contre_indique WHERE allergie = '$nom';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql2 = "DELETE FROM tSouffre WHERE allergie = '$nom';";
        $vQuery2 = pg_query($vConn, $vSql2);
        $vSql3 = "DELETE FROM tAllergie WHERE nom = '$nom'; COMMIT;";
        $vQuery3 = pg_query($vConn, $vSql3);

    ?>

</body>

</html>
