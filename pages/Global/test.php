<?php 

require_once "config.php";
require_once "pdo.php";
include("../Commons/header.php");
?>
<?= styleTitreNiveau1("Connexion à ma base de données", COLOR_ASSO) ?>  
<?php
    $bdd = ConnexionPDO();

    $stmt = $bdd->prepare("SELECT * FROM animal");
    $stmt->execute();
    $Resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    echo "<pre>";
    print_r($Resultat);
?>
<?php 

include("../Commons/footer.php"); 
?>
            
      