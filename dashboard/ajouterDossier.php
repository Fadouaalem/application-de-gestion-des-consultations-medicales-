<?php
$id= $_POST['id'];
$nomM = $_POST['nomM'];
$num = $_POST['numero'];
$date = $_POST['datecreation'];
$nomMed = $_POST['nomMed'];
$prenomMed = $_POST['prenomMed'];
$specialite = $_POST['specialite'];
$id_p= $_POST['id_patient'];
// si c'est valider on ajoute si non on modifie
    try {
        $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", "");
         $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
      $requete='INSERT INTO  dossiermedicale(Nom_mutuelle,Numero_mutuelle,Date_creation,Nom_medecin,Prenom_medecin, Specialite_medecin,Id_patient)VALUES (?,?,?,?,?,?,?)'; 
     $insertf=$connexionDB->prepare($requete);
     $insertf->execute([$nomM,$num ,$date,$nomMed,$prenomMed,$specialite,$id_p]);

       header("location:dossier.php");
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
?>