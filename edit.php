<?php

$pdo = new PDO ("mysql:host=localhost;dbname=ch35098_githab","ch35098_githab","m0t0r0la");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Edit tasks</h1>
				<div class="media"><?php if ( $task['img']){ ?>
				       <h4>Name image: <?= $task['img'];?></h4>
				       
  				     <img src="/githab/tasks/uploads/<?= $task['img'];?>" class="mr-3" width="64" height="64">
  				      <?php
  					}else{ ?>
  		            	<img src="/githab/tasks/img/no-user.jpg" class="mr-3" width="64" height="64">
  		            	<?php 
  					}
  					?>
  					</div>
				<form action="update.php?id=<?= $task['id'];?>" method="post">
					<div class="form-group">
						<h4>Edit title:</h4>
						<input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
					</div>
					<h4>Edit name foto:</h4>
					<div class="form -group">
						<input type="text" name="img" class="form-control" value="<?= $task['img'];?>">
					</div>
						<h4>Edit text task:</h4>
						<div class="form-group">
						<textarea name="content" class="form-control"><?= $task['content'];?></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-warning" type="submit">Submit</button>
						    <a href="/githab/tasks/index.php" class="btn btn-info">Cancel</a>  
					</div>
				
				</form>
			<?php	var_dump(scandir(__DIR__ . '/uploads'));?>
				<div class="">
				  <h3>Add foto</h3>
				</div>
				<form action="upload.php?id=<?= $task['id'];?>" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input class="btn btn-success" type="submit">
    </form>
  <?php   var_dump($_FILES);?>
    <?php
if (!empty($_FILES)) {
    var_dump($_FILES);
}
?>
				
				
				
	
</body>
</html>