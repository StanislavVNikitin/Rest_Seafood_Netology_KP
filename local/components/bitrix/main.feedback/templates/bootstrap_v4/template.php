<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mb-4">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	
	<div class="row">
		<div class="col-12">
			<h2 class="contact-title">Связаться с нами</h2>
		</div>
		<div class="col-lg-8">
			<form class="form-contact contact_form" action="<?=POST_FORM_ACTION_URI?>" method="POST" id="contactForm" novalidate="novalidate">
				<?=bitrix_sessid_post()?>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<textarea 
								class="form-control w-100" 
								name="MESSAGE" 
								id="mainFeedback_message" 
								cols="30" 
								rows="9" 
								onfocus="this.placeholder = ''" 
								onblur="this.placeholder = 'Введите ваше сообщение'" 
								placeholder="Введите ваше сообщение"
								<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
							><?=$arResult["MESSAGE"]?></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input 
								class="form-control valid" 
								name="user_name" 
								id="mainFeedback_name" 
								type="text" 
								onfocus="this.placeholder = ''" 
								onblur="this.placeholder = 'Введите ваше имя'" 
								placeholder="Введите ваше имя"
								value="<?=$arResult["AUTHOR_NAME"]?>"
								<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
							>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input 
								class="form-control valid" 
								name="user_email" 
								id="mainFeedback_email" 
								type="email" 
								onfocus="this.placeholder = ''" 
								onblur="this.placeholder = 'Введите ваш email'" 
								placeholder="Введите ваш email"
								value="<?=$arResult["AUTHOR_EMAIL"]?>"
								<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
							>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<input 
								class="form-control" 
								name="subject" 
								id="subject" 
								type="text" 
								onfocus="this.placeholder = ''" 
								onblur="this.placeholder = 'Введите тему сообщения'" 
								placeholder="Введите тему сообщения"
							>
						</div>
					</div>
				</div>

				<?if($arParams["USE_CAPTCHA"] == "Y"):?>
				<div class="form-row">
					<div class="form-group col-auto">
						<label><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-control-required">*</span></label><br/>
						<input type="text" id="mainFeedback_captcha" class="form-control" name="captcha_word" size="30" maxlength="50" value=""/><br/>
					</div>
					<div class="form-group col">
						<label for="mainFeedback_captcha"><?=GetMessage("MFT_CAPTCHA")?></label> <div style="clear:both"></div>
						<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="38" alt="CAPTCHA">
					</div>
				</div>
				<?endif;?>

				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<div class="form-group mt-3">
					<button type="submit" name="submit" class="button button-contactForm boxed-btn"><?=GetMessage("MFT_SUBMIT")?></button>
				</div>
			</form>
		</div>
		<div class="col-lg-3 offset-lg-1">
			<div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-home"></i></span>
				<div class="media-body">
					<h3>г. Москва, ул. Ленинская, д. 1</h3>
					<p>123456</p>
				</div>
			</div>
			<div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-tablet"></i></span>
				<div class="media-body">
					<h3>+7 (999) 999-99-99</h3>
					<p>Пн-Пт 9:00-18:00</p>
				</div>
			</div>
			<div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-email"></i></span>
				<div class="media-body">
					<h3>info@bcont.ru</h3>
					<p>Ответим на ваши вопросы в течение 24 часов</p>
				</div>
			</div>
		</div>
	</div>
</div>