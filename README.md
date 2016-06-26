# Hospital
Gestion d'un hôpital

Contexte :

L'hôpital Cachin veut mettre en place une base de données pour gérer ses différentes ressources et garder trace d'informations importantes (opérations, allergies aux médicament des patients, etc.). En particulier, l'hôpital veut gérer ses salles (et ce qui s'y passe), ses médecins, ses médicaments et ses patients.


Objectif du projet :

Vous disposez des informations suivantes :

L'hôpital est constitué de plusieurs bâtiments, identifiés par une lettre et un nom (dont la première lettre est la même que celle du bâtiment), tous deux uniques. Les bâtiments contiennent plusieurs salles, avec un numéro unique dans le bâtiment et une localisation (Rez de Chaussée, premier étage, etc.). Les salles peuvent être soit des chambres, des salles de consultation ou des salles d'opération. Les chambres ont un nombre de lits qui correspond au nombre de patients maximum qu'elles peuvent contenir.

Les médecins ont un nom, prénom, adresse, numéro de téléphone et spécialité. Les patients ont un nom, prénom, adresse, numéro de téléphone et numéro de dossier. Les patients résidant dans l'hôpital ont une chambre assignée.

Les consultations ont lieu dans une salle de consultation, à une date précise, avec une heure de début et de fin. Un médecin s'occupe d'un même créneau de consultation. Les patients ont rendez-vous dans un créneau, à une heure donnée (forcément contenue dans les heures de début et de fin du créneau de consultation).

Les opérations ont lieu dans une salle d'opération, avec un jour et un horaire de début. On opère qu'un seul patient, mais plusieurs médecins peuvent être présents. Plusieurs doses de différents médicaments peuvent être utilisées pendant une opération. Les opérations ont une spécialité, qu'au moins un des médecins présents doit posséder.

Un médicament est caractérisé par son nom et son laboratoire. L'hôpital veut aussi garder en mémoire le nombre de médicaments qu'il possède actuellement, pour pouvoir passer des commandes si nécessaire. Un patient peut être allergique à un ou plusieurs médicaments. Ce n'est pas une bonne idée de donner un médicament à un patient s'il y est allergique. Les médecins font des prescriptions de un ou plusieurs médicaments aux patients, précisant une date de début et de fin, et pour chaque médicament le nombre à prendre par jour.


Autres informations :

L'hôpital est également intéressé par divers statistiques, comme par exemple :

Quels médicaments sont les plus utilisés ?

Quels docteurs utilisent le plus de médicaments (en prescription et pendant les opérations ; pour ces dernières on considérera que les médicaments sont utilisés par tous les médecins présents) ?

Quels docteurs ont le plus de patients en consultation ?
