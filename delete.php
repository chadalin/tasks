<?php

 $pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");


 $sql = "DELETE FROM tasks WHERE id=:id";
 $statement =$pdo->prepare($sql);
 $statement->bindParam(":id", $_GET['id']);
 
      $statement->execute();
     //var_dump($statement);die;
      session_start($_COKKIE['ok']);
      header("Location:/githab/tasks/index.php");
      ?>
