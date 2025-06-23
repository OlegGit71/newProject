<?php
  require_once 'config/connect.php';
 // $tasks = mysqli_query($connect, "SELECT * FROM `tasks`");
  //$tasks = mysqli_fetch_all($tasks);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="feedback">
        <div class="container">
            <h1>Регистрация</h1>
            <p>Введите данные для регистрации.</p>

            <form method="post" action="/librusers/reg.php">
                <div class="inline">
                    <div>
                        <label>Логин</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Имя</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label>Пароль</label>
                <input type="password" class="one-line" name="password"><br>

                <label>Email</label>
                <input type="email" class="one-line" name="email"><br>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div> 
   </body>

</html>