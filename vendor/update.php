<?php
   require_once '../config/connect.php'; 
   $task_id = $_POST['task_id']; 
   $title = $_POST['title'];
   $description = $_POST['description'];
   $price = $_POST['price'];

   mysqli_query($connect,"UPDATE `tasks` SET  `title` = '$title', `description` = '$description', `price` = '$price' WHERE `tasks`.`task_id` = '$task_id'");
   header('Location: /taskBase/base.php');