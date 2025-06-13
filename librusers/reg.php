<?php
$login = trim(filter_var($_POST['login'],FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'],FILTER_SANITIZE_SPECIAL_CHARS));

if(mb_strlen($login) <2) {
    echo "Ошибка логина ";
    exit;
}
if(mb_strlen($username) <2) {
    echo "Ошибка имени ";
    exit;
}
if(strlen($password) <2) {
    echo "Ошибка пароля ";
    exit;
}
if(strlen($email) <4 && !str_contains($email, '@')) {
    echo "Email указан не верно";
    exit;
}
else echo "Спасибо за регистрацию";
$pdo = new PDO('mysql:host=localhost; dbname=website; port=3306','root', '' );
$sql= "INSERT INTO `users`(`id`, `login`, `username`, `password`, `email`) VALUES(NULL, '$login', '$username', '$password' , '$email')";
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $password,$email]);
