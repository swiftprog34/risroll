<!DOCTYPE html>
<html lang="ru">
<head>

    <base href="">

    <!--Main-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Рис &#8212; Доставка вкусной еды</title>
    <meta name="description"
          content="Risroll - Заказать доставку суши сетов и роллов в городе Тюмень по доступным ценам!">
    <meta name="keywords" content=" ">
    <link rel="canonical" href="index.html">

    <link rel="apple-touch-icon" sizes="57x57" href="/client/images/favicon/apple-icon-57x57.png@v=2">
    <link rel="apple-touch-icon" sizes="60x60" href="/client/images/favicon/apple-icon-60x60.png@v=2">
    <link rel="apple-touch-icon" sizes="72x72" href="/client/images/favicon/apple-icon-72x72.png@v=2">
    <link rel="apple-touch-icon" sizes="76x76" href="/client/images/favicon/apple-icon-76x76.png@v=2">
    <link rel="apple-touch-icon" sizes="114x114" href="/client/images/favicon/apple-icon-114x114.png@v=2">
    <link rel="apple-touch-icon" sizes="120x120" href="/client/images/favicon/apple-icon-120x120.png@v=2">
    <link rel="apple-touch-icon" sizes="144x144" href="/client/images/favicon/apple-icon-144x144.png@v=2">
    <link rel="apple-touch-icon" sizes="152x152" href="/client/images/favicon/apple-icon-152x152.png@v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="/client/images/favicon/apple-icon-180x180.png@v=2">
    <link rel="icon" type="image/png" sizes="192x192" href="/client/images/favicon/android-icon-192x192.png@v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="/client/images/favicon/favicon-32x32.png@v=2">
    <link rel="icon" type="image/png" sizes="96x96" href="/client/images/favicon/favicon-96x96.png@v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="/client/images/favicon/favicon-16x16.png@v=2">
    <link rel="manifest" href="/client/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=2">

    <link rel="icon" href="/client/images/favicon/favicon.ico@v=2" type="image/x-icon">

    <!--Theme-->
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#fff">
    <meta name="msapplication-navbutton-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <!---->    <!---->

    <!--Verify-->
    {{--	<meta name="yandex-verification" content="0a6bc92f73ab889f" />--}}
    {{--	<meta name="google-site-verification" content="GM1BpueKXOnRJEITbrJU8LEvVhfZ-qNf1SFxNkALBJs" />--}}
    <!---->

    <!--Open Graph-->
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="https://"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:url" content="https://"/>
    <!---->

    <!--CSS-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/client/tmpl200423/main.css">
    <link rel="stylesheet" href="/client/tmpl200423/main_plus.css">
    <link rel="stylesheet" href="/client/tmpl200423/navigation.css">
    <link rel="stylesheet" href="/client/tmpl200423/style.css">
    <link rel="stylesheet" href="/client/tmpl200423/products.css">
    <link rel="stylesheet" href="/client/tmpl200423/products_plus.css">
    <!---->

    <script src="/client/lib/jquery-2.1.4.min.js"></script>

    <div class='page_query' data-page_query=''></div>

    <script src="/client/lib/jquery.cookie.js"></script>
    <script src="/client/script.account.js"></script>
    <script src="/client/script.js"></script>
    <!---->


    <script src="/client/lib/jquery.lazyload.min.js"></script>
    <script>
        $(window).load(function () {
            $("img.lazyImg").lazyload({
                effect: "fadeIn",
                threshold: 400,
                skip_invisibleна: false
            });

        });

    </script>

    <!-- Плавный переход по якорям -->
    <script>
        $(document).ready(function () {
            $("a[href*=#]").on("click", function (e) {
                var anchor = $(this);
                var name = anchor.attr("href").replace(new RegExp("#", "gi"), "");
                var fixed_offset = 72;
                $('html, body').stop().animate({
                    scrollTop: $("a[name=" + name + "]").offset().top - fixed_offset
                }, 700);
                e.preventDefault();
                return false;
            });
        });
    </script>
    <!---->


    <link href="/client/lib/animate/animate.css" type="text/css" rel="stylesheet">
    <script src="/client/lib/animate/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!--Для крестика-->
    <!---->

    <script>
        $(document).ready(function () {

            var cur_width = $(window).width();

            $(window).resize(function () {
                if ($(window).width() <= 720 && cur_width > 720) {
                    //reload
                    location.reload();
                } else if ($(window).width() > 720 && cur_width <= 720) {
                    //reload
                    location.reload();
                }
            });

        });
    </script>


    <style>
        .scrollTop {
            position: relative;
        }

        nav.mobile .icon.back img {
            display: none !important;
        }
    </style>

</head>
<body>


<div class="theme">


    <script src="/client/lib/jquery.maskedinput.min.js"></script>

    <script>
        $(document).ready(function () {
            /*Активные кнопки верхнего бара*/
            var url = document.location.href;
            $.each($("nav a"), function () {
                if (this.href == url) {
                    $(this).addClass('activeee');
                }
                ;
            });
            var url = document.location.href;
            $.each($("header a"), function () {
                if (this.href == url) {
                    $(this).addClass('activeee');
                }
                ;
            });
            /**/

            /*Активные кнопки бокового меню*/
            var url = document.location.href;
            $.each($(".aside1 li a"), function () {
                if (this.href == url) {
                    $(this).addClass('activeee');
                }
                ;
            });
            /**/

        });
    </script>


    <div class="main_top">

        <div class="top_bar">

            <form action="https://ris72.ru/search.php" method="get" class="search">
                <input type="hidden" name="tmpl" value="">
                <input type="text" name="s" placeholder="Найти" required>
                <button type="submit"><img src="/client/images/icons/ic_search_black.png"/></button>
            </form>

            <div class="item">
                <i class="phone c1"></i>
                <a rel="nofollow" href="tel:+7(345)2500765">500-765</a>
            </div>


            <div class="item">
                <i class="map c1"></i>
                <span>Тюмень, ул. Широтная, д.43/2

