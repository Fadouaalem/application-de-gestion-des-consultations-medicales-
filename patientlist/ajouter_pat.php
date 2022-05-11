

<?php
$id = $_POST['Id_patient'];
$nom = $_POST['Nom_patient'];
$prenom = $_POST['Prenom_patient'];
$dateN = $_POST['Date_naissance__patient'];
$Age = $_POST['Age_patient'];
$sexe = $_POST['Sexe_patient'];
$email = $_POST['Email_patient'];
$Tel = $_POST['Telephone_patient'];
$adresse = $_POST['Adresse_patient'];

$GrS = $_POST['Group_singuin'];
$situation = $_POST['Situation_familiale_patient'];
$Antecedmed = $_POST['Antécédants_medicaux'];
$Antecedchir = $_POST['Antécédants_chirurgiicaux'];
$insert = $_POST['insert'];
// si c'est valider on ajoute si non on modifie
if ($insert == 'Valider') {

    try {

        $connexionDB = new PDO('mysql:host=localhost;dbname=db_healthcare', 'root', '');

      $insert = $connexionDB->query("INSERT INTO patient(Id_patient,Nom_patient, Prenom_patient, Date_naissance__patient, Age_patient,Sexe_patient,Email_patient, Telephone_patient,  Adresse_patient, Group_singuin, Situation_familiale_patient, Antécédants_medicaux, Antécédants_chirurgiicaux)
      VALUES ('" . $id. "','" . $nom . "','" . $prenom . "','" . $dateN . "','" . $Age . "','" . $sexe . "','" . $email . "','" . $Tel . "','" . $adresse . "','" . $GrS . "','" . $situation . "','" . $Antecedmed . "','" . $Antecedchir . "')");

        header("location:listpat.php");
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }
} // Modifier patient
/*else {
    try {
        $connexionDB = new PDO('mysql:host=localhost;dbname=service', 'root', '');

        $idPATIENT = $_POST['id'];


        $query = "UPDATE patient SET nom_p=?, prenom_p=?, numSC=? , adresse_p=?, numTel_p=?, DateNaissance_p=?,DateRdv=? WHERE idPATIENT=?";

        $query = $connexionDB->prepare($query);

        $query->execute(array($nom, $prenom, $numSC, $adresse, $numTel, $dateN, $dateR, $idPATIENT));

        header("location:listpat.php");
    } catch
    (PDOException $e) {
        die("Erreur: " . $e->getMessage());
    }*/
}
