<?php
  // require_once 'config/connect.php'; 
   $task_id = $_POST['task_id']; 
   $title = $_POST['title'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   
   mysqli_query($connect, "SELECT * FROM `tasks`");
   header('Location: /taskBase/base.php');