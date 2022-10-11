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
    <div class = "container mt-4">
        <?php
            if ($_COOKIE['user'] == ''):
        ?>

        <div class = "row">
            <div class="col">
                <h1>Регистрация</h1>
                <form action= "validation-form/check.php" method="post">
                    <input type= "text" class= "form-control" name = "email"
                           id = "email" placeholder="Введите Email"><br>
                    <input type= "text" class= "form-control" name = "login"
                           id = "login" placeholder="Введите логин"><br>
                    <input type= "text" class= "form-control" name = "name"
                           id = "name" placeholder="Введите имя"><br>
                    <input type= "password" class= "form-control" name = "pass"
                           id = "pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col">
                <h1>Авторизация</h1>
                <form action= "validation-form/auth.php" method="post">
                    <input type= "text" class= "form-control" name = "login"
                           id = "login" placeholder="Введите логин"><br>
                    <input type= "password" class= "form-control" name = "pass"
                           id = "pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Авторизоваться</button>
                    <p><a href="validation-form/forgot.php">Забыли пароль?</a></p>
                </form>
            </div>
        </div>
    <?php else:?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти, нажмите <a href="validation-form/exit.php">здесь</a>.</p>
    <?php endif;?>

    </div>

</body>
</html>