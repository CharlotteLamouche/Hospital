<html>
    
<head>
    <title>Page de recherche secondaire</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
$choix=$_POST['choix'];
if ($choix=='medecin')
{
    echo "Entrer les informations relatives au medecin <br>";
    echo '  <form method="POST" action="resultatsMedecin.php">
   	 Nom:
   	 <input type="text" name="nom" required> <br>
   	 Prénom:
   	 <input type="text" name="prenom" required> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='specialite')
{
    echo "Entrer les informations relatives à la spécialité <br>";
    echo '  <form method="POST" action="resultatsSpecialite.php">
   	 Nom:
   	 <input type="text" name="specialite" required> <br>
   	 <input type="submit"/> </form>';
}

if ($choix=='patient')
{
    echo "Entrer les informations relatives au patient <br>";
    echo '  <form method="POST" action="resultatsPatient.php">
    Nom:
    <input type="text" name="nom" required> <br>
    Prénom:
    <input type="text" name="prenom" required> <br>
    <input type="submit"/> </form>';
}
if ($choix=='prescription')
{
    echo "Entrer les informations relatives à la prescription <br>";
    echo '  <form method="POST" action="med_pat_recherche_prescription.php">
   	 Nom du medecin:
   	 <input type="text" name="medecin" required> <br>
   	 Nom du patient:
   	 <input type="text" name="patient" required> <br>
	<input type="submit"/> </form>';
}

if ($choix=='operation')
{
    echo "Entrer les informations relatives à l'operation <br>";
    echo '  <form method="POST" action="resultatsOperation.php">
   	 Date:
   	 <input type="text" name="date"> <br>
   	 Numéro de Salle:
   	 <input type="text" name="salle"> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='salle')
{
    echo "Entrer les informations relatives à la salle <br>";
    echo '  <form method="POST" action="resultatsSalle.php">
   	 Batiment:
   	 <input type="text" name="batiment" required> <br>
   	 Numéro de Salle:
   	 <input type="text" name="salle"> <br>
     Type :
       <select name="type">
               <option value="consultation">Consultation</option>

               <option value="operation">Opération</option>

               <option value="chambre">Chambre</option>
   	 </select> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='allergie')
{
    echo "Entrer les informations relatives à l'allergie <br>";
    echo '  <form method="POST" action="resultatsAllergie.php">
   	 Nom de l allergie:
   	 <input type="text" name="allergie" required> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='medicament')
{
    echo "Entrer les informations relatives au medicament <br>";
    echo '  <form method="POST" action="resultatsMedicament.php">
   	 Nom du médicament:
   	 <input type="text" name="nom" required> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='consultation')
{
    echo "Entrer les informations relatives à la consultation <br>";
    echo '  <form method="POST" action="resultatsConsultation.php">
   	 Date:
   	 <input type="text" name="date"> <br>
   	 Numéro de la salle:
   	 <input type="text" name="salle"> <br>
   	 <input type="submit"/> </form>';
}
if ($choix=='batiment')
{
    echo "Entrer les informations relatives au bâtiment <br>";
    echo '  <form method="POST" action="resultatsBatiment.php">
    Nom:
        <input type="text" name="batiment"> <br>
        <input type="submit"/> </form>';
}

?>

</body>
</html>

