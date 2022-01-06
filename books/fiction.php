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
                <li data-sort="19.63" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/1.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Ход королевы</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 19,63</button>
                </li>
                <li data-sort="24.02" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/2.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Король воинов</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,02</button>
                </li>
                <li data-sort="24.55" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/3.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Змей и голубка
                    </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,55</button>
                </li>
                <li data-sort="23.33" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/4.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Гарри Поттер и Проклятое дитя.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 23,33</button>
                </li>
                <li data-sort="34.35" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/5.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Метро 2033</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 34,35</button>
                </li>
                <li data-sort="19.63" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/6.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Позже</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 19,63</button>
                </li>
                <li data-sort="10.40" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/7.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Великий Гэтсби (м)</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 10,40</button>
                </li>
                <li data-sort="18.96" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/8.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Великий Гэтсби (м)</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 18,96</button>
                </li>
                <li data-sort="14.83" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/9.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Куриный бульон для души</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 14,83</button>
                </li>
                <li data-sort="20.11" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Магазин снов Талергута</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 20,11</button>
                </li>
                <li data-sort="29.40" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/11.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Гарри Поттер и Принц-полукровка</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 29,40</button>
                </li>
                <li data-sort="20.08" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/12.jpeg" alt="">
                    <h3 class="bestseller__ul__li__txt">Тьма между нами</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 20,08</button>
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
    <script src="/search.js"></script>
    <script src="/buy.js"></script>
</body>

</html>