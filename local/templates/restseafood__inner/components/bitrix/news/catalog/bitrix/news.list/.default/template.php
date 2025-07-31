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
$APPLICATION->SetAdditionalCSS($templateFolder . '/style.css');
?>
<div class="Delicious_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3>Посмотрите наше меню</h3>
                </div>
            </div>
        </div>
        
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        
        <div class="tablist_menu">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-lunch"></i>
                                    </div>
                                    <h4>Основное меню</h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-food"></i>
                                    </div>
                                    <h4>Завтраки</h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-kitchen"></i>
                                    </div>
                                    <h4>Бизнес-ланчи</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- Основное меню - раздел 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?if($arItem["IBLOCK_SECTION_ID"] == 1):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="col-xl-6 col-md-6 col-lg-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="single_delicious d-flex align-items-center">
                                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                        <div class="thumb">
                                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                                </a>
                                            <?else:?>
                                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                            <?endif;?>
                                        </div>
                                    <?endif;?>
                                    <div class="info">
                                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                            <h3>
                                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                                                <?else:?>
                                                    <?=$arItem["NAME"]?>
                                                <?endif;?>
                                            </h3>
                                        <?endif;?>
                                        
                                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                        <?endif;?>
                                        
                                        <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                                            <span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span>
                                        <?endif;?>
                                        
                                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn primary-border">Подробнее</a>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                </div>
            </div>
            
            <!-- Завтраки - раздел 2 -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?if($arItem["IBLOCK_SECTION_ID"] == 2):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="col-xl-6 col-md-6 col-lg-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="single_delicious d-flex align-items-center">
                                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                        <div class="thumb">
                                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                                </a>
                                            <?else:?>
                                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                            <?endif;?>
                                        </div>
                                    <?endif;?>
                                    <div class="info">
                                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                            <h3>
                                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                                                <?else:?>
                                                    <?=$arItem["NAME"]?>
                                                <?endif;?>
                                            </h3>
                                        <?endif;?>
                                        
                                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                        <?endif;?>
                                        
                                        <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                                            <span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span>
                                        <?endif;?>
                                        
                                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn primary-border">Подробнее</a>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                </div>
            </div>
            
            <!-- Бизнес-ланчи - раздел 3 -->
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?if($arItem["IBLOCK_SECTION_ID"] == 3):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="col-xl-6 col-md-6 col-lg-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="single_delicious d-flex align-items-center">
                                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                        <div class="thumb">
                                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                                </a>
                                            <?else:?>
                                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                            <?endif;?>
                                        </div>
                                    <?endif;?>
                                    <div class="info">
                                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                            <h3>
                                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                                                <?else:?>
                                                    <?=$arItem["NAME"]?>
                                                <?endif;?>
                                            </h3>
                                        <?endif;?>
                                        
                                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                        <?endif;?>
                                        
                                        <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                                            <span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span>
                                        <?endif;?>
                                        
                                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn primary-border">Подробнее</a>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                </div>
            </div>
        </div>
        
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</div>
