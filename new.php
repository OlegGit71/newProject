<?php
$pdo = new PDO("mysql:host=$host", $user, $pass);
$dbs = $pdo->query('SHOW DATABASES')->fetchAll();
var_dump($dbs);