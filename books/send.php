<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

if (mail(
    "boyarinov.2002@bk.ru",
    "Новое письмо с сайта",
    "Имя: " . $name . "\n" .
        "Email: " . $email . "\n" .
        "Сообщение: " . $message . "\n",
    "From: vlad.boyarinov.2002@icloud.com \r\n"
)) {
    echo ("ok");
} else {
    echo ("ne ok");
}
