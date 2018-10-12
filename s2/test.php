<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"send.reg.info", 
	array(
		"COMPONENT_TEMPLATE" => "send.reg.info",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "skladbita48@yandex.ru",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"EVENT_MESSAGE_ID" => array(
		),
		"DISPLAY_OPTIONS" => array(
			0 => "0",
			1 => "1",
		),
        "OPTIONS" => array(
            array("TYPE" => "FILE",
                    "NAME" => "Документ",
                    "TAG_NAME" => "doc"),
            array("TYPE" => "STRING",
                    "NAME" => "Данные",
                    "TAG_NAME" => "data"),
        ),

	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>