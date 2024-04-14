<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

if(!empty($_POST)) {
    $fields = load($fields);
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание по ПП1</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/scss/main.scss">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header>
        <div class="header-logo-menu">
            <div class="logo">
                <img src="images/Header/headerLogo.png" alt="Лого">
                <p class="title-logo">TRANS LIGHT</p>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Сервис</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="header-screen-content">
            <div class="ctx">
                <p class="ctx-title">Светотехническое оборудование
                    в Петербурге</p>
                <p class="ctx-text">Продажа, аренда светотехнического оборудования.
                    Оформление официальных мероприятий под ключ.</p>
                <a href="#category-items-arr" class="ctx-btn">Перейти</a>
            </div>
        </div>
    </header>
    <section class="buy-equipment" id="buy-equipment">
        <div class="buy-equipment-wrap">
            <div class="buy-equipment-wrap-btnClose">
                <img src="images/Cross.png" alt="Крестик">
            </div>
            <div class="buy-equipment-wrap-title">
                <h3>Заказ оборудования</h3>
            </div>
            <div class="buy-equipment-wrap-decor">
                <img src="images/Category-Item/catelog-item-1.png" alt="Картинка заказа">
                <form method="POST" class="buy-equipment-wrap-decor-form">
                    <input type="text" placeholder="Фамилия" name="FirstName" required>
                    <input type="text" placeholder="Имя" name="SecondName" required>
                    <input type="text" placeholder="Отчество" name="ThirdName" required>
                    <input type="tel" placeholder="Номер телефона" name="Telephones" required>
                    <input type="email" placeholder="Email" name="Email" required>
                    <div class="buy-equipment-wrap-decor-form-dataProcecing">
                        <input type="checkbox"><span>Я согласен на <a href="#">обработку персональных данных</a></span>
                    </div>
                    <button type="submit" disabled>Готово</button>
                </form>
            </div>
        </div>
    </section>
    <section class="main-block">
        <section class="main-block-wrap">
            <section class="slider">
                <div class="slider-top">
                    <div class="slider-top-title">
                        <img src="images/decor-heading.png" alt="Красота">
                        <h2>НАШИ ПРОЕКТЫ</h2>
                    </div>
                    <div class="slider-top-btn">
                        <img src="images/slider-btn-prev.png" alt="Назад" class="slider-btn-prev">
                        <img src="images/slider-btn-next.png" alt="Вперёд" class="slider-btn-next">
                    </div>
                </div>
                <div class="slider-wrap">
                    <img src="images/Slider/slide-ctx-1.png" alt="Картинка №1" class="slider-wrap-ctx">
                    <img src="images/Slider/slide-ctx-2.png" alt="Картинка №2" class="slider-wrap-ctx">
                </div>
            </section>
            <section id="category-items-arr" class="category-items">
                <div class="category-items-top">
                    <div class="category-items-top-title">
                        <img src="images/decor-heading.png" alt="Красота">
                        <h2>КАТАЛОГ ПРОДУКЦИИ</h2>
                    </div>
                    <div class="category-items-top-btn">
                        <h3 class="category-items-top-btn-num category-items-top-btn-active"><span>ROBE</span></h3>
                        <h3 class="category-items-top-btn-num"><span>COMPULITE</span></h3>
                    </div>
                </div>
                <div class="category-items-arr">
                    <img src="images/Category-Item/catelog-item-1.png" alt="Статичные светодиодные приборы"
                        class="category-items-arr-ctx">
                    <img src="images/Category-Item/catelog-item-2.png" alt="Контроллеры" class="category-items-arr-ctx">
                    <img src="images/Category-Item/catelog-item-3.png" alt="Акссесуары" class="category-items-arr-ctx">
                </div>
            </section>
            <section class="equipment-rent">
                <div class="category-items-top">
                    <div class="equipment-rent-top-title">
                        <img src="images/decor-heading.png" alt="Красота">
                        <h2>АРЕНДА ОБОРУДОВАНИЯ</h2>
                    </div>
                </div>
                <div class="equipment-rent-ctx">
                    <p class="equipment-rent-ctx-explanation">
                        Мы занимаемся прокатом светового и сценического оборудования ведущих мировых
                        производителей, таких как Robe, SGM,
                        StudioDue, ChainMaster, Milos, Universal Effects, ArtLighting, MobilTech, Lampo, Martin,
                        Spotlight, Compulite, Eurolite
                        и др.
                    </p>
                    <div class="equipment-rent-ctx-slider">
                        <div class="equipment-rent-ctx-slider-wrap">
                            <div class="equipment-rent-ctx-slider-wrap-top">
                                <h4>НОВОЕ ОБОРУДОВАНИЕ, ПРЕДОСТАВЛЯЕМОЕ В АРЕНДУ:</h4>
                                <div class="equipment-rent-ctx-slider-top-wrap-btn">
                                    <img src="images/slider-btn-prev.png" alt="Назад">
                                    <img src="images/slider-btn-next.png" alt="Вперёд">
                                </div>
                            </div>
                            <div class="equipment-rent-ctx-slider-wrap-arr">
                                <div class="equipment-rent-ctx-slider-wrap-arr-1">
                                    <img src="images/Equipment-rent/slider-ctx-1.png" alt="Аксессуар">
                                    <div class="equipment-rent-ctx-slider-wrap-arr-1-info">
                                        <h4>ROBE ROBIN PARFECT 100</h4>
                                        <ul>
                                            <li>Источник света 12 светодиодов RGBW по 15 Вт каждый</li>
                                            <li>Угол раскрытия 7°</li>
                                            <li>В комплекте рассеивающая линза 40°</li>
                                            <li>Потребляемая мощность 200 Вт</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news">
                <div class="news-top">
                    <div class="news-top-title">
                        <img src="images/decor-heading.png" alt="Красота">
                        <h2>НОВОСТИ</h2>
                    </div>
                    <button class="news-top-allNews">ВСЕ НОВОСТИ</button>
                </div>
                <div class="news-ctx">
                    <div class="news-ctx-main">
                        <img src="images/News-Ctx/Main-News.png" alt="Главная картинка">
                        <div class="news-ctx-main-info">
                            <div class="news-ctx-main-info-top">
                                <h4>СЕМИНАР MILOS</h4>
                                <p>27.01.2019</p>
                            </div>
                            <p class="news-ctx-main-info-text">
                                Наши сотрудники прошли последний семинар от компании Milos.
                                Они получили новый объем знаний, который позволит нашей компании заниматься
                                оборудованием не только мероприятий, но
                                производственных помещений.
                            </p>
                            <a href="#">Читать полностью</a>
                        </div>
                    </div>
                    <div class="news-ctx-secondary-1">
                        <h4 class="news-ctx-secondary-1-title">ВЫСТАВКА PROLIGHT+SOUND NAMM RUSSIA 2016</h4>
                        <p class="news-ctx-secondary-1-info">30 контрактов, тысячи восторженных посетителей...</p>
                        <div class="news-ctx-secondary-1-imgData">
                            <img src="images/News-Ctx/Secondary(1).png" alt="Второстепенная картинка-1">
                            <p>27.01.2019</p>
                        </div>
                    </div>
                    <div class="news-ctx-secondary-2">
                        <h4 class="news-ctx-secondary-2-title">СЕМИНАР ROBE</h4>
                        <p class="news-ctx-secondary-2-info">30 января 2017 года наши сотрудники побывали в Берлине..
                        </p>
                        <div class="news-ctx-secondary-2-imgData">
                            <img src="images/News-Ctx/Secondary(2).png" alt="Второстепенная картинка-1">
                            <p>27.01.2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <footer>
        <div class="footer-wrap">
            <div class="footer-wrap-contacts-info">
                <h4>(812) 710-80-25</h4>
                <p>191180, Санкт-Петербург, Набережная реки Фонтанки, 90, корпус 1</p>
                <a target="_top"
                    href="mailto:elfinurhalikova2@gmail.com?subject=Вопрос&body=Привет">elfinurhalikova2@gmail.com</a>
            </div>
            <hr>
            <div class="footer-wrap-list">
                <ul>
                    <li>О компании</li>
                    <li>Новости</li>
                </ul>
                <ul>
                    <li>Каталог</li>
                    <li>Аренда</li>
                </ul>
                <ul>
                    <li>Наши проекты</li>
                    <li>Сервисное обслуживание</li>
                </ul>
            </div>
            <hr>
            <div class="footer-wrap-company-info">
                <p>© 2019 ЗАО «Транслайт». Все права защищены.</p>
                <p>Разработка и дизайн - D-e-n.ru</p>
            </div>
        </div>
    </footer>

    <script defer src="js/main.js"></script>
</body>

</html>