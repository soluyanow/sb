<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы предлагаем широкий ассортимент бытовой техники по адекватным ценам.");
$APPLICATION->SetPageProperty("keywords", "бытовая техника, малая бытовая техника, холодильники, стиральные машины");
$APPLICATION->SetTitle("\"Склад бытовой техники\" Интернет-магазин");
?>

<?
// we need to have all styles for sale.location.selector.steps, but RestartBuffer() cuts off document head with styles in it
$APPLICATION->IncludeComponent(
	"bitrix:sale.location.selector.steps", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => "",
		"CODE" => "",
		"INPUT_NAME" => "LOCATION",
		"PROVIDE_LINK_BY" => "id",
		"PRESELECT_TREE_TRUNK" => "N",
		"PRECACHE_LAST_LEVEL" => "N",
		"FILTER_BY_SITE" => "N",
		"SHOW_DEFAULT_LOCATIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"JS_CONTROL_GLOBAL_ID" => "",
		"JS_CALLBACK" => "",
		"SUPPRESS_ERRORS" => "Y",
		"DISABLE_KEYBOARD_INPUT" => "N",
		"INITIALIZE_BY_GLOBAL_EVENT" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);
/*$APPLICATION->IncludeComponent(
    'bitrix:sale.location.selector.search',
    '.default',
    array(),
    false
);*/
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>