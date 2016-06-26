<html>
    
<head>
	<title>Resultats de le recherche de spécialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification de spécialité :";
        include "connect.php";
        $vConn = fConnect();
        $nom=$_POST['nom'];
	$type=$_POST['type'];
	$vSql="UPDATE tSpecialite SET type='$type' WHERE nom='$nom';";
	$vQuery = pg_query($vConn, $vSql);
	$vSql1="Select * from tspecialite where nom='$nom';";
	$vQuery1= pg_query($vConn, $vSql1);
	        echo"<table border='1'>";
	echo "<tr>";
        echo"<th>Specialite</th>";
        echo"<th>Type</th>";

        echo"</tr>";
        while($vResult=pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[type]</td>";
            echo "</tr>";
            
        }



 pg_close($vConn);
    ?>

</body>

</html>
