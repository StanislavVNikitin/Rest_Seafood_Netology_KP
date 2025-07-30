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
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/logo.php"
                            )
                        );?>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/address.php"
                            )
                        );?>


                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/socail_links.php"
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

                    <?$APPLICATION->IncludeComponent("bitrix:search.form", "footer_search_form", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	),
	false
);?>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer/copyright.php"
                    )
                );?>
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