<?php

require ("database/QueryBilder.php");
$db = new QueryBilder();

$task = $db->getOne("tasks",$_GET['id']);


?>
<DOCTYPE HTML>
<HTML LANG="RU">
  <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="" crossorigin="anonymous">

  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-12">
  				<h1>Tasks № <?= $task['id'];?><?= $task['title'];?></h1>
  				 <span><small><?= date( 'H:i:s', strtotime($message['created_at'])),"\n" ;?></small></span>
  				
  				<table class="table">
  					<div class="media"><?php if ( $task['img']){ ?>
  				     <img src="/githab/tasks/uploads/<?= $task['img'];?>" class="mr-3" width="64" height="64">
  				      <?php
  					}else{ ?>
  		            	<img src="/githab/tasks/img/no-user.jpg" class="mr-3" width="64" height="64">
  		            	<?php 
  					}
  					?>
  					</div>
  				
  				<p><?= $task['content'];?></p>
  		    	<a href="/githab/tasks/index.php" class="btn btn-primary btn-lg">Bask</a>
  		    	<a href="/githab/tasks/create.php" class="btn btn-secondary btn-lg">Add tasks</a>
  		    	<a href="/githab/tasks/delete.php?id=<?= $task['id'];?>" class="btn btn-danger btn-lg">Delete</a>
  		        
  				</table>
  				</div>
  		</div>
  	</div>
  	
  </body>
  
  </HTML>