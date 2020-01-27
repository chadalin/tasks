

<?php

require ("database/QueryBilder.php");
//var_dump($_GET);
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];
}
$data = [ 'id'=> $_GET['id'],
           'img'=> $file['name'],
           'data'=> $file['size']];


    // собираем путь до нового файла - папка uploads в текущей директории
    // в качестве имени оставляем исходное файла имя во время загрузки в браузере
    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;
//var_dump($newFilePath);
    if (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        echo $error = 'Ошибка при загрузке файла';
         //var_dump($result);
    } else {
        $result = '/githab/tasks/uploads/' . $srcFileName;
        
        $db = new QueryBilder();
        $tasks = $db->update('tasks', $data);
    header("Location:/githab/tasks/index.php");
      //var_dump($tasks);
    }
 
    

?>