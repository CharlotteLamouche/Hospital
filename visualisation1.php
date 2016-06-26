<html>
    
<head>
    <title>Page d'ajout secondaire</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
include "connect.php";
$vConn = fConnect();
$choix=$_POST['choixvisu'];
if ($choix=='Medecin')
{
   $vSql="SELECT * FROM tMedecin order by nom";
	 $vQuery = pg_query($vConn, $vSql);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "<th>Téléphone</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery)){
            echo "<tr>";
            echo "<td>$vResult[id]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[adresse_numero]</td>";
            echo "<td>$vResult[adresse_rue]</td>";
            echo "<td>$vResult[adresse_codepostal]</td>";
            echo "<td>$vResult[numero_tel]</td>";
            echo "</tr>";
        }
        echo "</table>";
	echo "</br>";

}
if ($choix=='Patient')
{
	$vSql1="SELECT * FROM tPatient";
 	$vQuery1 = pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Numéro de dossier</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>Numéro</th>";
        echo "<th>Rue</th>";
        echo "<th>Code Postal</th>";
        echo "<th>Téléphone</th>";
        echo "<th>Chambre</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult[dossier]</td>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prenom]</td>";
            echo "<td>$vResult[num_rue]</td>";
            echo "<td>$vResult[rue]</td>";
            echo "<td>$vResult[code_postal]</td>";
            echo "<td>$vResult[telephone]</td>";
            echo "<td>$vResult[chambre]</td>";
            echo "</tr>";
        }
        
        echo "</table>";
	echo "</br>";
}
if ($choix=='Specialite')
{
	$vSql1="SELECT * FROM tSpecialite";
 	$vQuery1 = pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>Type</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[type]</td>";
            echo "</tr>";
        }
        
        echo "</table>";
	echo "</br>";
}
if ($choix=='Medicament')
{
	$vSql1="SELECT * FROM tMedicament";
 	$vQuery1 = pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>Labo</th>";
	echo "<th>Nombre</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[labo]</td>";
		echo "<td>$vResult[nb]</td>";
            echo "</tr>";
        }
        
        echo "</table>";
	echo "</br>";
}
if ($choix=='Allergie')
{
	$vSql1="SELECT * FROM tAllergie";
 	$vQuery1 = pg_query($vConn, $vSql1);
        echo"<table border='1'>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "</tr>";
        
        while($vResult = pg_fetch_array($vQuery1)){
            echo "<tr>";
            echo "<td>$vResult[nom]</td>";
            echo "</tr>";
        }
        
        echo "</table>";
	echo "</br>";
}


	 pg_close($vConn);

    ?>
