<?php
  require_once '../config/connect.php';
   $task = $_POST['task_id'];   
   $title = $_POST['title'];
   $description = $_POST['description'];
   $price = $_POST['price'];

   mysqli_real_query($connect, "INSERT INTO `tasks` (`task_id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

   header('Location: /taskBase/base.php'); 