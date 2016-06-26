<html>
    
<head>
	<title>Suppression de créneau</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $id=$_POST['id'];
        $vSql = "BEGIN TRANSACTION ; DELETE FROM tRDV WHERE creneau = '$id';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql2 = "DELETE FROM tCreneau WHERE id = '$id'; COMMIT;";
        $vQuery2 = pg_query($vConn, $vSql2);

    ?>

</body>

</html>