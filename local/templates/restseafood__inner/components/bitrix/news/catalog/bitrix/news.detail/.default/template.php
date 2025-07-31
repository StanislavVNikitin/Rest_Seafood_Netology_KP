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
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                        <h3><?=$arResult["NAME"]?></h3>
                    <?endif;?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
                    <blockquote class="generic-blockquote">
                        <?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?>
                    </blockquote>
                <?endif;?>
                
                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                    <div class="section-top-border">
                        <h3>Фото блюда</h3>
                        <div class="row gallery-item">
                            <div class="col-md-12">
                                <div class="single-gallery-image" style="background: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" onclick="openImageModal()"></div>
                            </div>
                        </div>
                    </div>
                <?endif;?>
                
                <?if($arResult["NAV_RESULT"]):?>
                    <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
                    <?echo $arResult["NAV_TEXT"];?>
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
                <?elseif($arResult["DETAIL_TEXT"] <> ''):?>
                    <p class="sample-text">
                        <?echo $arResult["DETAIL_TEXT"];?>
                    </p>
                <?else:?>
                    <p class="sample-text">
                        <?echo $arResult["PREVIEW_TEXT"];?>
                    </p>
                <?endif?>
                
                <?if($arResult["PROPERTIES"]["PRICE"]["VALUE"]):?>
                    <div class="price-detail">
                        <h4>Цена: <span class="price-value"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span></h4>
                    </div>
                <?endif;?>
                
                <div style="clear:both"></div>
                <br />
                <?foreach($arResult["FIELDS"] as $code=>$value):
                    if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
                    {
                        ?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
                        if (!empty($value) && is_array($value))
                        {
                            ?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
                        }
                    }
                    else
                    {
                        ?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
                    }
                    ?><br />
                <?endforeach;
                foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                    <?=$arProperty["NAME"]?>:&nbsp;
                    <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                        <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                    <?else:?>
                        <?=$arProperty["DISPLAY_VALUE"];?>
                    <?endif?>
                    <br />
                <?endforeach;
                if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
                {
                    ?>
                    <div class="news-detail-share">
                        <noindex>
                        <?
                        $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                                "HANDLERS" => $arParams["SHARE_HANDLERS"],
                                "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                                "PAGE_TITLE" => $arResult["~NAME"],
                                "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                "HIDE" => $arParams["SHARE_HIDE"],
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );
                        ?>
                        </noindex>
                    </div>
                    <?
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="javascript:history.back()" class="back-button">
                    ← Назад к меню
                </a>
            </div>
        </div>
    </div>
</div>
<div id="imageModal" class="modal-overlay">
    <div class="modal-content">
        <button class="modal-close" onclick="closeImageModal()">&times;</button>
        <img id="modalImage" src="" alt="Детальное изображение" class="modal-image">
    </div>
</div>

<script>
function openImageModal() {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const detailImage = document.querySelector('.single-gallery-image');
    
    if (detailImage && detailImage.style.backgroundImage) {
        const imageUrl = detailImage.style.backgroundImage.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
        modalImage.src = imageUrl;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});
</script>