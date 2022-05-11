<?php


$connect = mysqli_connect("localhost", "root", "", "db_healthcare");


    $query = "DELETE FROM ordonnance WHERE idordonnance = '".$_GET["delete"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'ordonnance supprimé';
    }
    header("location:ordonnance.php");
 

?>