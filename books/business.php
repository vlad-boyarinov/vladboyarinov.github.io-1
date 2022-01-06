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
    <title>business</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo__a" href="/index.php">
                <h2 class="header__logo__a__name">Online books</h2>
            </a>
            <input class="header__search" placeholder="Введите название товара" type="text" id="elastic">
            <img class="header__search__img" src="/img/search.png" alt="">
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
                <li data-sort="11.99" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/25.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Как продать что угодно кому угодно</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">11,99</button>
                </li>
                <li data-sort="25.11" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/26.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">12 правил жизни. Противоядие от хаоса</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">25,11</button>
                </li>
                <li data-sort="28.73" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/27.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Маркетинг от А до Я. </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">28,73</button>
                </li>
                <li data-sort="19.59" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/28.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Квадрант денежного потока</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">19,59</button>
                </li>
                <li data-sort="21.70" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/29.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">
                        Законы победителей</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">21,70</button>
                </li>
                <li data-sort="24.59" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/30.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Накопительный эффект.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">24,59</button>
                </li>
                <li data-sort="19.52" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/31.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Пора зарабатывать больше!</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">19,52</button>
                </li>
                <li data-sort="29.45" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/32.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Трансформатор 3. В чем сила, бро?</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">29,45</button>
                </li>
                <li data-sort="10.59" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/33.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">33 стратегии войны (м)</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">10,59</button>
                </li>
                <li data-sort="19.66" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/34.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Метод Илона Маска. </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">19,66</button>
                </li>
                <li data-sort="18.31" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/35.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Которому захотелось согреться</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">18,31</button>
                </li>
                <li data-sort="14.02" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/36.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как стать богатым (м)</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">14,02</button>
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
                    <li><a class="footer__books__item" href="fiction.html">Художественная литература</a></li>
                    <li><a class="footer__books__item" href="unfiction.html">Нехудожественная литература</a></li>
                    <li><a class="footer__books__item" href="business.html">Бизнес-литература</a></li>
                    <li><a class="footer__books__item" href="psychology.html">Психология</a></li>
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
    <script src="/search.js"></script>
    <script src="/buy.js"></script>
</body>

</html>