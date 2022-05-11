<?php

$date = $_POST['date'];
$med = $_POST['med'];
$quant = $_POST['quant'];
$dose = $_POST['dose'];
$cons= $_POST['cons'];
    try {
     $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
     $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $requete ='INSERT INTO ordonnance( medicament,dateordonnance,quantitemedicament,dose,Id_consultation)  VALUES  (?,?,?,?,?)';
      $insertf=$connexionDB->prepare($requete);
      $insertf->execute([$med,$date,$quant, $dose,$cons]);
       header("location:ordonnance.php");
       
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
   
?>