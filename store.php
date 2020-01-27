<?php 

require("database/QueryBilder.php");
$data = ['title' =>$_POST['title'],
         'content'=> $_POST['content'],
         'img'=> $_FILLE['name']];
$db = new QueryBilder();
$result = $db->store('tasks',$data);
//var_dump($_POST);die;
 if (!$result){
     	ini_set('session.use_cookie',0);
	ini_set('session.use_trans_sid',1);
	

	setcookie('ok', '1', time()+1, '/');
	
 }
 	
 
header("Location:/githab/tasks/index.php");

      
      
      ?>
      