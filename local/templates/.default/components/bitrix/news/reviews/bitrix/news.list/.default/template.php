<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-50">
                            <h3>Наши клиенты говорят:</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="testmonial_active owl-carousel">

                        <?php foreach ($arResult["ITEMS"] as $arItem): ?>

                            <div class="single_carousel">
                                <div class="single_testmonial ">
                                    <?
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                        <div class="author_opinion">
                                            <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                                        </div>
                                    </a>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="75" height="75"
                                                 alt="">
                                        </div>
                                        <div class="name">
                                            <h3><?= $arItem["NAME"] ?></h3>

                                            <?php if (isset($arItem['PROPERTIES']["RATING"]["VALUE"])): ?>
                                                <div class="icon rating">
                                                    <?php for ($i = 1; $i <= (int)$arItem['PROPERTIES']["RATING"]["VALUE"]; $i++): ?>
                                                        <i class="fa fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>
        </div>
    </div>

