<?php
// Connexion à la base de données
 /* try
{
	$bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



      
          $sql .= "VALUES (:nom,:prenom,:adresse,:sexe,:dateNaissance,:userId) ";
 Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO patient(Id_patient,Nom_patient, Prénom_patient, Date_naissance_patient, Age_patient,Sexe_patient,Email_patient, Téléphone_patient,  Adresse_patient, Group_sanguin, Situation_familiale_patient, Antécédants_medicaux, Antécédants_chirurgiicaux,id_dossier_médicale) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$req->execute(array($_POST['id'], $_POST['id_dossier'], $_POST['nom'], $_POST['prenom'], $_POST['datedenaissance'], $_POST['age'], $_POST['sexe'], $_POST['sanguin'], $_POST['SituationFamilial'], $_POST['email'], $_POST['telephone'], $_POST['adresse'], $_POST['medic'], $_POST['chirurg']));

echo'bien fait new';*/
?>
<?php

class Panel{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
public function ajouter($data)
    {
         $sql = "INSERT INTO patient(Id_patient,Nom_patient, Prénom_patient, Date_naissance_patient, Age_patient,Sexe_patient,Email_patient, Téléphone_patient,  Adresse_patient, Group_sanguin, Situation_familiale_patient, Antécédants_medicaux, Antécédants_chirurgiicaux,id_dossier_médicale) ";
$sql .= " VALUES  (:id,:nom, :prenom ,:datedenaissance, :age, :sexe, :sanguin, :SituationFamilial, :email, :telephone, :adresse, :medic, :chirurg, :id_dossier)";
            
        
        $this->db->query($sql);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':datedenaissance', $data['datedenaissance']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':sanguin', $data['sanguin']);
        $this->db->bind(':SituationFamilial', $data['SituationFamilial']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':medic', $data['medic']);
        $this->db->bind(':chirurg', $data['chirurg']);
        $this->db->bind(':id_dossier', $data['id_dossier']);
        /*
        if ($_SESSION['userType'] == 'medecin')
            $this->db->bind(':codeService', $data['codeService']);*/
        $answer = $this->db->execute();
        /* $this->db->query("UPDATE users SET state = 'complet' WHERE id=".$_SESSION['userId']);
         $updateState =$this->db->execute();
        $_SESSION['userState']='complet';*/
        return $answer;
    }
  