Тюмень, ул. Эрвье, д.10</span>
            </div>

            <!--<i class="time c1"></i>
            <span>09:00 - 22:00</span>
            <div style="display: block; width: 48px;"></div>-->

        </div>


        <header>
            <div class="container">

                <div class="logo">
                    <a class="" href="index.html" style="margin: 0;">
                        <img style="position: relative; left: -2px;" src="/client/images/logo.png" alt=""/>
                    </a>
                </div>

                <div class="menu">

                    <div class="first_row">
                        <span class="h3">RisRoll - доставка готовых блюд!</span>
                    </div>

                    <div class="second_row">
                        <a href="akcii.html">Акции</a>
                        <a href="https://ris72.ru/%D0%A0%D1%94%D0%A0%D1%95%D0%A0%D0%85%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D1%94%D0%A1%E2%80%9A%D0%A1%E2%80%B9">Контакты</a>
                        <a href="https://ris72.ru/%D0%A0%D2%91%D0%A0%D1%95%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D0%86%D0%A0%D1%94%D0%A0%C2%B0">Доставка
                            и Оплата</a>

                    </div>

                </div>


            </div>


        </header>


        <nav class="desktop">

            <div class="container">
                <div class="menu">


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods01.png@20230423141958"
                             alt="Холодные роллы"/>
                        <a href="holodnie-rolli.html">Холодные роллы</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods11.jpg@20230423142020"
                             alt="Запечённые роллы"/>
                        <a href="zapechennie-rolli.html">Запечённые роллы</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods02.png@20230423142038"
                             alt="Тёплые роллы"/>
                        <a href="teplie-rolli.html">Тёплые роллы</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods03.jpg@20230423142059"
                             alt="Сеты"/>
                        <a href="seti.html">Сеты</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods04.jpg@20230423142111"
                             alt="Поке"/>
                        <a href="poke.html">Поке</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods05.jpeg@20230423142138"
                             alt="Том ям"/>
                        <a href="tom-jam.html">Том ям</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods06.jpg@20230423142209"
                             alt="Гунканы"/>
                        <a href="gunkani.html">Гунканы</a>
                    </div>


                    <div class="menu_item">
                        <img class="preview" src="/client/admin/images/categories/goods07.jpg@20230423142243"
                             alt="Закуски"/>
                        <a href="zakuski.html">Закуски</a>
                    </div>


                    <div class="menu_item"><a href="index.html#">Еще</a><img class="arrow"
                                                                             src="/client/images/icons/ic_menu_down_black.png"
                                                                             alt=""/>
                        <ul class="submenu h4">
                            <li><a href="sandvichi.html">Сэндвичи</a></li>


                            <li><a href="sousi.html">Соусы</a></li>


                            <li><a href="napitki.html">Напитки</a></li>


                        </ul>
                    </div>
                </div>

                <a rel="nofollow" class="basket"
                   href="https://ris72.ru/%D0%A0%D1%94%D0%A0%D1%95%D0%A1%D0%82%D0%A0%C2%B7%D0%A0%D1%91%D0%A0%D0%85%D0%A0%C2%B0">
                    <span class="s_h2 basketPrice">0₽</span>
                    <div class="icon rounded basket-area"><img src="/client/images/icons/ic_basket-2_white.png" alt=""/>
                    </div>
                </a>
            </div>

        </nav>

    </div>


    <!--Смена стиля при скролле-->
    <script>
        $(window).scroll(function () {
            if (window.innerWidth >= 800) {
                var h = 144;
            } else {
                var h = 0;
            }

            if ($(this).scrollTop() > h) {
                $('nav.desktop').addClass("scrollTop");
            } else {
                $('nav.desktop').removeClass("scrollTop");
            }
        });
    </script>
    <!---->


    <!-- Окно с разделами для мобильной версии -->
    <div class="win win_hide" id="navmenu-page" style="display: none;">

        <div class="body">

            <div class="top">
                <a class="logo" href="index.html" style="display: none;">
                    <img src="/client/images/logo.png" title="" alt=""/>
                </a>
            </div>

            <br>

            <form action="https://ris72.ru/search.php" method="get" class="search">
                <input type="hidden" name="tmpl" value="">
                <input type="text" name="s" placeholder="Найти" required>
                <button type="submit"><img src="/client/images/icons/ic_search_black.png"/></button>
            </form>


            <div class="nav_list">
                <a class="item r2" href="akcii.html">
                    <i class="ic_win_stock black"></i>
                    <span>Акции</span>
                    <img src="/client/images/icons/ic_link.png">
                </a>
                <a class="item r2"
                   href="https://ris72.ru/%D0%A0%D1%94%D0%A0%D1%95%D0%A0%D0%85%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D1%94%D0%A1%E2%80%9A%D0%A1%E2%80%B9">
                    <i class="ic_win_info black"></i>
                    <span>Контакты</span>
                    <img src="/client/images/icons/ic_link.png">
                </a>
                <a class="item r2"
                   href="https://ris72.ru/%D0%A0%D2%91%D0%A0%D1%95%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D0%86%D0%A0%D1%94%D0%A0%C2%B0">
                    <i class="ic_win_info black"></i>
                    <span>Доставка и Оплата</span>
                    <img src="/client/images/icons/ic_link.png">
                </a>

            </div>

            <div class="win_categories_grid">
                <a class="item r3" href="holodnie-rolli.html">
                    <img class="photo" src="/client/admin/images/categories/goods01.png@20230423141958"
                         alt="Холодные роллы"/>
                    <span class="cat">Холодные роллы</span>
                </a>
                <a class="item r3" href="zapechennie-rolli.html">
                    <img class="photo" src="/client/admin/images/categories/goods11.jpg@20230423142020"
                         alt="Запечённые роллы"/>
                    <span class="cat">Запечённые роллы</span>
                </a>
                <a class="item r3" href="teplie-rolli.html">
                    <img class="photo" src="/client/admin/images/categories/goods02.png@20230423142038"
                         alt="Тёплые роллы"/>
                    <span class="cat">Тёплые роллы</span>
                </a>
                <a class="item r3" href="seti.html">
                    <img class="photo" src="/client/admin/images/categories/goods03.jpg@20230423142059" alt="Сеты"/>
                    <span class="cat">Сеты</span>
                </a>
                <a class="item r3" href="poke.html">
                    <img class="photo" src="/client/admin/images/categories/goods04.jpg@20230423142111" alt="Поке"/>
                    <span class="cat">Поке</span>
                </a>
                <a class="item r3" href="tom-jam.html">
                    <img class="photo" src="/client/admin/images/categories/goods05.jpeg@20230423142138" alt="Том ям"/>
                    <span class="cat">Том ям</span>
                </a>
                <a class="item r3" href="gunkani.html">
                    <img class="photo" src="/client/admin/images/categories/goods06.jpg@20230423142209" alt="Гунканы"/>
                    <span class="cat">Гунканы</span>
                </a>
                <a class="item r3" href="zakuski.html">
                    <img class="photo" src="/client/admin/images/categories/goods07.jpg@20230423142243" alt="Закуски"/>
                    <span class="cat">Закуски</span>
                </a>
                <a class="item r3" href="sandvichi.html">
                    <img class="photo" src="/client/admin/images/categories/goods08.jpg@20230423142325" alt="Сэндвичи"/>
                    <span class="cat">Сэндвичи</span>
                </a>
                <a class="item r3" href="sousi.html">
                    <img class="photo" src="/client/admin/images/categories/goods10.jpg@20230423142514" alt="Соусы"/>
                    <span class="cat">Соусы</span>
                </a>
                <a class="item r3" href="napitki.html">
                    <img class="photo" src="/client/admin/images/categories/goods09.jpg@20230423142534" alt="Напитки"/>
                    <span class="cat">Напитки</span>
                </a>
            </div>

        </div>

        <div class="close_win">
            <img src="/client/images/icons/ic_close_white.png">
        </div>
    </div>
    <script>setTimeout(() => {
            document.querySelector('.win').style.display = 'block';
        }, 1000);</script>
    <!-- -->


    <!-- Верхний бар для мобильной версии -->
    <nav class="mobile">
        <div class="container">

            <a class="icon open_sidebar">
                <!--<img src="/client/images/icons/ic_open_sidebar_black.png" alt="" />-->
            </a>

            <a class="icon back" href="index.html" onclick="">
                <img src="/client/images/icons/ic_back_black.png" alt=""/>
            </a>

            <a class="icon close_page" href="index.html" onclick="">
                <img src="/client/images/icons/ic_close_page_black.png" alt=""/>
            </a>

            <div class="page_title">
                <h1>RisRoll (г. Тюмень)</h1>
            </div>

            <a class="icon write_comment" href="index.html#write_comment">
                <img src="/client/images/icons/ic_write_comment.png" alt=""/>
            </a>

            <!--
                        <a class="icon profile" href="user/login.php">
                <img src="/client/images/icons/ic_profile.png" alt="" />
            </a>
                        -->

            <!--<a rel="nofollow" class="basket" href="корзина">
                <span class="s_h2 basketPrice">0₽</span>
                <div class="icon rounded basket-area-mobile">
                    <img src="/client/images/icons/ic_basket_white.png" alt="" />
                </div>
            </a>-->
        </div>
    </nav>
    <!-- -->


    <!-- Bottom bar -->
    <div class="bottom_bar">


        <div class="item " href="">
            <a class="icon profile" href="tel:+7(345)2500765">
                <img src="/client/images/icons/ic_phone_black.png" alt=""/>
                <label>Позвонить</label>
            </a>
        </div>

        <div class="item" href="">
            <a href="javascript:void(0);" class="openFullPage" data-page="navmenu">
                <img src="/client/images/icons/ic_open_navmenu_white.png" alt=""/>
                <label>Меню</label>
            </a>
        </div>

        <div class="item basket" href="">
            <div><span class="basketPrice">0₽</span></div>
            <a class="basket-area-mobile"
               href="https://ris72.ru/%D0%A0%D1%94%D0%A0%D1%95%D0%A1%D0%82%D0%A0%C2%B7%D0%A0%D1%91%D0%A0%D0%85%D0%A0%C2%B0"
               onclick="(document.getElementById('page-preloader').style.display='flex')">
                <img src="/client/images/icons/ic_basket_black.png" alt=""/>
                <label>Корзина</label>
            </a>
        </div>

    </div>
    <!-- -->


    <!-- Боковая панель для мобильной версии -->
    <div class="sidebar">

        <a class="logo" href="index.html">
            <img src="/client/images/logo.png" title="" alt=""/>
        </a>


        <li style="display: flex; align-items: center;">
            <a style="width: 100%;" href="https://ris72.ru/user/login.php">Мои бонусы</a>
            <a style="float: right; background: #c20609; border-radius: 1200px; padding: 2px 12px; font-size: 16px; color: #fff !important; text-align: center;"
               href="https://ris72.ru/user/login.php">Войти</a>
        </li>


        <a href="index.html">Акции</a>
        <a href="index.html">Контакты</a>
        <a href="index.html">Доставка и Оплата</a>


        <label>Наше меню:</label>
        <div class="menu_items">
            <a href="holodnie-rolli.html">
                <img src="/client/admin/images/categories/goods01.png@20230423141958" width="40px"
                     alt="Холодные роллы"/>
                Холодные роллы </a>
            <a href="zapechennie-rolli.html">
                <img src="/client/admin/images/categories/goods11.jpg@20230423142020" width="40px"
                     alt="Запечённые роллы"/>
                Запечённые роллы </a>
            <a href="teplie-rolli.html">
                <img src="/client/admin/images/categories/goods02.png@20230423142038" width="40px" alt="Тёплые роллы"/>
                Тёплые роллы </a>
            <a href="seti.html">
                <img src="/client/admin/images/categories/goods03.jpg@20230423142059" width="40px" alt="Сеты"/>
                Сеты </a>
            <a href="poke.html">
                <img src="/client/admin/images/categories/goods04.jpg@20230423142111" width="40px" alt="Поке"/>
                Поке </a>
            <a href="tom-jam.html">
                <img src="/client/admin/images/categories/goods05.jpeg@20230423142138" width="40px" alt="Том ям"/>
                Том ям </a>
            <a href="gunkani.html">
                <img src="/client/admin/images/categories/goods06.jpg@20230423142209" width="40px" alt="Гунканы"/>
                Гунканы </a>
            <a href="zakuski.html">
                <img src="/client/admin/images/categories/goods07.jpg@20230423142243" width="40px" alt="Закуски"/>
                Закуски </a>
            <a href="sandvichi.html">
                <img src="/client/admin/images/categories/goods08.jpg@20230423142325" width="40px" alt="Сэндвичи"/>
                Сэндвичи </a>
            <a href="sousi.html">
                <img src="/client/admin/images/categories/goods10.jpg@20230423142514" width="40px" alt="Соусы"/>
                Соусы </a>
            <a href="napitki.html">
                <img src="/client/admin/images/categories/goods09.jpg@20230423142534" width="40px" alt="Напитки"/>
                Напитки </a>
        </div>

        <br>


        <label>Свяжитесь с нами</label>
        <a rel="nofollow" href="tel:+7(345)2500765"><i class="phone black"></i>Позвонить</a>


    </div>
    <!--<script src="/client/lib/sidebar.js"></script>-->
    <!-- -->


    <main>


        <div class="delivery_info_grid">

            <a rel="nofollow" class="item"
               href="https://2gis.ru/tyumen/firm/70000001067384312?m=65.574369%2C57.174742%2F14.25">
                <img src="images/color_icons/ic_map.png">
                <span>Тюмень, ул. Широтная, д.43/2

