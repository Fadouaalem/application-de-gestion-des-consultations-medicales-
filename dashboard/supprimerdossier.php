<?php
$connect = mysqli_connect("localhost", "root", "", "db_healthcare");


    $query = "DELETE FROM dossierMedicale WHERE Id_dossier_medicale = '".$_GET["delete"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'id_dossier supprimé';
        
    }
    header("location:dossier.php");
?>