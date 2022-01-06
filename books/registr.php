<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
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
        <input class="header__search" placeholder="Введите название товара" type="search">
        <img class="header__search__img" src="/img/search.png" alt="">
        <a href="login.php" class="header__login__link">
            <img class="header__login__link__img" src="/img/account_avatar_face_man_people_profile_user_icon_123197.svg" alt="">
        </a>
    </header>
    <form class="form" action="include/signup.php" method="POST" enctype="multipart/form-data">
        <label class="form__name" for="">ФИО</label>
        <input class="form__name__input" type="text" name="full_name" placeholder="Введите полное имя" required>
        <label class="form__login" for="">Логин</label>
        <input class="form__login__input" type="text" name="login" placeholder="Введите логин" required>
        <label class="form__email" for="">Email</label>
        <input class="form__email__input" type="email" name="email" placeholder="Введите email" required>
        <div class="input__wrapper">
            <input type="file" name="avatar" id="input__file" class="input input__file" multiple>
            <label for="input__file" class="input__file-button">
                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="/img/add-photo-2.png" alt="Выбрать файл" width="30"></span>
                <span class="input__file-button-text">Выберите файл</span>
            </label>
        </div>
        <label class="form__password" for="">Пароль</label>
        <input class="form__password__input" name="password" type="password" placeholder="Введите пароль" required>
        <label class="form__password" for="">Подтвердите пароль</label>
        <input class="form__password__input" name="password_confirm" type="password" placeholder="Подтвердите пароль" required>
        <button type="submit" class="form__button-enter">Регистрация</button>
        <p class="form__new-user"> Есть аккаунт - <a class="form__new-user__link" href="login.php">войти!</a></p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="form__message-error">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>

    </form>
    <footer class="footer">
        <div class="footer__left">
            <a class="footer__logo__a" href="">
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