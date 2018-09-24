<?
if(isset($_GET["register"]) && $_GET["register"] == "yes") # Нет времени править ссылки, так что лепим такой костыль 
	header("Location: /reg/");
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?><div class="textblock">

<p>Вы зарегистрированы и успешно авторизовались.</p>
 
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>