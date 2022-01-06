<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books-onlineeee</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo__a" href="index.php">
                <h2 class="header__logo__a__name">Online books</h2>
            </a>
            <input class="header__search profile" placeholder="Введите название товара" type="search">
            <img class="header__search__img profile" src="/img/search.png" alt="">
            <a href="profile.php" class="header__login__link">
                <img class="header__login__link__img" src="/img/account_avatar_face_man_people_profile_user_icon_123197.svg" alt="">
            </a>
        </header>
        <section class="books__categories">
            <img class="books__categories__decoration1" src="/img/vec2.png" alt="">
            <img class="books__categories__decoration2" src="/img/vec3.png" alt="">
            <h1 class="books__categories__title">Книги</h1>
            <div class="books__categories__items">

                <div class="books__categories__items__item">
                    <a href="bestseller.php" class="books__categories__items__item__a">
                        <img class="books__categories__items__item__a__img" src="/img/10685389_0.jpg" alt="">
                        <h2 class="books__categories__items__item__a__txt">Бестселлеры</h2>
                    </a>
                </div>
                <div class="books__categories__items__item">
                    <a href="fiction.php" class="books__categories__items__item__a">
                        <img class="books__categories__items__item__a__img" src="/img/102490_0.jpg" alt="">
                        <h2 class="books__categories__items__item__a__txt">Художественная литература</h2>
                    </a>
                </div>
                <div class="books__categories__items__item">
                    <a href="unfiction.php" class="books__categories__items__item__a">
                        <img class="books__categories__items__item__a__img" src="/img/10569541_0.jpg" alt="">
                        <h2 class="books__categories__items__item__a__txt">Нехудожественная литература</h2>
                    </a>
                </div>
                <div class="books__categories__items__item">
                    <a href="business.php" class="books__categories__items__item__a">
                        <img class="books__categories__items__item__a__img" src="/img/10647018_0.jpg" alt="">
                        <h2 class="books__categories__items__item__a__txt">Бизнес-литература</h2>
                    </a>
                </div>
                <div class="books__categories__items__item">
                    <a href="psychology.php" class="books__categories__items__item__a">
                        <img class="books__categories__items__item__a__img" src="/img/10264200_0.jpg" alt="">
                        <h2 class="books__categories__items__item__a__txt">Психология</h2>
                    </a>
                </div>
            </div>
        </section>
        <section class="discount">
            <h2 class="discount__title">Купи сейчас со скидкой 20%!</h2>
            <h5 class="discount__txt">Собери корзину из 5 книг и получи скидку с бесплатной доставкой по Минску!</h5>
            <a href="bestseller.php"><button class="discount__btn">Выбрать товар</button></a>
        </section>
        <main class="main">
            <img class="main__decoration1" src="/img/vec4.png" alt="">
            <img class="main__decoration2" src="/img/vec5.png" alt="">
            <img class="main__decoration3" src="/img/vec6.png" alt="">
            <h2 class="main__title">Наши рекомендации</h2>
            <div class="main__items">
                <div class="main__items__item">
                    <a href="fiction.php" class="main__items__item__a">
                        <img class="main__items__item__a__img" src="/img/101060740_0.jpg" alt="">
                        <h3 class="main__items__item__a__txt">Мессия Дюны. Дети Дюны
                            Фрэнк Герберт, 2021</h3>
                    </a>

                </div>
                <div class="main__items__item">
                    <a href="business.php" class="main__items__item__a">
                        <img class="main__items__item__a__img" src="/img/10591915_0.jpg" alt="">
                        <h3 class="main__items__item__a__txt">Правила инвестирования Уоррена Баффетта
                            Джереми Миллер, 202
                        </h3>
                    </a>
                </div>
                <div class="main__items__item">
                    <a href="bestseller.php" class="main__items__item__a">
                        <img class="main__items__item__a__img" src="/img/10780934_0.jpg" alt="">
                        <h3 class="main__items__item__a__txt">НЕ НОЙ. Вековая мудрость.
                            Джен Синсеро, 2019</h3>
                    </a>
                </div>
            </div>
        </main>
        <section class="slider-section">
            <h2 class="main__title">Клиенты рекомендуют!</h2>
            <div class="slider">
                <div class="slider__item">
                    <a href="bestseller.php">
                        <img class="slider__img" src="/img/1041207_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Как понять свой стиль управления</h3>
                        <button class="bestseller__ul__li__btn__slider">30,94</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="bestseller.php">
                        <img class="slider__img" src="/img/10272345_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Психология влияния.</h3>
                        <button class="bestseller__ul__li__btn__slider">23,00</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="bestseller.php">
                        <img class="slider__img" src="/img/10658985_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Продавец обуви. История Nike.</h3>
                        <button class="bestseller__ul__li__btn__slider">17,61</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="psychology.php">
                        <img class="slider__img" src="/img/10678626_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Как влиять на подсознание.</h3>
                        <button class="bestseller__ul__li__btn__slider">21,70</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="bestseller.php">
                        <img class="slider__img" src="/img/10976262_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Жизнь в удовольствие.</h3>
                        <button class="bestseller__ul__li__btn__slider">45,55</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="business.php">
                        <img class="slider__img" src="/img/10780934_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">НЕ НОЙ.</h3>
                        <button class="bestseller__ul__li__btn__slider">24,90</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="psychology.php">
                        <img class="slider__img" src="/img/38.jpeg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Прочь из замкнутого круга!</h3>
                        <button class="bestseller__ul__li__btn__slider">19,69</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="bestseller.php">
                        <img class="slider__img" src="/img/10286488_0.jpg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Говори красиво и уверенно.</h3>
                        <button class="bestseller__ul__li__btn__slider">12,03</button>
                    </a>
                </div>
                <div class="slider__item">
                    <a href="psychology.php">
                        <img class="slider__img" src="/img/44.jpeg" alt="">
                        <h3 class="bestseller__ul__li__txt__slider">Свобода от тревоги.</h3>
                        <button class="bestseller__ul__li__btn__slider">21,52</button>
                    </a>
                </div>
            </div>
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
                    <a href="https://www.instagram.com/vlad.boyara/" target="_blank"><img class="footer__sprait__item" src="/img/Instagram.svg" alt=""></a>
                    <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="img/Facebook.svg" alt=""></a>
                    <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="/img/Twitter.svg" alt=""></a>
                    <a href="https://vk.com/vlad_boyarinov" target="_blank"><img class="footer__sprait__item" src="/img/Youtube.svg" alt=""></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="slider.js"></script>
    <script src="slick.min.js"></script>

</body>

</html>