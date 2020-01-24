<?php

$pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id",$_GET['id']);
      $statement->execute();
      $task=$statement->fetch(PDO::FETCH_ASSOC);

//var_dump($tasks);
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
  				 <?php ?>
  				
  				<table class="table">
  					<div class="media">
  						 <img src="/githab/tasks/<?= $task['img'];?>"class="mr-3" alt="..." width="64" height="64" >
  						
  					</div>
  				<h1><?= $task['title'];?></h1>
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