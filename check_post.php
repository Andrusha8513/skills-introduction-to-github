<?php
$pass = $_POST['password'];

if(trim($_Post['username']) == "" || trim($_Post['name']) || trim($_POST['name1']) || trim($_POST['password']) || trim($_POST['faculty_group']) || trim($_POST['email']) || ($_POST['surname']))
echo "Введите все поля";
else
{
    $_POST['password'] = md5($pass);
    echo  'Все данные' ;
    foreach($_POST as $key => $value)
    echo  $value ;
}
