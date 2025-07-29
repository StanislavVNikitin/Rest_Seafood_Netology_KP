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

    ?>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
<!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="header_bottom_border">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">

                                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_horizontal_multilevel_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_horizontal_multilevel_menu"
	),
	false
);?>
                                </div>
                        </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="events/index.html">Наши мероприятия</a>
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
