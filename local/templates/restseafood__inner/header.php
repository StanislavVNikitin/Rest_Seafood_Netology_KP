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
        Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/assets/img/favicon.png">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
        Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">');

        Asset::getInstance()->addCss('/local/templates/.default/assets/css/bootstrap.min.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/owl.carousel.min.css');

        Asset::getInstance()->addCss('/local/templates/.default/assets/css/magnific-popup.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/font-awesome.min.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/themify-icons.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/gijgo.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/nice-select.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/flaticon.css');
        Asset::getInstance()->addCss('/local/templates/.default/assets/css/slicknav.css');

        Asset::getInstance()->addCss('/local/templates/.default/assets/css/style.css');


        Asset::getInstance()->addJs('/local/templates/.default/assets/js/vendor/modernizr-3.5.0.min.js');

        Asset::getInstance()->addJs('/local/templates/.default/assets/js/vendor/jquery-1.12.4.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/popper.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/bootstrap.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/owl.carousel.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/isotope.pkgd.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/ajax-form.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/waypoints.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.counterup.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/imagesloaded.pkgd.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/scrollIt.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.scrollUp.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/wow.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/gijgo.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/nice-select.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.slicknav.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.magnific-popup.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/plugins.js');

        /*contact js*/
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/contact.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.ajaxchimp.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.form.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/jquery.validate.min.js');
        Asset::getInstance()->addJs('/local/templates/.default/assets/js/mail-script.js');

        Asset::getInstance()->addJs('/local/templates/.default/assets/js/main.js');


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
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/logo.php"
                                )
                            );?>
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

                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/header_event_link.php"
                                )
                            );?>
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
