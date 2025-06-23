<?php
 require_once '../config/connect.php'; 
 $task_id = $_GET['task_id'];
 $task = mysqli_query($connect, "SELECT * FROM `tasks` WHERE `task_id`='$task_id'");
 $task = mysqli_fetch_assoc($task);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../taskBase/css/style.css">
    <title>Обновить товар</title>
</head>
<body>

  <h2>обновить товар</h2>
  <form action="../vendor/update.php" method="post">
    <p>Название</p>
    <input type="hidden" name="task_id" value="<?= $task_id ?>">
    <input type="text" name="title" value="<?= $task['title']?>">
    <p>Описание</p>
    <textarea name="description"><?= $task['description']?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?= $task['price']?>">
    <button type="submit" >Обновить</button>
 </form>
    
</body>
</html>