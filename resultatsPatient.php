<html>
    
<head>
	<title>Resultats de le recherche de patients</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Resultats de la recherche de patients : </br>";
        include "connect.php";
        $vConn = fConnect();
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $vSQL = "SELECT * FROM tPatient WHERE nom = '$nom' AND prenom = '$prenom';";
        $vQuery = pg_query($vConn, $vSQL);
	if(pg_num_rows($vQuery)){
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Numéro de dossier</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[dossier]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[num_rue]</td>";
            echo "<td>$vResult[rue]</td>";
            echo "<td>$vResult[code_postal]</td>";
            echo "</tr>";
        }
        echo "</table></br>";
        
        echo '  <form method="POST" action="resultatsPatient2.php">
        Entrez le numéro de dossier correspondant au patient dont vous voulez voir les informations : </br>
        <input type="text" name="dossier" required>
        <input type="submit"/> </form>';
	}else{echo "</br>Il n'y a pas de patient nommé ainsi.";}
  pg_close($vConn);

    ?>

</body>

</html>
