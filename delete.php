<?php

 
     //var_dump($statement);die;
      session_start($_COKKIE['ok']);
      header("Location:/githab/tasks/index.php");
      
      require "database/QueryBilder.php";
      
      $db = new QueryBilder();
      $db->delet('tasks',$_GET['id']);
       header("Location:/githab/tasks/index.php");
      ?>
