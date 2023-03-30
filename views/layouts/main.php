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
    </style>
</head>
<body>
<header>
    <nav>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <div class="header">
                <div class="buttons">
                    <a href="<?= app()->route->getUrl('/login') ?>" class="login">Вход</a>
                    <a href="<?= app()->route->getUrl('/signup') ?>" class="registration">Регистрация</a>
                </div>
            </div>
            <a href="<?= app()->route->getUrl('/books') ?>">Выбор книги</a>
            <a href="<?= app()->route->getUrl('/add') ?>">Добавить читателя</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
