Consignes :

- Vous allez réaliser votre premier CRUD en PHP : CRUD est l'acronyme de Create Read Update Delete
- Tout d'abord, vous allez utiliser PHP et l'extension mySQLi pour vous connecter à votre base de donnée sur webhost
- Vous selectionnerez votre base de donnée
- Vous allez créer une fonction en PHP qui va ajouter une personne à la table eleves, cette fonction prendra en parametre
$nom,$prenom, $age

- A l'intérieur de cette fonction, vous allez executer la requete sql adéquate qui va insérer un nouvel enregistrement
  en utilisant les parametres de votre fonction comme valeurs

- Vous allez créer une fonction qui va selectionner tout les enregistrements de la table eleves et retourner le resultat
- Vous allez faire un appel à cette fonction pour afficher la liste des éléves sur la page

- Créer une autre fonction permettant de mettre à jour un éléve, cette fonction prendra en parametre $prenom,$nom,$age
   et $idEleve, elle mettre à jour l'éléve ayant pour id $idEleve en utilisant l'instruction SQL adéquate

- Créer une autre fonction permettant de supprimer un éléve, cette fonction prendra en parametre $idEleve et permettra
   de supprimer l'enregistrement ayant pour id $idEleve en utilisant l'instruction SQL adéquate.

BONUS : Créer toute la partie front qui affichera un formulaire permettant d'ajouter un éléve, un lien permettant d'afficher
   la liste des éléves, un lien permettant de supprimer un éléve, un lien permettant de mettre à jour un éléve.

BONUS2 : Permettre d'ajouter des mugs depuis le front, permettre d'associer un mug à un éléve, permettre de modifier un mug,
 créer une fonction qui retourne les éléves et les mugs que ceux ci possédent.





