<html>
    
<head>
    <title>Page d'ajout secondaire</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
$choix=$_POST['choixajout'];
if ($choix=='Medecin')
{
    echo "Voulez vous vraiment ajouter un médecin ?";
    echo '  <form method="POST" action="ajoutMedecin.php">
   	 <input type="submit"/> 
     </form>';
}

if ($choix=='Specialite')
{
    echo "Entrer les informations relatives à la spécialité à ajouter";
    echo '  <form method="POST" action="ajoutSpecialite.php">
   	 Nom:
   	 <input type="text" name="nom" required>
   	 Type:
   	 <input type="text" name="type" required>
   	 <input type="submit"/> 
     </form>';
}

if ($choix=='Patient')
{
    echo "Voulez vous vraiment ajouter un patient ?";
    echo '  <form method="POST" action="ajoutPatient.php">
   	 <input type="submit"/> 
     </form>';
}


if ($choix=='Prescription')
{
    echo "Voulez vous vraiment ajouter une Prescription ?";
    echo '<form method="POST" action="ajoutPrescription.php">
    	  <input type="submit"/> </form>';
}

if ($choix=='Medicament')
{
	echo "Voulez vous vraiment ajouter un médicament ?";
    echo '  <form method="POST" action="ajoutMedicament.php">
   	 <input type="submit"/> 
     </form>';
}
	
if ($choix=='Salle Operation')
{
   echo"Voulez vous vraiment ajouter une salle d'opération ?";
    echo '<form method="POST" action="ajoutOperation.php">
    	  <input type="submit"/> </form>';
	
}

if ($choix=='Allergie')
{
    echo "Entrer les informations relatives à l'allergie";
    echo '  <form method="POST" action="ajoutAllergie.php">
   	 Nom :
   	 <input type="text" name="nom" required>
   	 <input type="submit"/> </form>';
}

if ($choix=='Salle consultation')
{
    echo "Voulez vous entrer les informations relatives à la consultation ?";
    echo '  <form method="POST" action="ajoutConsultation.php" >
   	 	<input type="submit"/> </form>';
}

if ($choix=='Chambre')
{
    echo "Voulez vous vraiment ajouter une chambre ?";
    echo '<form method="POST" action="ajoutChambre.php" >
    	  <input type="submit"/> </form>';
	
}


if ($choix=='Batiment')
{
    echo "Entrer le nom du bâtiment:";
    echo '  <form method="POST" action="ajoutBatiment.php">
   	 <input type="text" name="batiment" required>
   	 <input type="submit"/> </form>';
}

if ($choix=='Operation')
{
	echo"Voulez vous vraiment ajouter une opération?";
	echo '<form method="POST" action="ajouterOperation.php">
    	  <input type="submit"/> </form>';
}

if ($choix=='Creneau')
{
	echo"Voulez vous vraiment ajouter un créneau?";
	echo '<form method="POST" action="ajoutCreneau.php">
    	  <input type="submit"/> </form>';
}
	
?>

</body>
