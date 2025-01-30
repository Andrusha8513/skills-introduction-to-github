<?php
//Получение базз данных
require_once __DIR__ ."/help.php";
 
$login = $_POST['login']; // получаем данные из строки
$password = $_POST['password']; // получаем данные из строки

//echo $login .  '-' . $password;

print_r( getDB());
//Записываев данные