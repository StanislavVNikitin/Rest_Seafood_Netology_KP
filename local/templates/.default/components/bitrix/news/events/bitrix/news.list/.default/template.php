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

<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Мероприятия для наших гостей</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whole-wrap">
    <div class="container box_1170">
        <?php if(!empty($arResult) && count($arResult) > 0):?>
        <div class="section-top-border">
            <h3 class="mb-30">Расписание мероприятий</h3>
            <div class="progress-table-wrap">
                <div class="progress-table">
                    <div class="table-head">
                        <div class="date">Дата</div>
                        <div class="title">Название</div>
                        <div class="agenda">Программа</div>
                        <div class="detail">Регистрация</div>
                    </div>
                    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                        <div class="table-row">
                        <div class="date"><?=$arItem['PROPERTIES']["DATA_EVENT"]["VALUE"];?></div>
                        <div class="title"><?=$arItem["NAME"];?></div>
                        <div class="agenda">
                            <?=$arItem["PREVIEW_TEXT"];?>
                        </div>
                        <div class="detail">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="genric-btn success medium">Подробнее</a>
                        </div>
                    </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
        <?php else:?>
        <div class="section-top-border">
            <h3 class="mb-30">Мероприятий на данные момент никаких нет</h3>
        </div>
        <?php endif;?>
    </div>
</div>

