<?php
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["password"]);
unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["surname"]);
unset($_SESSION["facultu_group"]);
function redirect()
{
    header('Location: post.php');
    exit();
}

$user_name = htmlspecialchars(trim($_POST['username']));
$pass = htmlspecialchars(trim($_POST['password']));
$email = htmlspecialchars(trim($_POST['email']));
$name = htmlspecialchars(trim($_POST['name']));
$surname = htmlspecialchars(trim($_POST['surname']));
$faculty_group = htmlspecialchars(trim($_POST['faculty_group']));

$_SESSION['user_name'] = $user_name;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;
$_SESSION['faculty_group'] = $faculty_group;

if(($user_name) == "" || strlen($user_name) >= 2)
{
$_SESSION['error_username}'] = 'Введите корректное Логин';
redirect();
}
else if($password == '')
{
    $_SESSION['error_pass}'] = 'Введите корректный пороль';
    redirect()
}
else if($email == '' || strpos($email,'@') == false )
{
    $_SESSION['error_email}'] = 'Введите корректный email';
    redirect()
}
else if($name == '' || strlen($name) >= 2)
{
    $_SESSION['error_name}'] = 'Введите корректное имя';
    redirect()
}
else if($user_name == '' || strlen($user_name) >= 2)
{
    $_SESSION['error_username}'] = 'Введите корректно фамилию';
    redirect()
}
else if($faculty_group == '' || strpos($faculty_group , '-'))
{
    $_SESSION['error_faculty_group'] = 'Введите корректно грппу';
    redirect()
}
/
    


?>

{
    $_POST['password'] = md5($password);
    echo  'Все данные' ;
    foreach($_POST as $key => $value)
    echo  $value ; 
}