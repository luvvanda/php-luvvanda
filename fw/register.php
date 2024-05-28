
<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>fw</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav>
        <?php if (!isset($_SESSION['user'])) { ?>
                <a class="active" href="./register.php">Регистрация</a>
                <p>|</p>
                <a href="./index.php">Вход</a>
            <?php } ?>
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="./profile.php">Профиль</a>
            <?php } ?>
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="./addPost.php">Посты</a>
            <?php } ?>
        </nav>
    </header>
    <main>
        <form class="form" action="vendor/signup.php" method="post">
            <label>Имя</label>
            <p class="error-message"></p>
            <input class="input" type="text" name="full_name" placeholder="Введите имя" required>
            <label>Логин</label>
            <p class="error-message"></p>
            <input class="input" type="text" name="login" placeholder="Введите логин" required>
            <label>Почта</label>
            <p class="error-message"></p>
            <input class="input" type="email" name="email" placeholder="Введите адрес своей почты" required>
            <label>Пароль</label>
            <p class="error-message"></p>
            <input class="input" type="password" name="password" placeholder="Введите пароль" required>
            <p class="password">Пароль минимум 8 символов, должны быть числа, знаки !? и большие буквы латинского алфавита</p>
            <label>Подтердите пароль</label>
            <input class="input" type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
            <button class="glow-on-hover" type="submit">Зарегистрироваться</button>
            <p>
                Есть аккаунт? - <a href="./index.php">Авторизуйтесь</a>
            </p>
            <?php
            ?>
        </form>
    </main>
</body>

</html>
