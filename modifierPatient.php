<html>
    
<head>
	<title>Modification de patient</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification de patient :";
        include "connect.php";
        $vConn = fConnect();
        $dossier=$_POST['dossier'];
        $vSql= "SELECT * from tPatient where dossier='$dossier';";
        $vQuery = pg_query($vConn, $vSql);
        $vResult=pg_fetch_array($vQuery);
        if(!empty($vQuery)){
        echo '  <form method="POST" action="modifierPatient1.php">
        Nom :
        <input type="text" name="nom" value="'.$vResult[nom].'" required> </br>
	Prenom :
        <input type="text" name="prenom" value="'.$vResult[prenom].'" required> </br>
	Numéro de rue :
        <input type="text" name="num_rue" value="'.$vResult[num_rue].'" required> </br>
	Rue :
        <input type="text" name="rue" value="'.$vResult[rue].'" required> </br>
	Code Postal :
        <input type="text" name="code_postal" value="'.$vResult[code_postal].'" required> </br>
	Telephone :
        <input type="text" name="telephone" value="'.$vResult[telephone].'" required> </br>
        <input type="hidden" name="dossier" value="'.$dossier.'" required>

        <input type="submit"/> </form>';
	
	}

 pg_close($vConn);
    ?>

</body>

</html>
