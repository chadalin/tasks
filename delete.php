<?php

 
     //var_dump($statement);die;
      session_start($_COKKIE['ok']);
      header("Location:/githab/tasks/index.php");
      
      require "database/QueryBilder.php";
      
      $db = new QueryBilder();
      $db->delet('tasks',$_GET['id']);
      if (!$result){
     	ini_set('session.use_cookie',0);
	ini_set('session.use_trans_sid',1);
	

	setcookie('okDelete', '1', time()+1, '/');
	
 }
       header("Location:/githab/tasks/index.php");
      ?>
