<?php
$email = $_POST['email'];
$password = $_POST['password'];

try {
    //connexion à la base de donnée
    $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", "");
    $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch
(PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
// Hachage du mot de passe
//$pass_hache = sha1($_POST['password']);

// Vérification des identifiants
$req = $connexionDB->prepare('SELECT identifiant FROM user WHERE email = ? AND password = ?');
$req->execute(array($email,$password));

$resultat = $req->fetch();

if (!$resultat) {
    echo 'Mauvais email ou mot de passe !';
} else {
    session_start();
    $_SESSION['email']=$email;
    header("location:index.php");
       /* if($resultat['typeUser'] == "admin"){
            }
        elseif ($resultat['typeUser'] == "medecin")
        {
            header("location:homeMedecin.php");}
        elseif ($resultat['typeUser'] == "infirmier")
        {
            header("location:homeInfirmier.php");}
        elseif ($resultat['typeUser'] == "secretaire")
        {
            header("location:homeSecretaire.php");}
*/
}
?>