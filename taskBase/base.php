<?php
  require_once '../config/connect.php';
  $tasks = mysqli_query($connect, "SELECT * FROM `tasks`");
   $tasks = mysqli_fetch_all($tasks);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../taskBase/css/style.css">
     <title>Товары</title>
 </head>
<body>

  <table>
   <tr>
     <th>id</th>
     <th>Название</th>
     <th>Описание</th>
     <th>Цена</th>
     <th>&#9830;</th>
     <th>&#9998;</th>
     <th>&#10006;</th>
   </tr>
     <?php
     
      foreach($tasks as $item) {
        ?>  
      
          <tr>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><a href="../taskBase/viewing.php?task_id=<?= $item[0] ?>">Просмотреть</a></td>
            <td><a href="../taskBase/update.php?task_id=<?= $item[0] ?>">Обновить</a></td>
            <td><a href="../vendor/delete.php?task_id=<?= $item[0] ?>">Удалить</a></td>
          </tr> 
         <?php
      }  
      ?>               
    </table>
  <br>
 <form action="../taskBase/create.php" method="post">
    <button type="submit" >Добавить новый товар</button>
 </form>

</body>
</html>