Тюмень, ул. Эрвье, д.10</span>
                <img src="images/icons/ic_link.png">
            </a>

            <a rel="nofollow" class="item" href="tel:+7(345)2500765">
                <img src="images/color_icons/ic_phone.png">
                <span>500-765</span>
                <img src="images/icons/ic_link.png">
            </a>


        </div>


        <div class="slider02">
            <div class="home-slider owl-carousel owl-theme ">

                <div class="home-slider__item">
                    <img src="/client/admin/images/maxi/banners/4919544546446b19c8f7819.68816904.jpg" alt="" title=""/>
                </div>


                <div class="home-slider__item">
                    <img src="/client/admin/images/maxi/banners/153106616446b21a6df543.46077799.jpg" alt="" title=""/>
                </div>

            </div>
        </div>


        <!-- Owl Carousel -->
        <link rel="stylesheet" href="/client/lib/carousel/carousel.css"/>
        <script src="/client/lib/carousel/owl.carousel_v2.min.js"></script>
        <script>
            $(document).ready(function () {

                $(".home-slider").owlCarousel({

                    margin: 40,
                    smartSpeed: 400,
                    navSpeed: 400,

                    navText: ['<span class="arrow-prev"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="17" cy="17" r="17" fill="#373535"></circle> <path d="M14.759 9.8418L20.9409 16.9997L14.759 24.1576" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>', '<span class="arrow-next"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="17" cy="17" r="17" fill="#373535"></circle> <path d="M14.759 9.8418L20.9409 16.9997L14.759 24.1576" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> </svg></span>'],

                    responsive: {
                        1480: {
                            center: true,
                            items: 1.47,
                            loop: true,
                            nav: true,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            autoplayHoverPause: true,

                        },
                        767: {
                            center: true,
                            items: 1.3,
                            loop: true,
                            nav: true,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            autoplayHoverPause: true,

                        },
                        0: {
                            center: true,
                            items: 1,
                            loop: false,
                            nav: false,
                            autoplay: true,
                            dots: true,
                        }
                    }
                });
            });

        </script>


        <div class="container">
            <div class="heading mobile-none000">
                <div class="line"><img src="/client/images/de-line-1.png" alt=""/></div>
                <h1>RisRoll - Доставка готовых блюд в Тюмени!</h1>
                <div class="line"><img src="/client/images/de-line-1.png" alt=""/></div>
            </div>

            <div class="text_block">

                <p>Ищете службу доставки роллов высокого качества в Тюмени? Устали от того, что приходится долго ждать
                    подтверждение заказа, а курьеры вечно опаздывают на полчаса и больше? Надоело небрежное общение
                    менеджеров ресторана? В сервисе РисРолл этих проблем нет!</p>

                <p>RisRoll — это сервис доставки блюд японской кухни в Тюмени. Мы готовим разнообразные суши, холодные,
                    запечённые и тёплые роллы, гунканы, сеты, закуски и напитки. Всегда общаемся вежливо, перезваниваем
                    для подтверждения заказа в течение 5* минут, доставляем точно в срок и обещаем, что будет безумно
                    вкусно!</p>

                <p>Один из главных принципов “Название компании” — забота о качестве блюд, поэтому используем свежие
                    продукты от проверенных поставщиков. У нас работают повара-сушисты высшей категории. Они постоянно
                    учатся и повышают квалификацию, чтобы создавать новые авторские роллы и радовать вас превосходным
                    вкусом.</p>

                <p>В РисРолл можно выгодно заказать роллы на дом или в офис! Цены на холодные роллы начинаются от 119
                    рублей, а на запечённые — от 175 рублей. Мы готовим лучшую “Филадельфию” в городе, потому что не
                    экономим на рыбе и кладем много нежного филе лосося в каждую порцию. На сайте вы найдете огромный
                    выбор роллов, суши, гунканов и закусок на любой вкус. Просто добавьте в корзину любимые блюда и
                    оформите заказ!</p>

            </div>
        </div>

        <br><br>


        <a name="cats"></a>
        <section class="categories2">

            <div class="container">

                <a class="category" href="holodnie-rolli.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images//client/admin/images/categories/goods01.png@20230423141958"
                         alt=""/>
                    <span class="s_h3">Холодные роллы</span>
                </a>


                <a class="category" href="zapechennie-rolli.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods11.jpg@20230423142020" alt=""/>
                    <span class="s_h3">Запечённые роллы</span>
                </a>


                <a class="category" href="teplie-rolli.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods02.png@20230423142038" alt=""/>
                    <span class="s_h3">Тёплые роллы</span>
                </a>


                <a class="category" href="seti.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods03.jpg@20230423142059" alt=""/>
                    <span class="s_h3">Сеты</span>
                </a>


                <a class="category" href="poke.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods04.jpg@20230423142111" alt=""/>
                    <span class="s_h3">Поке</span>
                </a>


                <a class="category" href="tom-jam.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods05.jpeg@20230423142138" alt=""/>
                    <span class="s_h3">Том ям</span>
                </a>


                <a class="category" href="gunkani.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods06.jpg@20230423142209" alt=""/>
                    <span class="s_h3">Гунканы</span>
                </a>


                <a class="category" href="zakuski.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods07.jpg@20230423142243" alt=""/>
                    <span class="s_h3">Закуски</span>
                </a>


                <a class="category" href="sandvichi.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods08.jpg@20230423142325" alt=""/>
                    <span class="s_h3">Сэндвичи</span>
                </a>


                <a class="category" href="sousi.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods10.jpg@20230423142514" alt=""/>
                    <span class="s_h3">Соусы</span>
                </a>


                <a class="category" href="napitki.html"
                   onclick="(document.getElementById('page-preloader').style.display='flex')">
                    <img class="" src="/client/admin/images/categories/goods09.jpg@20230423142534" alt=""/>
                    <span class="s_h3">Напитки</span>
                </a>

            </div>
        </section>


        <div class="heading">
            <div class="line"><img src="/client/images/de-line-1.png" alt=""/></div>
            <h2>Вкуснейшие хиты сезона</h2>
            <div class="line"><img src="/client/images/de-line-1.png" alt=""/></div>
        </div>

        <section class="products container mainlist">
            <div class="products_heading">
                <h3 class="h2 s_h1">Сеты</h3>
                <a class="button" href="seti.html">Все</a>
            </div>

            <div class="products-grid st_grid">
                <div class="product-item ani st_item" id="item-87" data-price="880" data-tags="" data-pos="1">
                    <div class="image cover">
                        <a href="seti/87-set-na-dvoih.html#">
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods03/8127685816444e1d26efbd1.33806843.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods03/8127685816444e1d26efbd1.33806843.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="seti/87-set-na-dvoih.html#">
                            <h3 class="title">Сет на двоих</h3>
                            <p class="desc">Филадельфия фреш, Калифорния, Хосомаки с Креветкой, Хосомаки с Огурцом; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">Вес: 770г.</span>
                            <input type='hidden' id='price-87' value='880' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                880₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="87">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-88" data-price="950" data-tags="" data-pos="2">


                    <div class="image cover">
                        <a href="seti/88-premium.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods03/18614242256444e203d8f491.21090926.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods03/18614242256444e203d8f491.21090926.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods03/18614242256444e203d8f491.21090926.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="seti/88-premium.html#">
                            <h3 class="title">Премиум</h3>
                            <p class="desc">Багамы, Майами, Тёплый ролл с лососем; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">Вес: 790г.</span>
                            <input type='hidden' id='price-88' value='950' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                950₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="88">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-86" data-price="855" data-tags="" data-pos="3">


                    <div class="image cover">
                        <a href="seti/86-set-50-na-50.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods03/11542295756444e1551c8358.41165723.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods03/11542295756444e1551c8358.41165723.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods03/11542295756444e1551c8358.41165723.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="seti/86-set-50-na-50.html#">
                            <h3 class="title">Сет 50 на 50</h3>
                            <p class="desc">Филадельфия с огурцом, Чикен Чиз, Сицилия, Мальта, Аризона; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">Вес: 615г.</span>
                            <input type='hidden' id='price-86' value='855' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                855₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="86">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-90" data-price="1380" data-tags="" data-pos="4">


                    <div class="image cover">
                        <a href="seti/90-set-samurai.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods03/20047748526444e2907e1b92.25335375.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods03/20047748526444e2907e1b92.25335375.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods03/20047748526444e2907e1b92.25335375.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="seti/90-set-samurai.html#">
                            <h3 class="title">сет Самурай</h3>
                            <p class="desc">Рио, Фуджи, Сакура, Хосомаки запечённые с креветкой, Хосомаки запечённые с
                                лососем; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">Вес: 1130г.</span>
                            <input type='hidden' id='price-90' value='1380' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                1380₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="90">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="products_heading">
                <h3 class="h2 s_h1">Запечённые роллы</h3>
                <a class="button" href="zapechennie-rolli.html">Все</a>
            </div>

            <div class="products-grid st_grid">


                <div class="product-item ani st_item" id="item-119" data-price="295" data-tags="" data-pos="1">


                    <div class="image cover">
                        <a href="zapechennie-rolli/119-rodos.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods11/16906933806444efd8661079.76886082.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods11/16906933806444efd8661079.76886082.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods11/16906933806444efd8661079.76886082.jpg"
                                           alt=""/></noscript>
                        </a>

                        <a href="zapechennie-rolli/119-rodos.html#">
                            <img class="s_h3 label" src="/client/admin/images/labels/label_chili.png" alt=""/>
                        </a>
                    </div>

                    <div class="text">
                        <a href="zapechennie-rolli/119-rodos.html#">
                            <h3 class="title">Родос</h3>
                            <p class="desc"> Мидии, снежный краб, сливочный сыр, огурец, соус спайси, соус унаги; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 310г.</span>
                            <input type='hidden' id='price-119' value='295' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                295₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="119">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-128" data-price="299" data-tags="" data-pos="2">


                    <div class="image cover">
                        <a href="zapechennie-rolli/128-fudzhi.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods11/20895761656444f1f647e208.93859265.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods11/20895761656444f1f647e208.93859265.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods11/20895761656444f1f647e208.93859265.jpg"
                                           alt=""/></noscript>
                        </a>

                        <a href="zapechennie-rolli/128-fudzhi.html#">
                            <img class="s_h3 label" src="/client/admin/images/labels/label_chili.png" alt=""/>
                        </a>
                    </div>

                    <div class="text">
                        <a href="zapechennie-rolli/128-fudzhi.html#">
                            <h3 class="title">Фуджи</h3>
                            <p class="desc"> Копчёная курица, сливочный сыр, огурец, бонито, соус спайси; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 270г.</span>
                            <input type='hidden' id='price-128' value='299' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                299₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="128">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-127" data-price="435" data-tags="" data-pos="3">


                    <div class="image cover">
                        <a href="zapechennie-rolli/127-florida.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods11/20555522556444f1ac725618.56438076.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods11/20555522556444f1ac725618.56438076.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods11/20555522556444f1ac725618.56438076.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="zapechennie-rolli/127-florida.html#">
                            <h3 class="title">Флорида</h3>
                            <p class="desc">Лосось, тунец, сливочный сыр, зеленый лук, соус майо, соус сладкий
                                чили; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 280г.</span>
                            <input type='hidden' id='price-127' value='435' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                435₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="127">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-126" data-price="349" data-tags="" data-pos="4">


                    <div class="image cover">
                        <a href="zapechennie-rolli/126-feniks.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods11/12483930726444f1711950a9.97387752.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods11/12483930726444f1711950a9.97387752.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods11/12483930726444f1711950a9.97387752.jpg"
                                           alt=""/></noscript>
                        </a>

                        <a href="zapechennie-rolli/126-feniks.html#">
                            <img class="s_h3 label" src="/client/admin/images/labels/label_chili.png" alt=""/>
                        </a>
                    </div>

                    <div class="text">
                        <a href="zapechennie-rolli/126-feniks.html#">
                            <h3 class="title">Феникс</h3>
                            <p class="desc">Лосось, сливочный сыр, соус спайси, кунжут; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 270г.</span>
                            <input type='hidden' id='price-126' value='349' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                349₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="126">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="products_heading">
                <h3 class="h2 s_h1">Холодные роллы</h3>
                <a class="button" href="holodnie-rolli.html">Все</a>
            </div>

            <div class="products-grid st_grid">


                <div class="product-item ani st_item" id="item-41" data-price="370" data-tags="" data-pos="1">


                    <div class="image cover">
                        <a href="holodnie-rolli/41-filadelfija.html#">
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods01/17296378766443caa2b8e512.71362084.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods01/17296378766443caa2b8e512.71362084.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="holodnie-rolli/41-filadelfija.html#">
                            <h3 class="title">Филадельфия</h3>
                            <p class="desc">Лосось, сливочный сыр; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 250г.</span>
                            <input type='hidden' id='price-41' value='370' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                370₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="41">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-47" data-price="279" data-tags="" data-pos="2">


                    <div class="image cover">
                        <a href="holodnie-rolli/47-kalifornija.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods01/17544192646443cc040a36e7.43797993.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods01/17544192646443cc040a36e7.43797993.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods01/17544192646443cc040a36e7.43797993.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="holodnie-rolli/47-kalifornija.html#">
                            <h3 class="title">Калифорния</h3>
                            <p class="desc"> Снежный краб, сливочный сыр, огурец, икра тобико; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 250г.</span>
                            <input type='hidden' id='price-47' value='279' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                279₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="47">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-17" data-price="280" data-tags="" data-pos="3">


                    <div class="image cover">
                        <a href="holodnie-rolli/17-kanzas.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods01/2927656966443c3356c0722.57568297.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods01/2927656966443c3356c0722.57568297.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods01/2927656966443c3356c0722.57568297.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="holodnie-rolli/17-kanzas.html#">
                            <h3 class="title">Канзас</h3>
                            <p class="desc"> Омлет томаго, сливочный сыр, снежный краб, соус майо, икра тобико, соус
                                унаги; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт/280гр</span>
                            <input type='hidden' id='price-17' value='280' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                280₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="17">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item ani st_item" id="item-42" data-price="389" data-tags="" data-pos="4">


                    <div class="image cover">
                        <a href="holodnie-rolli/42-filadelfija-s-ogurcom.html#">
                            <!--<div class="image-flex"><img src="/client/admin/images/maxi/goods01/3578897496443cad6011229.69659039.jpg"></div>-->
                            <img class="lazyImg"
                                 src="/client/images/noimg.png"
                                 data-original="/client/admin/images/maxi/goods01/3578897496443cad6011229.69659039.jpg"
                                 title="" alt=""/>
                            <noscript><img src="/client/admin/images/maxi/goods01/3578897496443cad6011229.69659039.jpg"
                                           alt=""/></noscript>
                        </a>

                    </div>

                    <div class="text">
                        <a href="holodnie-rolli/42-filadelfija-s-ogurcom.html#">
                            <h3 class="title">Филадельфия с огурцом</h3>
                            <p class="desc"> Лосось, сливочный сыр, огурец; </p>
                        </a>

                        <div class="weight">
                            <span class="s_h3">8шт.   Вес: 260г.</span>
                            <input type='hidden' id='price-42' value='389' data-external_id=''>
                        </div>

                        <div class="cost-line">
                            <p class="cost">
                                389₽
                            </p>
                            <div class="button-passive ">
                                <div class="s_h3 addToCart" data-id="42">Добавить</div>
                            </div>

                            <div class="button-active hide">
                                <div class="updateCart minus animinus" data-cid="0" data-type="-"><span>-</span></div>
                                <div class="kolvo"><span>0</span></div>
                                <div class="updateCart plus aniplus" data-cid="0" data-type="+"><span>+</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>


        <div class="container">

            <div class="text_block2">

                <h2>Заказать суши в Тюмени с бесплатной доставкой или почему следует выбрать сервис RisRoll</h2>

                <p>Мы заслужили доверие клиентов не словами, а делом! Ведь наша доставка обладает следующими
                    неоспоримыми преимуществами и особенностями:</p>
                <ul>
                    <li>Цены на 8%-10%* ниже, чем у конкурентов. Благодаря тому, что мы закупаем морепродукты оптом и
                        обслуживаем много клиентов, предлагаем оптимальные цены на роллы в Тюмени с сохранением
                        качества. Гарантируем, что вы ни у кого не найдёте таких же вкусных роллов по нашим ценам.
                    </li>
                    <li>Быстрая доставка за 60 минут, бесплатная от 700 рублей, и возможность самовывоза. Мы привезем
                        еду во все районы города без дополнительной оплаты! Или вы можете заказать самовывоз из
                        ресторана, если так удобнее.
                    </li>
                    <li>Богатый выбор и премиальная линейка авторских роллов. Помимо классических суши, роллов и
                        знаменитой “Филадельфии” мы готовим роллы с чёрным рисом и предлагаем премиум-линейку, созданную
                        бренд-шефом. А ещё у нас есть сеты от 20 до 56 штук в наборе из топовых позиций!
                    </li>
                    <li>Строгий контроль качества. Безукоризненное соблюдение всех норм СанПиН и поддержание идеальной
                        чистоты на кухне и в основном зале. Все ингредиенты проходят многоступенчатый контроль качества.
                    </li>
                    <li>Имбирь, соевый соус и васаби бесплатно. Мы автоматически добавляем их в заказ, в отличие от
                        конкурентов, которые предлагают соусы за дополнительную оплату.
                    </li>
                </ul>

                <h2>Доставка и оплата заказов в RisRoll</h2>

                <p>Доставляем вкусную еду и напитки в любой район города всего за 1 час! Мы действительно ценим ваше
                    время, поэтому гарантируем доставку на дом или в офис без опозданий. Также вы можете оформить
                    самовывоз суши из двух точек по адресу: Широтная 43/2 и Ю.-Р.Г. Эрвье 10.</p>

                <p>РисРолл предоставляет замечательные возможности для всех клиентов. Сервис доставки позаботился о том,
                    чтобы каждый человек мог оплатить покупку любым удобным способом. У нас возможна оплата банковской
                    картой через терминал или наличными курьеру.</p>

                <p>Оформите заказ на нашем сайте прямо сейчас! Для этого добавьте понравившиеся блюда в корзину и
                    укажите необходимую информацию. В течение 5 минут наш оператор свяжется с Вами для подтверждения
                    заказа.</p>

            </div>
        </div>


        <!-- Политика конфиденциальности и Пользовательское соглашение -->
        <!-- -->


        <link href="/client/tmpl200423/footer.css" type="text/css" rel="stylesheet">


        <footer>
            <div class="container">


                <img class="logo_footer" src="/client/images/logo_white.png" title="" alt=""/>

                <div class="social">

                    <a rel="nofollow" href="https://vk.com/ristyumen" target="_blank"><i class="vk"></i></a>


                </div>
                <!--
                        <br>

                        <div class="app_download">
                            <a rel="nofollow" href="" target="_blank">
                                <img src="/client/images/appstore.png" alt="Скачать из App Store" />
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a rel="nofollow" href="" target="_blank">
                                <img src="/client/images/googleplay.png" alt="Скачать из Google Play" />
                            </a>
                        </div>
                -->


                <ul class="f_cats">
                    <li>
                        <a href="holodnie-rolli/index.html">Холодные роллы</a>
                    </li>
                    <li>
                        <a href="zapechennie-rolli/index.html">Запечённые роллы</a>
                    </li>
                    <li>
                        <a href="teplie-rolli/index.html">Тёплые роллы</a>
                    </li>
                    <li>
                        <a href="seti/index.html">Сеты</a>
                    </li>
                    <li>
                        <a href="poke/index.html">Поке</a>
                    </li>
                    <li>
                        <a href="tom-jam/index.html">Том ям</a>
                    </li>
                    <li>
                        <a href="gunkani/index.html">Гунканы</a>
                    </li>
                    <li>
                        <a href="zakuski/index.html">Закуски</a>
                    </li>
                    <li>
                        <a href="sandvichi/index.html">Сэндвичи</a>
                    </li>
                    <li>
                        <a href="sousi/index.html">Соусы</a>
                    </li>
                    <li>
                        <a href="napitki/index.html">Напитки</a>
                    </li>
                </ul>


                <ul class="f_info">
                    <li>Ресторан доставки еды</li>

                    <li>Тюмень, ул. Широтная, д.43/2

                        Тюмень, ул. Эрвье, д.10
                    </li>

                    <li><a rel="nofollow" href="tel:500-765">500-765</a></li>


                </ul>

                <div class="lastline">
                    <p class="">Copyright © 2023 RisRoll. Все права защищены!</p>
                    <a rel="nofollow" href="https://ris72.ru/page_terms.php">Пользовательское соглашение</a>
                    <a rel="nofollow" href="https://ris72.ru/page_privacy.php">Политика конфиденциальности</a>
                </div>

            </div>
            <div class="bg0"></div>
            <div class="splash"></div>
        </footer>


    </main>

