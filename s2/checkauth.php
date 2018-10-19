<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("checkauth");
?><?echo("<pre>");
print_r($_SESSION);
echo("</pre>");


?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>