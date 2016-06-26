<html>
    
<head>
	<title>Modification d'un médicament</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification d'un médicament:";
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
	$labo=$_POST['labo'];
    $nb=$_POST['nb'];
	$vSql="UPDATE tmedicament SET labo='$labo',nb='$nb' WHERE nom='$nom';";
	$vQuery = pg_query($vConn, $vSql);
	$vSql1="Select * from tmedicament where nom='$nom';";
	$vQuery1= pg_query($vConn, $vSql1);
	        echo"<table border='1'>";
	echo "<tr>";
        echo"<th>Nom</th>";
        echo"<th>Laboratoire</th>";
        echo"<th>Stock</th>";
        echo"</tr>";
        while($vResult=pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[labo]</td>";
            echo"<td>$vResult[nb]</td>";
            echo "</tr>"; 
        }



 pg_close($vConn);
    ?>

</body>

</html>
