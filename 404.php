<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

<p>В данный момент в нашем Интернет-магазине нет страницы с таким адресом. Попробуйте вручную поискать то, что вам нужно, в <a href="/search/">нашем поиске</a>.</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>