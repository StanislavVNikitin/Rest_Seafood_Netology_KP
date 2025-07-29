<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true){
    die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);


?>


<!-- footer_start  -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                            <a href="#">+10 367 826 2567</a> <br>
                            <a href="#">contact@carpenter.com</a>
                        </p>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/social_links.php"
                            )
                        );?>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Полезные ссылки
                        </h3>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "menu_footer",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "COMPONENT_TEMPLATE" => "store_v3_bottom",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => "",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_THEME" => "site",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N"
                            )
                        );?>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Поиск
                        </h3>
                        <div class="newsletter_form">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:search.form",
                                "flat",
                                Array(
                                    "PAGE" => "/search/",
                                    "USE_SUGGEST" => "N"
                                ),
                                false,
                                array(
                                    "HIDE_ICONS" => "Y"
                                )
                            );?>
                        </div>
                        <p class="newsletter_text">Найдется всё, что нужно.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/copyright.php"
                            )
                        );?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->

<!-- JS here -->

<?php
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


<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }

    });
</script>
</body>

</html>