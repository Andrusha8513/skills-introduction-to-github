<?php
$name = "Про нас";
require "header.php";
?>
<h1>Про нас</h1>
<form action="check_post.php" method="post">
    <input type = "text" name="username" placeholder="Введите Логин" class="form-control" > <br>
    <input type = "password" name="password" placeholder="Введите Пороль" class="form-control" > <br>
    <input type = "email" name="email" placeholder="введите email"class="form-control" > <br>
    <input type = "text" name="name1" placeholder="Введите Имя" class="form-control"><br>
    <input type = "text" name="surname" placeholder="Введите Фамилию" class="form-control"><br>
    <input type ="text" name = "faculty_group" placeholder="Введите номер группы"class="form-control" > <br>
    <input type= "submit" value="Отправить" class="btn btn-success" > <br>
</form>
<?php 
require "gooter.php";
?>