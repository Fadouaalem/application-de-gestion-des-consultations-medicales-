<?php


$connect = mysqli_connect("localhost", "root", "", "db_healthcare");


    $query = "DELETE FROM rdv WHERE Id_rendez_vous = '".$_GET["delete"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'rendez-vous supprimé';
    }
    header("location:listeRdv.php");
 

?>