<html>
    
<head>
	<title>Resultats de le recherche de bâtiment </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de bâtiment :";
        include "connect.php";
        $vConn = fConnect();
        $batiment=$_POST['batiment'];
        $vSQL = "SELECT numero FROM tSalle WHERE batiment = '$batiment';";
        $vQuery = pg_query($vConn, $vSQL);
	if(pg_num_rows($vQuery)){
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Salle du bâtiment</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[numero]</td>";
            echo "</tr>";
        }
        echo "</table>";
	}else{ 
	$vSQL1= "SELECT nom FROM tBatiment WHERE nom = '$batiment';";
	 $vQuery1 = pg_query($vConn, $vSQL1);
	if(pg_num_rows($vQuery1)){
	echo"Il n'existe pas de salle dans ce bâtiment.";}
	else {echo"ce bâtiment n'existe pas.";}
	}
	 pg_close($vConn);
    ?>

</body>

</html>
