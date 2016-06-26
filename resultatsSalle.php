<html>
    
<head>
	<title>Resultats de le recherche de salles</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        include "connect.php";
        $vConn = fConnect();
        $batiment=$_POST['batiment'];
        $salle=$_POST['salle'];
        $type=$_POST['type'];
    
        if ($type == "consultation"){
            if (!empty($salle)){
                $vSql="SELECT batiment,numero FROM tSalle_Consultation WHERE batiment='$batiment' AND numero='$salle';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
 		echo"<th>Recherche de salles de consultation</th>";
                echo"<table border='1'>";
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>";
            }
            echo"</table>";}
	else echo "Il n'y a pas de salle de consultation répondant à ces critères.";
            }else {
               $vSql="SELECT batiment,numero FROM tSalle_Consultation WHERE batiment='$batiment';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
                echo"<th>Recherche de salles de consultation</th>";
                echo"<table border='1'>";
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>" ;
            }
		}
	else echo "Il n'y a pas de salle de consultation répondant à ces critères.";
           
        }}else if ($type == "operation"){
                if (!empty($salle)){
                $vSql="SELECT batiment,numero FROM tSalle_Operation WHERE batiment='$batiment' AND numero='$salle';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
 		echo"<th>Recherche de salles d'opération</th>";
                echo"<table border='1'>";
               
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>";
            
            }
            echo"</table>";
	}
	else echo "Il n'y a pas de salle d'opération répondant à ces critères.";
            }else {
               $vSql="SELECT batiment,numero FROM tSalle_Operation WHERE batiment='$batiment';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
                echo"<th>Recherche de salles d'opération</th>";
                echo"<table border='1'>";
               
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>" ;
            }}
		else echo "Il n'y a pas de salle d'opération répondant à ces critères.";}
        }else /*if ($type == "chambre") */{
                if (!isset($salle)){
                $vSql="SELECT batiment,numero FROM tChambre WHERE batiment='$batiment' AND numero='$salle';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
		echo"<th>Recherche de chambres</th>";
                echo"<table border='1'>";
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>";
            
            }
            echo"</table>";
		}else echo "Il n'y a pas de chambre répondant à ces critères.";
		
            }else {
               $vSql="SELECT batiment,numero FROM tChambre WHERE batiment='$batiment';"; 
                $vQuery = pg_query($vConn, $vSql);
		if(pg_num_rows($vQuery)>0){
                echo"<th>Recherche de chambres</th>";
                echo"<table border='1'>";
                echo"<tr><th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>" ;
            }}
		else echo "Il n'y a pas de chambre répondant à ces critères.";}
        }/*else {
                if (isset($salle)){
                $vSql="SELECT batiment,numero FROM tSalle WHERE batiment='$batiment' AND numero='$salle';"; 
                $vQuery = pg_query($vConn, $vSql);
                echo"<table border='1'>";
                echo"<tr><th>Recherche de salles</th>";
                echo"<th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>";
            
            }
            echo"</table>";
            }else {
               $vSql="SELECT batiment,numero FROM tSalle WHERE batiment='$batiment';"; 
                $vQuery = pg_query($vConn, $vSql);
                echo"<table border='1'>";
                echo"<tr><th>Recherche de salles</th>";
                echo"<th>Bâtiment</th>";
                echo"<th>Numéro de salle</th></tr>";
                while($vResult=pg_fetch_array($vQuery)){
                    echo "<tr>";
                    echo"<td>$vResult[batiment]</td>";
                    echo"<td>$vResult[numero]</td>";
                    echo "</tr>" ;
            }
        }}*/
    
    pg_close($vConn);                
    
    ?>

</body>

</html>
