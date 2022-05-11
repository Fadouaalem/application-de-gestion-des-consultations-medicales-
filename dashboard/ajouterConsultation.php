<?php



$date = $_POST['datecons'];
$poids = $_POST['poids'];
$taille = $_POST['taille'];
$temperature = $_POST['temp'];
$freq = $_POST['frequence'];
$gly= $_POST['glycemie'];
$pression = $_POST['pression'];
$diagn = $_POST['diagn'];
$sympt = $_POST['symptome'];
$maladie = $_POST['maladie'];
$id=$_POST['id'];
    try {
        $connexionDB = new PDO('mysql:host=localhost;dbname=db_healthcare', 'root', ''); 
        $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $requete ='INSERT INTO consultation(Date_consultation,Poids,Taille,Temperature,Frequence_cardiaque,Pression_arterielle,Glycemie,Diagnostique_medicale,Maladie,Symptome,Id_patient)  VALUES  (?,?,?,?,?,?,?,?,?,?,?)';
      $insertf=$connexionDB->prepare($requete);
      $insertf->execute([$date,$poids ,$taille,$temperature,$freq ,$pression ,$gly , $diagn ,$maladie, $sympt ,$id]);
       header("location:listeConsultation.php");
      
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
       
    }
   
?>