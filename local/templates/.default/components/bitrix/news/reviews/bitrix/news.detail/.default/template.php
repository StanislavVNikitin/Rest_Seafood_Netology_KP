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


<div class="whole-wrap">
    <div class="container box_1170">
        <div class="single-post">
            <div class="blog_details">
                <ul class="blog-info-link mt-3 mb-4">
                    <li><img class="img-fluid" src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" width="50" height="50"
                             alt="">
                        <div>
                            <?php if (isset($arResult['PROPERTIES']["RATING"]["VALUE"])): ?>
                                <div class="icon rating">
                                    <?php for ($i = 1; $i <= (int)$arResult['PROPERTIES']["RATING"]["VALUE"]; $i++): ?>
                                        <i class="fa fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div><?=$arResult["NAME"];?> | <?=$arResult["DISPLAY_ACTIVE_FROM"];?></div>

                    </li>

                </ul>

                <p class="excert"><?=$arResult["DETAIL_TEXT"];?>
                </p>
            </div>
            <div class="backreviews">
                <p></p><a href="/reviews/">Все отзывы</a></p>
            </div>
        </div>

    </div>
</div>
