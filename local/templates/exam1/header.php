<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><?= $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <?= $APPLICATION->ShowHead() ?>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
    ?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico"
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
</head>

<body>
<? $APPLICATION->ShowPanel() ?>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <ul>
                        <li class="att popup-wrap">
                            <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                            <form action="/" class="frm-login popup-block">
                                <div class="frm-title">Войти на сайт</div>
                                <a href="" class="btn-close">Закрыть</a>
                                <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                <div class="frm-row">
                                    <div class="frm-chk">
                                        <input type="checkbox" id="login">
                                        <label for="login">Запомнить меня</label>
                                    </div>
                                </div>
                                <div class="frm-row"><input type="submit" value="Войти"></div>
                            </form>
                        </li>
                        <li><a href="">Зарегистрироваться</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href="">Главная</a>
                        </li>
                        <li>
                            <a href="">Компания</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Новости</a>
                        </li>
                        <li>
                            <a href="">Каталог</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Фотогалерея</a>
                        </li>
                        <li><a href="">Партнерам</a>
                        </li>
                        <li><a href="">Контакты</a>
                        </li>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <!-- /nav -->

    <?php $indexPage = $APPLICATION->GetCurPage() !== '/';

    if ($indexPage) { ?>
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
        <!-- /breadcrumbs -->
    <?php } ?>


    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <?php if ($indexPage) { ?>
                    <header>
                        <h1>Заголовок страницы</h1>
                        <hr>
                    </header>
                    <?php }?>

                    <p>Если вы используете базовую редакцию продукта - «Компания», то можете перейти на редакцию «Совместная работа», и ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом.
                        Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции
                        и делать многое другое.</p>
                    <p>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов
                        и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</p>
                    <p>При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.</p>
                    <h2>Выставка новых образцов</h2>
                    <hr>
                    <div class="article-text-block">
                        <figure class="pic-block">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/pic01.jpg" alt="">
                        </figure>
                        <p>Ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование
                            времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.</p>
                        <h3>Заголовок</h3>
                        <p><i>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</i>
                        </p>
                        <p><span class="att-text">При переходе вся информация на портале сохранится.</span>
                            <br>Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.</p>
                    </div>
                </div>
            </div>
            <!-- /content -->
            <!-- side -->
            <div class="side">
                <!-- side menu -->
                <div class="side-block side-menu">
                    <div class="title-block">Навигация</div>
                    <div class="menu-block">
                        <ul>
                            <li><a href="">Кухни</a>
                            </li>
                            <li><a href="">Гарнитуры</a>
                            </li>
                            <li class="selected">
                                <a href="">Спальни</a>
                            </li>
                            <li>
                                <a href="">Шкафы</a>
                            </li>
                            <li><a href="">Столы</a>
                            </li>
                            <li><a href="">Стулья</a>
                            </li>
                            <li>
                                <a href="">Прихожие</a>
                            </li>
                            <li><a href="">Диваны</a>
                            </li>
                            <li><a href="">Кресла</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /side menu -->
                <!-- side anonse -->
                <div class="side-block side-anonse">
                    <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
                    <div class="item">
                        <p>Клиенты предпочитают все больше эко-материалов.</p>
                    </div>
                </div>
                <!-- /side anonse -->
                <!-- side wrap -->
                <div class="side-wrap">
                    <div class="item-wrap">
                        <!-- side action -->
                        <div class="side-block side-action">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                            <div class="photo-block">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                            </div>
                            <div class="text-block">
                                <div class="title">Акция!</div>
                                <p>Мебельная полка всего за 560 <span class="r">a</span>
                                </p>
                            </div>
                            <a href="" class="btn-more">подробнее</a>
                        </div>
                        <!-- /side action -->
                    </div>

                    <!-- footer rew slider box -->
                    <div class="item-wrap">
                        <div class="rew-footer-carousel">
                            <div class="item">
                                <div class="side-block side-opin">
                                    <div class="inner-block">
                                        <div class="title">
                                            <div class="photo-block">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
                                            </div>
                                            <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                            <div class="pos-block">Генеральный директор,"Офис+"</div>
                                        </div>
                                        <div class="text-block">“В магзине предоставили потрясающий выбор
                                            расцветок, а также, получил большую скидку по карте постоянного...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side-block side-opin">
                                    <div class="inner-block">
                                        <div class="title">
                                            <div class="photo-block">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
                                            </div>
                                            <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                            <div class="pos-block">Генеральный директор,"Офис+"</div>
                                        </div>
                                        <div class="text-block">“В магазине предоставили потрясающий выбор
                                            расцветок, а также, получил большую скидку по карте постоянного...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / footer rew slider box -->

                </div>
                <!-- /side wrap -->
            </div>
            <!-- /side -->
        </div>
        <!-- /content box -->
    </div>
    <!-- /page -->
    <div class="empty"></div>
</div>
<!-- /wrap -->