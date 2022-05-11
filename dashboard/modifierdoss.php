<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
  //$connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $nom=htmlspecialchars($_POST['nomM']);
  $numero=htmlspecialchars($_POST['numero']);
  $date=htmlspecialchars($_POST['datecreation']);
  $nomMed=htmlspecialchars($_POST['nomMed']);
  $prenomMed=htmlspecialchars($_POST['prenomMed']);
  $specialite=htmlspecialchars($_POST['specialite']);
  $requete='UPDATE dossiermedicale set Nom_mutuelle=?,Numero_mutuelle=?,Date_creation=?,Nom_medecin=?,Prenom_medecin=?,Specialite_medecin=?where Id_dossier_medicale=?';
 
  $conedit=$connexionDB->prepare($requete);
 
  $conedit->execute([$nom,$numero,$date,$nomMed,$prenomMed,$specialite,$_POST['id']]);
  header("location:dossier.php");
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>