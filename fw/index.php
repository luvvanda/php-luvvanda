
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
                <a href="./register.php">Регистрация</a>
                <p>|</p>
                <a class="active" href="./index.php">Вход</a>
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
        <section>
            <form action="vendor/signin.php" method="post">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите логин" required>
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль" required>
                <button class = "glow-on-hover" type="submit">Войти</button>
                <p>
                    
                    Нет аккаунта? - <a href="./register.php">Регистрация</a>
                </p>
                <?php
                    if (isset($_SESSION['message'])) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        unset($_SESSION['message']);
                    }
                ?>
            </form>
        </section>
    </main>
</body>
</html>
