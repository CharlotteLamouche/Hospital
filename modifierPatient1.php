<html>
    
<head>
	<title>Resultats de le recherche de spécialité</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification de spécialité : </br>";
        include "connect.php";
        $vConn = fConnect();
        $dossier=$_POST['dossier'];
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $num_rue=$_POST['num_rue'];
        $rue=$_POST['rue'];
        $code_postal=$_POST['code_postal'];
        $telephone=$_POST['telephone'];
        $vSql="UPDATE tPatient SET nom='$nom', prenom='$prenom', num_rue='$num_rue', rue='$rue', code_postal='$code_postal', telephone='$telephone' WHERE dossier='$dossier';";
        $vQuery = pg_query($vConn, $vSql);
        $vSql1="Select * from tPatient where dossier='$dossier';";
        $vQuery1= pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo"<th>Dossier</th>";
        echo"<th>Nom</th>";
        echo"<th>Prénom</th>";
        echo"<th>Numéro</th>";
        echo"<th>Rue</th>";
        echo"<th>Code Postal</th>";
        echo"<th>Téléphone</th>";
        echo"</tr>";
        while($vResult=pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo"<td>$vResult[dossier]</td>";
            echo"<td>$vResult[nom]</td>";
            echo"<td>$vResult[prenom]</td>";
            echo"<td>$vResult[num_rue]</td>";
            echo"<td>$vResult[rue]</td>";
            echo"<td>$vResult[code_postal]</td>";
            echo"<td>$vResult[telephone]</td>";
            echo "</tr>";
            
        }



 pg_close($vConn);
    ?>

</body>

</html>
