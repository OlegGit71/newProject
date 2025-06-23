<?php
 require_once '../config/connect.php'; 
 $task_id = $_GET['task_id'];
 mysqli_query($connect,"DELETE FROM tasks WHERE `tasks`.`task_id` = '$task_id'");
 header('Location: /taskBase/base.php');