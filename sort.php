<?php 
require ("database/QueryBilder.php");
$db = new QueryBilder();
$sort = $db->sortUP('tasks', 'title');
var_dump($sort);