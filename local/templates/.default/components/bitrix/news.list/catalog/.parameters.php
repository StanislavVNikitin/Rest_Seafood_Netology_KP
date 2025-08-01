<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arCurrentValues */
/** @var array $arTemplateParameters */

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"USE_SHARE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_USE_SHARE"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "CHECKBOX",
		"DEFAULT" =>"N",
		"REFRESH"=> "Y",
	),
);

if ($arCurrentValues["USE_SHARE"] == "Y")
{
	$arTemplateParameters["SHARE_HIDE"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_HIDE"),
		"TYPE" => "CHECKBOX",
		"VALUE" => "CHECKBOX",
		"DEFAULT" => "N",
	);

	$arTemplateParameters["SHARE_TEMPLATE"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_TEMPLATE"),
		"DEFAULT" => "",
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"COLS" => 25,
		"ROWS" => 4,
	);

	$arTemplateParameters["SHARE_HANDLERS"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_HANDLERS"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "Y",
		"VALUES" => array(
			"facebook" => "Facebook",
			"twitter" => "Twitter",
			"vkontakte" => "ВКонтакте",
			"odnoklassniki" => "Одноклассники",
			"myworld" => "Мой Мир",
			"lj" => "LiveJournal",
			"friendfeed" => "FriendFeed",
			"moikrug" => "Мой Круг",
			"gplus" => "Google+",
			"blogger" => "Blogger",
			"digg" => "Digg",
			"reddit" => "Reddit",
			"evernote" => "Evernote",
			"linkedin" => "LinkedIn",
			"surfingbird" => "Surfingbird",
			"liveinternet" => "LiveInternet",
			"delicious" => "Delicious",
			"stumbleupon" => "StumbleUpon",
			"pocket" => "Pocket",
			"instapaper" => "Instapaper",
			"xing" => "Xing",
			"whatsapp" => "WhatsApp",
			"skype" => "Skype",
			"telegram" => "Telegram",
		),
		"DEFAULT" => array("facebook", "twitter", "vkontakte", "odnoklassniki"),
	);

	$arTemplateParameters["SHARE_SHORTEN_URL_LOGIN"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_LOGIN"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);

	$arTemplateParameters["SHARE_SHORTEN_URL_KEY"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_KEY"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);
}
?> 