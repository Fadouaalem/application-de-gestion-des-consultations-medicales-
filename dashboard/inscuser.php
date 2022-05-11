<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$DateNaissance = $_POST['date'];

$sexe = $_POST['sexe'];
$telephone = $_POST['tele'];
$ident = $_POST['ident'];
$email= $_POST['email'];

$password = $_POST['password'];



// si c'est valider on ajoute si non on modifie
    try {

        $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", "");
        $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
      $requete='INSERT INTO  user(nom, prenom, datenaissance,email,sexe,password,identifiant, telephone )VALUES (?,?,?,?,?,?,?,?)'; 
     $insertf=$connexionDB->prepare($requete);
      $insertf->execute([$nom,$prenom ,$DateNaissance,$email,$sexe, $password, $ident,$telephone]);

       header("location:login.php");
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
?>