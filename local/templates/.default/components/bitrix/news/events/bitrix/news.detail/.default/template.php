<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?=$arResult["NAME"];?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->
<!-- Start Align Area -->
<div class="about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_info_wrap">
                    <h3><?=$arResult["NAME"];?></h3>
                    <span class="long_dash"></span>
                    <p><?=$arResult["DETAIL_TEXT"];?></p>
                    <ul class="food_list">
                        <?php if (isset($arResult['PROPERTIES']["DATA_EVENT"]["VALUE"])): ?>
                        <li>
                            <img src="/local/templates/.default/assets/img/svg_icon/salad.svg" alt="">
                            <span><?=$arResult['PROPERTIES']["DATA_EVENT"]["VALUE"];?></span>
                        </li>
                        <?php endif; ?>
                        <?php if (isset($arResult['PROPERTIES']["OPTION_TEXT"]["VALUE"])): ?>
                        <li>
                            <img src="/local/templates/.default/assets/img/svg_icon/tray.svg" alt="">
                            <span><?=$arResult['PROPERTIES']["OPTION_TEXT"]["VALUE"];?></span>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_img">
                    <?php if (isset($arResult["PREVIEW_PICTURE"]["SRC"])): ?>
                    <div class="img_1">
                        <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="">
                    </div>
                    <?php endif; ?>
                    <?php if (isset($arResult["DETAIL_PICTURE"]["SRC"])): ?>
                    <div class="small_img">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <a href="/events/">Все мероприятия</a></p>
    </div>
</div>

<!-- gallery_start -->
<!--<div class="gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-75">
                    <h3>Фото с прошлых мероприятий</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="single_gallery big_img">
        <a class="popup-image" href="../img/gallery/1.png"></a>
        <img src="../img/gallery/1.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="../img/gallery/2.png"></a>
        <img src="../img/gallery/2.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="../img/gallery/3.png"></a>
        <img src="../img/gallery/3.png" alt="">
    </div>

    <div class="single_gallery small_img">
        <a class="popup-image" href="../img/gallery/4.png"></a>
        <img src="../img/gallery/4.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="../img/gallery/5.png"></a>
        <img src="../img/gallery/5.png" alt="">
    </div>
    <div class="single_gallery big_img">
        <a class="popup-image" href="../img/gallery/6.png"></a>
        <img src="../img/gallery/6.png" alt="">
    </div>
</div>-->


