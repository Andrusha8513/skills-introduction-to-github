<?php
$name_header = " Хуй Слона";
require "header.php";
?>
<h1>Про Хуй</h1>
<form action="check_post.php" method="post">
    <input type = "text" name="username" placeholder="Введите Логин" class="form-control" > <br>
    <div class="text - danger" > <?=$_SESSION['user_name']?> </div><br>
    <input type = "password" name="password" placeholder="Введите Пороль" class="form-control" > <br>
    <div class="text - danger" > <?=$_SESSION['email']?> </div><br>
    <input type = "email" name="email" placeholder="введите email"class="form-control" > <br>
    <div class="text - danger" > <?=$_SESSION['password']?> </div><br>
    <input type = "text" name="name" placeholder="Введите Имя" class="form-control"><br>
    <div class="text - danger" > <?=$_SESSION['name']?> </div><br>
    <input type = "text" name="surname" placeholder="Введите Фамилию" class="form-control"><br>
    <div class="text - danger" > <?=$_SESSION['surname']?> </div><br>
    <input type ="text" name = "faculty_group" placeholder="Введите номер группы"class="form-control" > <br>
    <div class="text - danger" > <?=$_SESSION['facultu_group']?> </div><br>
    <input type= "submit" value="Отправить" class="btn btn-success" > <br>
    
</form>
<?php 
require "gooter.php";
?>