<?php
$pdo = new PDO("mysql:host=$host", $username, $password);
$dbs = $pdo->query('SHOW DATABASES')->fetchAll();
var_dump($dbs);