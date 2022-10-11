<?php
$login = htmlspecialchars(trim(($_POST['login'])),ENT_QUOTES);
$pass = htmlspecialchars(trim(($_POST['pass'])),ENT_QUOTES);

$pass = md5($pass."gdfgdfhgfd");

$mysql = new mysqli('localhost','root','','register_bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользовател  не найден";
        exit();
    }
    setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /');
?>