</div>

<script src="/client/lib/animate_add.js" async></script>
<!---->

<!--Кнопка "Вверх"-->
<script src="/client/lib/totop/easing.js"></script>
<script src="/client/lib/totop/jquery.ui.totop.js"></script>
<script>
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 2200,
            easingType: 'linear'
        };
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<!--end-->


<script>
    $(document).ready(function () {
        $('.close_win img').on('click', function () {
            $(this).parent().parent().addClass('win_hide');
            $('body').css('overflow', 'auto');
        });
        $('.close_win2 img').on('click', function () {
            $(this).parent().parent().parent().addClass('win_hide');
            $('body').css('overflow', 'auto');
        });
        $('body').on('click', '.openFullPage', function () {
            var page = $(this).data('page');
            $('#' + page + '-page').fadeIn(100).removeClass('win_hide').scrollTop(0);
            $('body').css('overflow', 'hidden');
            $('.logo').css('display', 'block'); // Логотип
        });
    });
</script>


<!--noindex-->
<!--googleoff: index-->
<div id="cookie_notification">
    <p>Для улучшения работы сайта и его взаимодействия с пользователями мы используем файлы cookie. Продолжая работу с
        сайтом, Вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего
        браузера.</p>
    <button class="button cookie_accept">Принять</button>
</div>
<!--googleon: index-->
<!--/noindex-->

