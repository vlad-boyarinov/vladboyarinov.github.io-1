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
                <button class="sort__button__desc" id="sort-desc">Цена убывание</button>
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
                <li data-sort="15.22" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/13.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Не навреди</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 15,22</button>
                </li>
                <li data-sort="9.81" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/14.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Хюгге-раскраска.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 9,81</button>
                </li>
                <li data-sort="16.54" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/15.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Неестественные причины</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 16,54</button>
                </li>
                <li data-sort=26.71" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/16.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Чистый код.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 26,71</button>
                </li>
                <li data-sort="26.90" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/17.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Sapiens.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 26,90</button>
                </li>
                <li data-sort="44.80" class="bestseller__ul__li">
                    <a href="exam.php">
                        <img class="bestseller__ul__li__img" src="/img/bntu.png" alt="">
                        <h3 class="bestseller__ul__li__txt">Организация и функционирование ЭВМ</h3>
                    </a>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 44,80</button>
                </li>
                <li data-sort="19.77" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/19.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Осколки детских травм. </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 19,77</button>
                </li>
                <li data-sort="26.06" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/20.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Краткая история времени</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 26,06</button>
                </li>
                <li data-sort="29.90" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/21.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        21 урок для XXI века</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 29,90</button>
                </li>
                <li data-sort="40.81" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/22.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Программируем на Python</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 40,81</button>
                </li>
                <li data-sort="71.59" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/23.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Совершенный код. Мастер-класс</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 71,59</button>
                </li>
                <li data-sort="14.22" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/24.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        7 шагов к стабильной самооценке (м)</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 14,22</button>
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
    <script src="/head.js"></script>
    <script src="search.js"></script>
    <script src="/buy.js"></script>
</body>

</html>