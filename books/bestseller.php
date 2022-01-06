<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo__a" href="/index.php">
                <h2 class="header__logo__a__name">Online books</h2>
            </a>
            <input class="header__search" placeholder="Введите название товара" type="text" id="elastic">
            <img class="header__search__img" src="/img/search.png" alt="">
            <a href="/profile.php" class="header__login__link">
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
                <li data-sort="17.61" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10658985_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Продавец обуви. История компании Nike.Автор</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal" data-product="Продавец обуви. История компании Nike." data-price="17.61">Купить 17,61</button>
                </li>
                <li data-sort="45.55" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10976262_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Жизнь в удовольствие.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 45,55</button>
                </li>
                <li data-sort="35.21" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10503641_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Магия утра.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 35,21</button>
                </li>
                <li data-sort="21.70" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10678626_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Нейромаркетинг. Как влиять на подсознание.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 21,70</button>
                </li>
                <li data-sort="12.03" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10286488_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Говори красиво и уверенно. Постановка речи.
                    </h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 12,03</button>
                </li>
                <li data-sort="23.00" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10272345_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Психология влияния.Научиться убеждать</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 23,00</button>
                </li>
                <li data-sort="23.14" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10778093_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Сильнейшие. Бизнес по правилам Netflix</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 23,14</button>
                </li>
                <li data-sort="30.94" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/1041207_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как понять свой стиль управления</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 30,94</button>
                </li>
                <li data-sort="11.98" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10391274_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как я нажил 500 000 000.</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 11,98</button>
                </li>
                <li data-sort="95.91" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10741233_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Принципы. Жизнь и работа</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 95,91</button>
                </li>
                <li data-sort="34.40" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10431558_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Как работает Google</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 34,40</button>
                </li>
                <li data-sort="29.94" class="bestseller__ul__li">
                    <img class="bestseller__ul__li__img" src="/img/10582251_0.jpg" alt="">
                    <h3 class="bestseller__ul__li__txt">Время - деньги</h3>
                    <button class="bestseller__ul__li__btn" data-modal-target="#modal">Купить 24,94</button>
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
                    <li><a class="footer__books__item" href="">Художественная литература</a></li>
                    <li><a class="footer__books__item" href="">Нехудожественная литература</a></li>
                    <li><a class="footer__books__item" href="">Бизнес-литература</a></li>
                    <li><a class="footer__books__item" href="">Психология</a></li>
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
    <script src="/search.js"></script>
    <script src="/head.js"></script>
    <script src="buy.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>