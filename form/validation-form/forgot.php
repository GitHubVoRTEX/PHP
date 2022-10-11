<?php
    $data = $_POST;

    if(isset($data['forgot'])){
        $user = R::findOne();
    }
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <!-- CSS only -->
    <link rel="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel ="stylesheet" href="css/style.css">
</head>
<body>
    <div align= "center">
        <form action="validation-form/forgot.php" method="post" class="sign_form">
            <h1>Забыли пароль?</h1>
            <input type="email" name="email" placeholder="Email"><br>
            <button type="submit" name="forgot">Отправить письмо</button>
        </form>

    </div>

</body>
</html>
