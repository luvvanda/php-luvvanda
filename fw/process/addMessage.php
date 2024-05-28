<?php
session_start()
require_once 'connect.php'

$userid = $_SESSION['user']['id']
$text = $_POST["sms"]
$_SESSION['message_input'] = $text
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = array()
}


$_SESSION['messages'][] = $text

preg_match_all('/#\w+/', $text, $matches)
$hashtags = $matches[0]

$text_without_hashtags = preg_replace('/#\w+\s*/', '', $text)
    $_SESSION['message'] = 'Пост сохранен'
header('Location: ../addpost.php')
?>
