<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?
define("CATALOG_ID", 13);

$resArray = array();
$arSelect = Array("ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>IntVal(CATALOG_ID), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNext())
{
    $resArray[] = IntVal($ob["ID"]);
}

$el = new CIBlockElement;
$arLoadProductArray = Array(
);
foreach ($resArray as $val) {
    $res = $el->Update(IntVal($val), $arLoadProductArray);
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>