<?php 

require("database/QueryBilder.php");
$data = ['title' =>$_POST['title'],
         'content'=> $_POST['content'],
         'img'=> $_FILLE['name']];
$db = new QueryBilder();
$result = $db->store('tasks',$data);
//var_dump($_POST);die;
 
header("Location:/githab/tasks/index.php");

      
      
      ?>
      