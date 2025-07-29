<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

\Bitrix\Main\UI\Extension::load(["ui.bootstrap4", "ui.fonts.opensans"]);

$APPLICATION->SetTitle("О ресторане");
?>
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>О нас</h3>
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
                <h3>О нашем ресторане</h3>
                    <p>Мы стремимся создать для вас незабываемые впечатления от каждого посещения. Наша команда профессионалов готовит изысканные блюда из свежайших морепродуктов и рыбы. Уютная атмосфера, внимательное обслуживание и высокое качество кухни - всё это делает наш ресторан идеальным местом для особенных моментов. Мы гордимся тем, что уже много лет радуем наших гостей великолепными блюдами и безупречным сервисом.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="about_thumb">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about/about_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_thumb">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>