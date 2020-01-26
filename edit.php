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
				<div class="media">
				<img src="img/no-user.jpg" class="mr-3" width="64" height="64">
  							</div>
				<form action="update.php?id=<?= $task['id'];?>" method="post">
					<div class="form-group">
						<input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
					</div>
						<div class="form-group">
						<textarea name="content" class="form-control"><?= $task['content'];?></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-warning" type="submit">Submit</button>
					</div>
				</form>
				
				
				
	
</body>
</html>