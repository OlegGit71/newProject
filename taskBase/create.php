<?php
 require_once '../config/connect.php'; 
 $task = $_GET['task_id'];
 $task = mysqli_query($connect, "INSERT INTO `tasks` (`task_id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../taskBase/css/style.css">
    <title>Новый товар</title>
</head>
<body>

  <h2>Новый товар</h2>
  <form action="../vendor/create.php" method="post">
    <p>Название</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Цена</p>
    <input type="number" name="price">
    <button type="submit" >Добавить</button>
 </form>
    
</body>
</html>