<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>login</title>
</head>
<div class="wrapper">
    <header class="header">
        <a class="header__logo__a" href="index.php">
            <h2 class="header__logo__a__name">Online books</h2>
        </a>
        <input class="header__search profile" placeholder="Введите название товара" type="text">
        <img class="header__search__img profile" src="/img/search.png" alt="">
        <a href="profile.php" class="header__login__link">
            <img class="header__login__link__img" src="/img/account_avatar_face_man_people_profile_user_icon_123197.svg" alt="">
        </a>
    </header>
    <form class="form-profile">
        <h4 class="form-profile__title">Личный кабинет</h4>
        <img class="form-profile__img" src="<?= $_SESSION['user']['avatar'] ?>" alt="">
        <h2 class="form-profile__name"><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="form-profile__email" href="#"><?= $_SESSION['user']['email'] ?></a>
        <a class="form-profile__button" href="include/logout.php">Выход</a>
    </form>

    <footer class="footer">
        <div class="footer__left">
            <a class="footer__logo__a" href="index.php">
                <h2 class="footer__logo__a__name">Online books</h2>
            </a>
            <h3 class="footer__address">Республика Беларусь, город Минск, Проспект Независимости 55</h3>
        </div>
        <div class="footer__books">
            <ul>
                <li>
                    <h5 class="footer__books__title" href="">Книги</h5>
                </li>
                <li><a class="footer__books__item" href="fiction.php">Художественная литература</a></li>
                <li><a class="footer__books__item" href="unfiction.php">Нехудожественная литература</a></li>
                <li><a class="footer__books__item" href="business.php">Бизнес-литература</a></li>
                <li><a class="footer__books__item" href="psychology.php">Психология</a></li>

            </ul>
        </div>
        <div class="footer__help">
            <ul>
                <li>
                    <h5 class="footer__help__title" href="">Помощь</h5>
                </li>
                <li><a class="footer__help__item" href="">Оплата</a></li>
                <li><a class="footer__help__item" href="">Доставка</a></li>
                <li><a class="footer__help__item" href="">Оплата</a></li>
                <li><a class="footer__help__item" href="">Контакты</a></li>
            </ul>
        </div>
        <div class="footer__copyright">
            <h4 class="footer__copyright__developer">Разработал Бояринов Владислав</h4>
            <h4 class="footer__copyright__copy">Все Права Защищены 2021&copy </h4>
            <div class="footer__sprait">
                <a href="https://www.instagram.com/vlad.boyara/" target="_blank"><img class="footer__sprait__item" src="/img/Instagram.svg" alt=""></a>
                <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="img/Facebook.svg" alt=""></a>
                <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="/img/Twitter.svg" alt=""></a>
                <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="/img/Youtube.svg" alt=""></a>
            </div>
        </div>
    </footer>
</div>

<body>

</body>

</html>