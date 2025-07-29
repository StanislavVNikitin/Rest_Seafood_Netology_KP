<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true){
    die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

?>

<!doctype html lang="<?= LANGUAGE_ID ?>">
<html>

<head>

    <?php Asset::getInstance()->addString('<meta http-equiv="x-ua-compatible" content="ie=edge">');?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php $APPLICATION->ShowHead();
        Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="'.SITE_TEMPLATE_PATH.'/img/favicon.png">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
        Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">');

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/bootstrap.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/owl.carousel.min.css');

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/magnific-popup.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/font-awesome.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/themify-icons.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/gijgo.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/nice-select.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/flaticon.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/slicknav.css');
    ?>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">

                                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_horizontal_multilevel_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "4",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

 <!--                               <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Главная</a></li>
                                        <li><a href="catalog/index.html">Меню</a></li>
                                        <li><a href="#">О ресторане <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="about.html">О нас</a></li>
                                                <li><a href="contact.html">Контакты</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="reviews/index.html">Отзывы</a></li>
                                        <li><a href="events/index.html">Мероприятия</a></li>
                                    </ul>
                                </nav>-->
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="say_hello">
                                <a href="#">Наши мероприятия</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->


