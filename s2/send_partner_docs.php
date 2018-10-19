<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>
<?php

CModule::IncludeModule("highloadblock");
$hldata = Bitrix\Highloadblock\HighloadBlockTable::getById(6)->fetch();
$hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
$hlDataClass = $hldata["NAME"]."Table";

$result = $hlDataClass::getList(array(
    "select" => array("*"),
    "order" => array(),
    "filter" => array("UF_SEND_EMAIL" => "N"),
));

while($res = $result->fetch())
{
    $arEventFields = array(
        "SALE_EMAIL"          => $res["UF_EMAIL"],
        "EMAIL"               => "soluyanow@gmail.com",/*"skladbita48@yandex.ru"*/
        "UF_DOC_1"            => "skladbita.ru".CFile::GetPath($res["UF_DOC_1"]),
        "UF_DOC_2"            => "skladbita.ru".CFile::GetPath($res["UF_DOC_2"]),
        "UF_DOC_3"            => "skladbita.ru".CFile::GetPath($res["UF_DOC_3"]),
        "UF_DOC_4"            => "skladbita.ru".CFile::GetPath($res["UF_DOC_4"]),
        "UF_NAME"             => $res["UF_NAME"],
        "UF_EMAIL"            => $res["UF_EMAIL"],
        "UF_COMMENT"          => $res["UF_COMMENT"],
    );

    CEvent::Send("PARTNER_FILE_SEND", "s2", $arEventFields);

    $hl_data_class = $hlentity->getDataClass();
    $hl_data_class::update($res["ID"], array("UF_SEND_EMAIL" => "Y"));
}

?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>