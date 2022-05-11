<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
  $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $med=htmlspecialchars($_POST['med']);
  $date=htmlspecialchars($_POST['date']);
  $quant=htmlspecialchars($_POST['quant']);
  $dose=htmlspecialchars($_POST['dose']);
 
  $requete='UPDATE ordonnance set medicament=?,dateordonnance=?,quantitemedicament=?,dose=?  where idordonnance=?';
  
  $conedit=$connexionDB->prepare($requete);
 
  $conedit->execute([$med,$date,$quant,$dose,$_POST['id']]);
  header("location:ordonnance.php");
  echo "fait";

 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>