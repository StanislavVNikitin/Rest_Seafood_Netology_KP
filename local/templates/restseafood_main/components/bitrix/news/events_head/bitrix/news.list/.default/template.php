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
<?php if(!empty($arResult) && count($arResult) > 0):?>
<div class="event_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3>Ближайщие мероприятия</h3>
                </div>
            </div>
        </div>
        <div class="section-top-border">
            <div class="row">
             <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h5 class="mb-20"><?=$arItem['PROPERTIES']["DATA_EVENT"]["VALUE"];?></h5>
                        <h4 class="mb-20"><?=$arItem["NAME"];?></h4>
                        <p>
                            <?=$arItem["PREVIEW_TEXT"];?>
                        </p>
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="genric-btn default">Подробнее</a>
                    </div>
                </div>
             <?php endforeach; ?>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <a href="/events/" class="boxed-btn3"> Все мероприятия</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
