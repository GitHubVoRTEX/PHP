<?php
//$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
//$name = filter_var(trim(($_POST['name'])),FILTER_SANITIZE_STRING);
//$pass = filter_var(trim(($_POST['pass'])),FILTER_SANITIZE_STRING);
$email = htmlspecialchars(trim(($_POST['email'])),ENT_QUOTES);
$login = htmlspecialchars(trim(($_POST['login'])),ENT_QUOTES);
$name = htmlspecialchars(trim(($_POST['name'])),ENT_QUOTES);
$pass = htmlspecialchars(trim(($_POST['pass'])),ENT_QUOTES);
    if(strlen($login) < 5 || strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if (strlen($name) < 3 || strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    } else if (strlen($pass) < 2 || strlen($pass) > 6) {
        echo "Недопустимая длина пароля (от 2 до 6 символов)";
        exit();
    } else if ((str_contains($email, "@")) & strlen($email) > 100) {
        echo "Некорректный Email";
        exit();
    }

    $pass = md5($pass."gdfgdfhgfd");

    $mysql = new mysqli('localhost','root','','register_bd');
    $mysql->query("INSERT INTO `users` (`email`, `login`, `pass`, `name`)
    VALUES ('$email','$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /');
?>
