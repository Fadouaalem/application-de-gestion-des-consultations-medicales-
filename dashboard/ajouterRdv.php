<?php

$titre = $_POST['titre'];
$daterdv = $_POST['daterdv'];
$heuredebut = $_POST['heuredebut'];
$heurefin = $_POST['heurefin'];
$desc=$_POST['desc'];
$id= $_POST['id'];
    try {
     $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
     $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $requete ='INSERT INTO rdv( Titre,Date_rendez_vous,Heure_debut,Heure_fin,Id_patient,description)  VALUES  (?,?,?,?,?,?)';
      $insertf=$connexionDB->prepare($requete);
      $insertf->execute([$titre,$daterdv,$heuredebut, $heurefin,$id,$desc]);
       header("location:listeRdv.php");
       
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
   
?>