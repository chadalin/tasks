<?php

$data = [ 'id'=> $_GET['id'],
         'title'=> $_POST['title'],
         'content'=> $_POST['content']];
        
        
$pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");
$sql = "UPDATE  tasks SET title=:title, content=:content  WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($data);

$task = $statement->fetch(PDO::FETCH_ASSOC);

header("Location:/githab/tasks/index.php");