
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
                <a class="active" href="./profile.php">Профиль</a>
            <?php } ?>
            <a href="./addPost.php">Посты</a>
        </nav>
    </header>

    <main>
        <form>
            <h1>Joe Doe</h1>
            <p id="random-paragraph"></p>

<script>
const paragraphs = [
  "HHJ ⇦" ,
  "CB97 ⇦",
  "SPEARB ⇦",
  "IN ⇦",
  "LIX ⇦",
  "SKZ ⇦"
];

const randomIndex = Math.floor(Math.random() * paragraphs.length);
document.getElementById("random-paragraph").innerText = paragraphs[randomIndex];
</script>
            <a href="./vendor/logout.php" class="btn">Выход</a>
        </form>
    </main>
    

</body>


</html>
