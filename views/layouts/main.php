
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <style>
        *{
            text-decoration: none;
            color: black;
        }
        nav{
            background-color: beige ;
            display: flex;
            align-items: center;

        }
        .link {
            display: flex;
            margin-top: 15px;

        }
        .link>a{
            padding-right: 15px;
        }
        .line{
            margin-top: 15px;
            height: 1px;
            width: 1890px;
            background-color: black;
        }

    </style>
</head>
<body>
<header>
    <nav>
    <div class="header">
        <div class="link">
            <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <a href="<?= app()->route->getUrl('/books') ?>">Выбор книги</a>
            <a href="<?= app()->route->getUrl('/add') ?>">Добавить читателя</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
        </div>
        <div class="buttons">
            <a href="<?= app()->route->getUrl('/login') ?>" class="login">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>" class="registration">Регистрация</a>
        </div>
    </div>

    </nav>
    <div class="line"></div>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
