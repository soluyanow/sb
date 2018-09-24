<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $SITE_THEME, $TEMPLATE_OPTIONS;?>
<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.optimus", 
	"left_banner", 
	array(
		"IBLOCK_TYPE" => "aspro_optimus_adv",
		"IBLOCK_ID" => "17",
		"TYPE_BANNERS_IBLOCK_ID" => "16",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"PROPERTY_CODE" => array(
			0 => "TEXT_POSITION",
			1 => "TARGETS",
			2 => "TEXTCOLOR",
			3 => "URL_STRING",
			4 => "BUTTON1TEXT",
			5 => "BUTTON1LINK",
			6 => "BUTTON2TEXT",
			7 => "BUTTON2LINK",
			8 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"SITE_THEME" => $SITE_THEME,
		"BANNER_TYPE_THEME" => "LEFT"
	),
	false
);?>
