<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
  $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $date=htmlspecialchars($_POST['datecons']);
  $poids=htmlspecialchars($_POST['poids']);
  $taille=htmlspecialchars($_POST['taille']);
  $temp=htmlspecialchars($_POST['temp']);
  $frequence=htmlspecialchars($_POST['frequence']);
  $pression=htmlspecialchars($_POST['pression']);
  $glycemie=htmlspecialchars($_POST['glycemie']);  
  $diagn=htmlspecialchars($_POST['diagn']);
  $mal=htmlspecialchars($_POST['maladie']);
  $symp=htmlspecialchars($_POST['symptome']);
  $id=htmlspecialchars($_POST['id']);

  $requete='UPDATE consultation set Date_consultation=?,Poids=?,Taille=?,Temperature=?,Frequence_cardiaque=?,Pression_arterielle=?,Glycemie=?,Diagnostique_medicale=?,Maladie=?,Symptome=?,Id_patient=?where Id_consultation=?';
 
  $conedit=$connexionDB->prepare($requete);
  $conedit->execute([$date,$poids,$taille,$temp,$frequence,$pression,$glycemie,$diagn,$mal,$symp,$id,$_POST['idcons']]);
  header("location:listeConsultation.php");
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>