<?php


$connect = mysqli_connect("localhost", "root", "", "db_healthcare");


    $query = "DELETE FROM consultation WHERE Id_consultation = '".$_GET["delete"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'consultation supprimé';
    }
    header("location:listeConsultation.php");
 

?>