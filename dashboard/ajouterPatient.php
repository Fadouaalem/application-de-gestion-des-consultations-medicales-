<?php
$id= $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$DateNaissance = $_POST['datedenaissance'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$sanguin = $_POST['sanguin'];
$situation = $_POST['SituationFamilial'];
$email= $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$antecmedic = $_POST['medic'];
$antecchirurg = $_POST['chirurg'];


// si c'est valider on ajoute si non on modifie
    try {

        $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", "");
        $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
      $requete='INSERT INTO  patient(Nom_patient, Prenom_patient, Date_naissance_patient, Age_patient,Sexe_patient,Email_patient, Telephone_patient,  Adresse_patient, Group_sanguin, Situation_familiale_patient, Antecedents_medicaux, Antecedents_chirurgiicaux)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)'; 
     $insertf=$connexionDB->prepare($requete);
      $insertf->execute([$nom,$prenom ,$DateNaissance,$age,$sexe,$email,$telephone, $adresse, $sanguin , $situation    , $antecmedic, $antecchirurg]);

       header("location:listePatient.php");
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
?>