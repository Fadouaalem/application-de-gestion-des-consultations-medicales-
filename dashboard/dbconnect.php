<?php

 $host='localhost';
  $user="root";
  $pass="";
  $dbname="db_healthcare";
  try{
      $dsn="mysql:host=".$host .";dbname=" . $dbname;
      $pdo=new PDO ($dsn,$user,$pass);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      //echo "la connexion a été établie avec success";
  }
  catch(PDOException $e){
      echo "pas de connexion à la base de données" . $e->getMessage();
  }
  ?>
