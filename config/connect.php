<?php
  $connect = mysqli_connect('localhost', 'root', '', 'taskBase');
  if(!$connect) {
    die('Ошибка подключения к БД') ;
  }