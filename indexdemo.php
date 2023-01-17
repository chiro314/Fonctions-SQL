<?php

//http://localhost/exo/J07-ELEVE-MUG/index.php


//CO>NNEXION au SERVEUR

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname= "bd_test_cma";

//On établit la connexion
$conn = new mysqli($servername, $username, $password);
            
//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}
else
{
    echo "connexion réussie";

    //SELECTION DE LE BASE DE DONNEES
    $conn -> select_db($dbname);
} 

function selectEleves(){
    global $conn;
    $sql ="SELECT ID, PRENOM, NOM, AGE, ID_MUG from eleves"; 
    $result= $conn->query($sql);
    echo "<br>";
    while($row = $result-> fetch_assoc()) {
        echo "ID = ".$row['ID']."  PRENOM : ".$row['PRENOM']."  NOM : ".$row['NOM']."  AGE : ".$row['AGE']."  ID_MUG : ".$row['ID_MUG']."<br>";
    }
}

/* ok :
$sql = "INSERT INTO eleves VALUES ('', 'Christian', 'Mareau', 63, '')";   $conn->query($sql);

function insertEleve($prenom, $nom, $age){
    global $conn;
    $sql = "INSERT INTO eleves VALUES ('', '".$prenom."', '".$nom."', ".$age.", '')" ;
    $conn->query($sql);
}
insertEleve("Paul", "Renard", 23);

function ajouterEleve($prenom, $nom, $age){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO eleves (PRENOM, NOM, AGE) VALUES (?,?,?)");
    $stmt -> bind_param("ssi",$prenom, $nom, $age); 
    $stmt ->execute();
    $stmt -> close();
}
ajouterEleve("Jean", "Dupont", 6);

function majEleve($idEleve, $prenom, $nom, $age){
    global $conn;
    $sql = "UPDATE eleves set PRENOM ='".$prenom."', NOM ='".$nom."', AGE =".$age." WHERE ID =".$idEleve ;
    $conn->query($sql);
}
majEleve(1, "Cricri","Marron", 12);

function supEleve($idEleve){
    global $conn;
    $sql = "DELETE FROM eleves WHERE ID =".$idEleve ;
    $conn->query($sql);
}
supEleve(3);


function addMugToEleve($idEleve, $idMug){
    global $conn;
    $sql = "UPDATE eleves set ID_MUG =". $idMug." WHERE ID =".$idEleve ;
    $conn->query($sql);
}
addMugToEleve(2, 1);


function selectElevesAvecMug(){
    global $conn;
    $sql ="SELECT eleves.ID, eleves.PRENOM, eleves.NOM, eleves.AGE, mugs.DESCRIPTION from eleves, mugs WHERE eleves.ID_MUG = mugs.ID"; 
    $result= $conn->query($sql);
    echo "<br>";
    while($row = $result-> fetch_assoc()) {
        echo "ID = ".$row['ID']."  PRENOM : ".$row['PRENOM']."  NOM : ".$row['NOM']."  AGE : ".$row['AGE']."  DESCRIPTION : ".$row['DESCRIPTION']."<br>";
    }
}
selectElevesAvecMug();
*/

//jointures externes  https://sqlpro.developpez.com/cours/sqlaz/jointures/#LIII-C
function selectElevesAvecOuSansMug(){
    global $conn;
    $sql ="SELECT eleves.ID, eleves.PRENOM, eleves.NOM, eleves.AGE, mugs.DESCRIPTION from eleves LEFT OUTER JOIN mugs ON eleves.ID_MUG = mugs.ID"; 
    $result= $conn->query($sql);
    echo "<br>";
    while($row = $result-> fetch_assoc()) {
        echo "ID = ".$row['ID']."  PRENOM : ".$row['PRENOM']."  NOM : ".$row['NOM']."  AGE : ".$row['AGE']."  DESCRIPTION : ".$row['DESCRIPTION']."<br>";
    }
}
selectElevesAvecOuSansMug();


/*
// INSERT

//$sql = "INSERT INTO mugs VALUES ('', 'Un mug bleu')";
//$conn->query($sql);

//$sql = "INSERT INTO mugs VALUES ('', 'Un mug rouge');";
//$sql .= "INSERT INTO mugs VALUES ('', 'Un mug rouge')";
//if($conn->multi_query($sql) === TRUE) echo "les enregistrements ont été rajoutés";

//$sql = "INSERT INTO mugs VALUES ('', 'Un mug jaune');";
$sql .= "INSERT INTO mugs VALUES ('', 'Un mug jaune')";
if($conn->multi_query($sql) === TRUE) echo "les enregistrements ont été rajoutés";

//$dernierID = $conn->insert_id; //le dernier id inséré
//echo $dernierID; //5 au lieu de 6 : 5 = ID de la 1ère ligne insérée parmis plusieurs

$sql = "INSERT INTO mugs VALUES ('', 'Un mug vert')";
$conn->query($sql);

$dernierID = $conn->insert_id; 
echo $dernierID; 

//Requête prprée :
$stmt = $conn->prepare("INSERT INTO mugs (DESCRIPTION) VALUES (?)");
    $stmt -> bind_param("s", $desc);
        $desc = 'Un mug violet';
        $stmt ->execute();

        $desc = 'Un mug violet BIS';
        $stmt ->execute();
$stmt -> close();

$dernierID = $conn->insert_id; echo $dernierID; // 9 : OK 

//SELECT

$sql = "SELECT ID,DESCRIPTION from mugs";  $result= $conn->query($sql);

echo "<br>";
while($row = $result-> fetch_assoc()) {
    echo "ID = ".$row['ID']."  DESCRIPTION : ".$row['DESCRIPTION']."<br>";
}

//DELETE
$sql = "DELETE from mugs WHERE ID = 2";
$conn->query($sql);

//UPDATE
$sql = "UPDATE mugs set DESCRIPTION = 'Un mug rose' where ID = 4";
$conn->query($sql);


// SELECT avec LIMIT
$sql = "SELECT ID,DESCRIPTION from mugs LIMIT 5";  $result= $conn->query($sql);
echo "<br>";
while($row = $result-> fetch_assoc()) {
    echo "ID = ".$row['ID']."  DESCRIPTION : ".$row['DESCRIPTION']."<br>";
}

$sql = "SELECT ID,DESCRIPTION from mugs LIMIT 5, 1";  $result= $conn->query($sql);
echo "<br>";
while($row = $result-> fetch_assoc()) {
    echo "ID = ".$row['ID']."  DESCRIPTION : ".$row['DESCRIPTION']."<br>";
}
*/








