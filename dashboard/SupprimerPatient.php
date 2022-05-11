<?php
$connect = mysqli_connect("localhost", "root", "", "db_healthcare");


    $query = "DELETE FROM patient WHERE Id_patient = '".$_GET["delete"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Patient supprimé';
        
    }
    header("location:listePatient.php");
?>
