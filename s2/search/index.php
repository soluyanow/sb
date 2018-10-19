<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>

<?php
define("PARTNER_GROUP_ID", 9);
define("PARTNER_PRICE_ID", "UF_PARTNER_PRICE");

$priceID = "BASE";
$isPartner = false;
if (in_array(PARTNER_GROUP_ID, $USER->GetUserGroupArray($USER->GetID()))) {
    $isPartner = true;
    $filter = Array
    (
        "ID"                  => $USER->GetID(),
    );
    if ($isPartner) {
        $rsUsers = CUser::GetList(($by = "id"), ($order = "asc"), $filter, array("FIELDS" => array("ID", "NAME"), "SELECT" => array(PARTNER_PRICE_ID)));
        while ($res = $rsUsers->GetNext()) {
            if (isset($res[PARTNER_PRICE_ID]) && !empty($res[PARTNER_PRICE_ID])) {
                $priceID = $res[PARTNER_PRICE_ID];
            }
        }
    }
}

$template = "main";
$sectionTemplatePrefix = "";
if ($isPartner) {
    $sectionTemplatePrefix = "_partner";
}

$template .= $sectionTemplatePrefix;
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.search",
    $template,
	array(
        "IS_PARTNER" => $isPartner,
        "SUBSECTION_TEMPLATE_PREFIX" => $sectionTemplatePrefix,
        "PRICE_CODE" => array(
            0 => $priceID,
        ),
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "13",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"HIDE_NOT_AVAILABLE" => "Y",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "F_USER",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "/s2/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/s2/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"BASKET_URL" => "/s2/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"DISPLAY_COMPARE" => "N",
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array(
			0 => "F_USER",
		),
		"USE_PRODUCT_QUANTITY" => "N",
		"CONVERT_CURRENCY" => "N",
		"RESTART" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"USE_LANGUAGE_GUESS" => "N",
		"CHECK_DATES" => "N",
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"COMPONENT_TEMPLATE" => "main",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>