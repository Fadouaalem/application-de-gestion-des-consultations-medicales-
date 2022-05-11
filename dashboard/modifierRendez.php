<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
  $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $titre=htmlspecialchars($_POST['titre']);
  $date=htmlspecialchars($_POST['daterdv']);
  $debut=htmlspecialchars($_POST['heuredebut']);
  $fin=htmlspecialchars($_POST['heurefin']);
  $desc=htmlspecialchars($_POST['desc']);
 
  $requete='UPDATE rdv set Titre=?,Date_rendez_vous=?,Heure_debut=?,Heure_fin=?,description=?  where Id_rendez_vous=?';
 
  $conedit=$connexionDB->prepare($requete);
 
  $conedit->execute([$titre,$date,$debut,$fin,$desc,$_POST['idrdv']]);
  header("location:listeRdv.php");
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>