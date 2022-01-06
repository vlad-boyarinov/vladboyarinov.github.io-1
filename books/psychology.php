<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo__a" href="/index.php">
                <h2 class="header__logo__a__name">Online books</h2>
            </a>
            <input class="header__search" placeholder="Введите название товара" type="text" id="elastic">
            <img class="header__search__img" src="/img/search.png" alt="">
            <a href="" class="header__cart__link">
                <a href="profile.php" class="header__login__link">
                    <img class="header__login__link__img" src="/img/account_avatar_face_man_people_profile_user_icon_123197.svg" alt="">
                </a>
        </header>
        <section class="bestseller">
            <div class="sort">
                <button class="sort__button__asc" id="sort-asc">Цена возрастание</button>
                <button class="sort__button__desc" id="sort-desс">Цена убывание</button>
            </div>
            <div class="modal" id="modal">
                <form action="">
                    <h4 class="modal__title">Купить в 1 клик</h4>
                    <label class="modal__name" for="">ФИО</label>
                    <input class="modal__name__input" name="" type="text" placeholder="Введите полное имя">
                    <label class="modal__email" for="">Email</label>
                    <input class="modal__email__input" name="" type="text" placeholder="Введите email">
                    <label class="modal__commit" for="">Комментарий к заказу</label>
                    <textarea class="modal__commit_enter" placeholder="Введите пожелания к заказу" name="" id="" cols="30" rows="10"></textarea>
                    <button data-close-button class="modal__close-button">Заказать</button>
                </form>
            </div>
            <div id="overlay"></div>
            <ul id="nav" class="bestseller__ul">
                <li data-sort="24.90" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/37.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">НЕ НОЙ.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,90</button>
                </li>
                <li data-sort="19.69" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/38.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Прочь из замкнутого круга!</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 19,69</button>
                </li>
                <li data-sort="19.59" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/39.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как выработать уверенность в себе</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 19,59</button>
                </li>
                <li data-sort="21.90" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/40.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Пока-я-не-Я.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 21,90</button>
                </li>
                <li data-sort="24.69" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/41.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Люби себя. </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,69</button>
                </li>
                <li data-sort="24.53" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/42.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Ненасильственное общение. Язык Жизни</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,53</button>
                </li>
                <li data-sort="21.52" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/44.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Свобода от тревоги. </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 21,52</button>
                </li>
                <li data-sort="6.93" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/43.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как легко общаться с разными людьми.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 6,93</button>
                </li>
                <li data-sort="24.63" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/45.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Поколение "сэндвич".</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,63</button>
                </li>
                <li data-sort="20.68" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/46.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Вопрос смерти и жизни</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 20,68</button>
                </li>
                <li data-sort="23.08" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/48.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Квантовый воин. Сознание будущего</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 23,08</button>
                </li>
                <li data-sort="41.62" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/49.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Красная таблетка</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 41,62</button>
                </li>
            </ul>
        </section>
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
                    <a href=""><img class="footer__sprait__item" src="/img/Instagram.svg" alt=""></a>
                    <a href=""><img class="footer__sprait__item" src="img/Facebook.svg" alt=""></a>
                    <a href=""><img class="footer__sprait__item" src="/img/Twitter.svg" alt=""></a>
                    <a href=""><img class="footer__sprait__item" src="/img/Youtube.svg" alt=""></a>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="/head.js"></script>
    <script src="search.js"></script>
    <script src="/buy.js"></script>
</body>

</html>