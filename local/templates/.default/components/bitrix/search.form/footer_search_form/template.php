<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
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
$this->setFrameMode(true);?>

<!--                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Поиск
                        </h3>



                        <form action="/search/" class="newsletter_form">
                            <input type="text" placeholder="Поиск по сайту">
                            <button type="submit">Найти</button>
                        </form>
                        <p class="newsletter_text">Найдется всё, что нужно.</p>
                    </div>-->


<div class="footer_widget">
    <h3 class="footer_title">
        Поиск
    </h3>
    <form action="<?=$arResult['FORM_ACTION']?>" class="newsletter_form">
        <?php if ($arParams['USE_SUGGEST'] === 'Y'):
            ?><?php $APPLICATION->IncludeComponent(
            'bitrix:search.suggest.input',
            '',
            [
                'NAME' => 'q',
                'VALUE' => '',
                'INPUT_SIZE' => 15,
                'DROPDOWN_SIZE' => 10,
            ],
            $component, ['HIDE_ICONS' => 'Y']
        );?><?php else:?><input type="text" name="q" value="" placeholder="Поиск по сайту" /><?php endif;?>
        <button name="s" type="submit"><?=GetMessage('BSF_T_SEARCH_BUTTON');?></button>
    </form>
    <p class="newsletter_text">Найдется всё, что нужно.</p>
</div>
