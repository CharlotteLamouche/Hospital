<html>
    
<head>
	<title>Suppression de prescription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $numero=$_POST['numero'];
        $vSql = "BEGIN TRANSACTION ; DELETE FROM tDuree WHERE numero = '$numero';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql2 = "DELETE FROM tPrescription WHERE numero = '$numero'; COMMIT; ";
        $vQuery2 = pg_query($vConn, $vSql2);

    ?>

</body>

</html>
