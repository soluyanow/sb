<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы предлагаем широкий ассортимент бытовой техники по адекватным ценам");
$APPLICATION->SetPageProperty("keywords", "бытовая техника, малая бытовая техника, холодильники, стиральные машины");
$APPLICATION->SetTitle("Настройки пользователя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	"template1", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
			0 => "UF_STRUCTURE",
			1 => "UF_APARTMENT",
			2 => "UF_HOME",
			3 => "UF_ENTITY_FORM",
			4 => "UF_ENTITY_NAME",
			5 => "UF_ENTITY_INN",
			6 => "UF_ENTITY_BANK_NAME",
			7 => "UF_ENTITY_KPP",
			8 => "UF_ENTITY_BIK_BANK",
			9 => "UF_ENTITY_CHACCOUNT",
			10 => "UF_ENTITY_COACCOUNT",
			11 => "UF_ENTITY_SUCCESS",
		),
		"SEND_INFO" => "N",
		"CHECK_RIGHTS" => "N",
		"USER_PROPERTY_NAME" => "",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>