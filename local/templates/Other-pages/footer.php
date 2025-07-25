<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die(); 

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;


IncludeTemplateLangFile(__FILE__);
?>
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <div class="socail_links">
                                <?$APPLICATION->IncludeComponent(
	"bitrix:main.share", 
	".default", 
	array(
		"HANDLERS" => array(
			0 => "twitter",
			1 => "vk",
		),
		"PAGE_URL" => "",
		"PAGE_TITLE" => "",
		"SHORTEN_URL_LOGIN" => "#",
		"SHORTEN_URL_KEY" => "#",
		"COMPONENT_TEMPLATE" => ".default",
		"HIDE" => "N"
	),
	false
);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Полезные ссылки
                            </h3>
                            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_vertical", 
	array(
		"ROOT_MENU_TYPE" => "",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "catalog_vertical",
		"DELAY" => "N",
		"MENU_THEME" => "site"
	),
	false
);?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Поиск
                            </h3>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:search.form",
                                "flat",
                                Array(
                                    "PAGE" => "#SITE_DIR#search/",
                                    "USE_SUGGEST" => "N"
                                )
                            );?>
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
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
<!-- JS here -->

<?php
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/vendor/modernizr-3.5.0.min.js');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/vendor/jquery-1.12.4.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/popper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/bootstrap.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/owl.carousel.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/isotope.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/ajax-form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/waypoints.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.counterup.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/imagesloaded.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/scrollIt.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.scrollUp.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/wow.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/gijgo.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/nice-select.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.slicknav.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.magnific-popup.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/plugins.js');

/*contact js*/
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/contact.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.ajaxchimp.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.validate.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/mail-script.js');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/main.js');

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