<script>
    function checkCookies() {
        let cookieDate = localStorage.getItem('cookieDate');
        let cookieNotification = document.getElementById('cookie_notification');
        let cookieBtn = cookieNotification.querySelector('.cookie_accept');

        // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
        if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
            cookieNotification.classList.add('show');
        }

        // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
        cookieBtn.addEventListener('click', function () {
            localStorage.setItem('cookieDate', Date.now());
            cookieNotification.classList.remove('show');
        })
    }

    checkCookies();
</script>



</body>
</html>


<!--Readmore-->
<script src="/client/lib/readmore.js"></script>

<script>
    $('.text_block').readmore({
        maxHeight: 260,
        moreLink: '<div class="readmore_container"><a class="readmore_button_open" href="index.html#">Читать ещё</a></div>',
        lessLink: '<div class="readmore_container"><a class="readmore_button_close" href="index.html#">Свернуть</a></div>',
        afterToggle: function (trigger, element, more) {
            if (!more) {
                $('html, body').animate({
                    scrollTop: element.offset().top - 192
                }, {
                    duration: 500
                });
            }
        }
    });
    $('.text_block2').readmore({
        maxHeight: 252,
        moreLink: '<div class="readmore_container"><a class="readmore_button_open" href="index.html#">Читать ещё</a></div>',
        lessLink: '<div class="readmore_container"><a class="readmore_button_close" href="index.html#">Свернуть</a></div>',
        afterToggle: function (trigger, element, more) {
            if (!more) {
                $('html, body').animate({
                    scrollTop: element.offset().top - 192
                }, {
                    duration: 500
                });
            }
        }
    });
</script>
<!---->