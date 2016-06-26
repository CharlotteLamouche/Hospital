<html>
    
<head>
    <title>Page d'association avec les allergies</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
$choix=$_POST['choixasso'];

if ($choix=='allPatient')
{
    echo "Voulez vous vraiment réaliser des associations allergie/patient ?";
    echo '  <form method="POST" action="assoPatient.php">
   	 <input type="submit"/> 
     </form>';
}

if ($choix=='allMedicament')
{
	echo "Voulez vous vraiment réaliser des associations allergie/médicament ?";
    echo '  <form method="POST" action="assoMedicament.php">
   	 <input type="submit"/> 
     </form>';
}
	
?>

</body>
