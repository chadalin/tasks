<?php 


//var_dump($_POST);die;
 $pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");


 $sql = "INSERT INTO tasks (title, content) VALUES (:title,:content)";
 $statement =$pdo->prepare($sql);
 $statement->bindParam(":title", $_POST['title']);
 $statement->bindParam(":content", $_POST['content']);
      $statement->execute();
     //var_dump($statement);die;
      
      header("Location:/githab/tasks/index.php");
      ?>
      