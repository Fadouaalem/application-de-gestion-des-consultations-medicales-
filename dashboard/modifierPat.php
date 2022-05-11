<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
  $nom=htmlspecialchars($_POST['nom']);
  $prenom=htmlspecialchars($_POST['prenom']);
  $email=htmlspecialchars($_POST['email']);
  $telephone=htmlspecialchars($_POST['telephone']);
  $date=htmlspecialchars($_POST['datedenaissance']);
  $age=htmlspecialchars($_POST['age']);
  $sexe=htmlspecialchars($_POST['sexe']);
  $adresse=htmlspecialchars($_POST['adresse']);
  $sanguin=htmlspecialchars($_POST['sanguin']);
  $situation=htmlspecialchars($_POST['SituationFamilial']);
  $chirurg=htmlspecialchars($_POST['chirurg']);
  $medic=htmlspecialchars($_POST['medic']);
  $requete='UPDATE patient set Nom_patient=?,Prenom_patient=?,Date_naissance_patient=?,Age_patient=?,Sexe_patient=?,Email_patient=?,Telephone_patient=?,Adresse_patient=?,Group_sanguin=?,Situation_familiale_patient=?,Antecedents_medicaux=?,Antecedents_chirurgiicaux=?  where Id_patient=?';
 
  $conedit=$connexionDB->prepare($requete);
 
  $conedit->execute([$nom,$prenom,$date,$age,$sexe,$email,$telephone,$adresse,$sanguin,$situation,$medic,$chirurg,$_POST['id']]);
  header("location:listePatient.php");
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>