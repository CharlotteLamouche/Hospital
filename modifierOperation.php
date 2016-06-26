<html>
    
<head>
	<title>Modification d'une opération</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    
    <?php
    
        echo "Modification d'opération :";
        include "connect.php";
        $vConn = fConnect();
        $id=$_POST['id'];
        $vSql= "SELECT * from tOperation where id='$id';";
        $vQuery = pg_query($vConn, $vSql);
        $vResult=pg_fetch_array($vQuery);
        if(!empty($vQuery)){
        echo '  <form method="POST" action="modifierOperation1.php">
        Jour:
        <input type="text" name="jour" value="'.$vResult[jour].'" required>
        <br>
        Heure de début (ajouter AM/PM après l heure):
        <input type="text" name="h_deb" value="'.$vResult[h_deb].'" required>
        <br>
        Spécialité requise
        <input type="text" name="specialite_requise" value="'.$vResult[specialite_requise].'" required>
        <br>
        Numéro de salle:
        <input type="text" name="salle" value="'.$vResult[salle].'" required>
        <br>
        Bâtiment:
        <input type="text" name="batiment" value="'.$vResult[batiment].'" required>
        <br>
        Numéro de dossier du patient:
        <input type="text" name="patient" value="'.$vResult[patient].'" required>
        <br>
	<input type="hidden" name="id" value="'.$vResult[id].'">

        <input type="submit"/> </form>';
	
	}

 pg_close($vConn);
    ?>

</body>

</html>
