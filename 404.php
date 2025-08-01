<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
?>



<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>404 Ошибка!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="main_about_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1>Упс, такой страницы не существует!</h1>
                    <h2>Вернуться на <a href="/">Главную страницу</a></h2>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-xl-12">
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
                            "LEVEL"	=>	"3",
                            "COL_NUM"	=>	"2",
                            "SHOW_DESCRIPTION"	=>	"Y",
                            "SET_TITLE"	=>	"Y",
                            "CACHE_TIME"	=>	"36000000"
                        )
                    );?>
                </div>
            </div>

        </div>
    </div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>