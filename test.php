<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

<?php
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "bottommenu",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "13",
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_CODE" => "",
        "COUNT_ELEMENTS" => "N",
        "TOP_DEPTH" => "1",
        "SECTION_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_USER_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "VIEW_MODE" => "LINE",
        "SHOW_PARENT_NAME" => "Y"
    ),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
