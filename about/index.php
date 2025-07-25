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
                <h3>Exercitation photo booth stumptown tote
                    bag todo Banksy elit small</h3>
                    <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.</p>
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