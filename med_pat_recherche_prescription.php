<html>
    
<head>
	<title>Choix du médecin et du patient pour la prescription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Choix du médecin et du patient pour la prescription : </br></br>";
        include "connect.php";
        $vConn = fConnect();
        $medecin=$_POST['medecin'];
        $patient=$_POST['patient'];
        $vSql1="SELECT id , nom, prenom, adresse_numero, adresse_rue, adresse_codepostal  FROM tMedecin WHERE nom='$medecin';";
        $vQuery1=pg_query($vConn, $vSql1);
        $vSql2="SELECT dossier , nom, prenom,num_rue, rue, code_postal FROM tPatient WHERE nom='$patient';";
	echo "Voici la liste de médecins : </br>";
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
   	echo "<th>n° rue</th>";
   	echo "<th>Rue</th>";   
	echo "<th>code postal</th>";
	echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult[id]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[adresse_numero]</td>";
            echo "<td>$vResult[adresse_rue]</td>";
            echo "<td>$vResult[adresse_codepostal]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";
        
        echo '  <form method="POST" action="resultatsPrescription.php">
        Entrez ID correspondant au médecin : 
        <input type="text" name="id" required>';
echo "</br>";
echo "</br>";
        
        
	echo "Voici la liste de patients : </br>"; 
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Numéro de dossier</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
   	echo "<th>n° rue</th>";
   	echo "<th>Rue</th>";   
	echo "<th>code postal</th>";
	echo "</tr>";
        $vQuery2=pg_query($vConn, $vSql2);
        while($vResult = pg_fetch_array($vQuery2)){
            echo "<tr>";
            echo "<td>$vResult[dossier]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[num_rue]</td>";
            echo "<td>$vResult[rue]</td>";
            echo "<td>$vResult[code_postal]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";
        
        echo 'Entrez le numéro de dossier du patient : 
        <input type="text" name="dossier" required>';
	echo "</br></br>";
        
        echo'<input type="submit"/> </form>';

    
     pg_close($vConn);   

    ?>

</body>

</html>
