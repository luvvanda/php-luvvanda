<?php

session_start();
require_once 'connect.php'

$full_name = $_POST['full_name']
$login = $_POST['login']
$email = $_POST['email']
$password = $_POST['password']
$password_confirm = $_POST['password_confirm']

$resultLogin = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'")
$resultEmail = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'")
{
    $password = md5($password)
    $_SESSION['message'] = 'Вы зарегистрировались.'
    header('Location: ../profile.php')
} 