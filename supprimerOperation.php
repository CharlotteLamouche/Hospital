<html>
    
<head>
	<title>Suppression de opération</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $id=$_POST['id'];
        $vSql = "BEGIN TRANSACTION ; DELETE FROM tEffectue WHERE operation = '$id';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql2 = "DELETE FROM tNecessite WHERE operation = '$id';";
        $vQuery2 = pg_query($vConn, $vSql2);
        $vSql3 = "DELETE FROM tOperation WHERE id = '$id'; COMMIT;";
        $vQuery3 = pg_query($vConn, $vSql3);

    ?>

</body>

</html>
