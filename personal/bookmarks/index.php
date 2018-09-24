<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы предлагаем широкий ассортимент бытовой техники по адекватным ценам");
$APPLICATION->SetPageProperty("keywords", "бытовая техника, малая бытовая техника, холодильники, стиральные машины");
$APPLICATION->SetTitle("Избранное");
?><?php
global $USER;
$curUser = $USER->GetId();

// по умолчанию 20 показываем
if(!$_SESSION['units']) {
	$_SESSION['units'] = 20;
}
// ecли послал запрос
elseif($_POST["units"]) {
	 $_SESSION['units'] = $_POST['units'];
}

// по умолчанию показываем по рейтингу
if(!$_SESSION['sort']) {
	$_SESSION['sort'] = "PROPERTY_rating";
    $_SESSION['order'] = "desc";
}
// ecли послал запрос
elseif($_GET["sort"]) {
	 $_SESSION['sort'] = $_GET['sort'];
	 if($_GET["sort"]=="PROPERTY_rating") $_SESSION['order']="desc";
	 else $_SESSION['order']="asc";
}

?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.link.list", 
	"bookmarks", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "13",
		"LINK_PROPERTY_SID" => "F_USER",
		"ELEMENT_ID" => $curUser,
		"ELEMENT_SORT_FIELD" => $_SESSION["sort"],
		"ELEMENT_SORT_ORDER" => $_SESSION["order"],
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => $_SESSION["units"]?$_SESSION["units"]:"20",
		"PROPERTY_CODE" => array(
			0 => "F_USER",
			1 => "SORTPRICE1",
			2 => "",
		),
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "Для интернет сайта",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>