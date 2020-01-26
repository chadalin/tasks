<?php

$pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");
$statement = $pdo->prepare("SELECT * FROM tasks");
      $statement->execute();
      $tasks =$statement->fetchAll(PDO::FETCH_ASSOC);
      


?>
<DOCTYPE HTML>
<HTML LANG="RU">
  <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="" crossorigin="anonymous">
<img src="/assets/img/bootstrap.svg" alt="" width="32" height="32" title="Bootstrap">

  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-12">
  				<h1>Tasks</h1>
  				<a href="create.php" class="btn btn-success btn-lg">Add tasks</a>
  				<table class="table">
  					<thead>
  						<tr>
  							<th>id</th>
  							<th>Foto</th>
  							<td>Title</td>
  								<td>Action</td>
  						</tr>
  					</thead>
  					<tbody>
  						   <?php foreach($tasks as $task):?>  
  						<tr>
  							
  						<td><?= $task['id'];?></td>
  						<td><div class="media">
  							<?php if($task['img']==NULL){
								echo $img = "<img src=\"img/no-user.jpg\" class=\"mr-3\" width=\"64\" height=\"64\">";
  							}
  							
  							?>
									</div></td>
  						<td><?= $task['title'];?></td>
  						
  						<td><a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">Show</a></td>
  						<td><a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Edit</a></td>
  						<td><a href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a></td>
  						
  						</tr>
  						<?php endforeach;?>
  					</tbody>
  				</table>
  				</div>
  		</div>
  	</div>
  	
  </body>
  
  </HTML>
  