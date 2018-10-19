<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>
<?php
$query = "SELECT * FROM b_catalog_product WHERE ((QUANTITY_RESERVED < 0) OR (QUANTITY_RESERVED > 0))";

$rs = $DB->Query($query);
while ($flds = $rs->GetNext()) {
    $reserv = $flds["QUANTITY_RESERVED"];
    $reserv = $reserv * (-1);

    CCatalogProductProvider::ReserveProduct(array("PRODUCT_ID" => IntVal($flds["ID"]), "QUANTITY_ADD" => $reserv, "UNDO_RESERVATION" => "N"));
}



?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>