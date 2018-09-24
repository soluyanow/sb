<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

global $USER;

if($_REQUEST['NEW_PASSWORD'] == $_REQUEST['NEW_PASSWORD_CONFIRM']) {
	$userID = $USER->GetID();
	
	$userUpdate = new CUser;
	$fields = Array(
		"PASSWORD"          => $_REQUEST['NEW_PASSWORD'],
		"CONFIRM_PASSWORD"  => $_REQUEST['NEW_PASSWORD_CONFIRM'],
	);
	$userUpdate->Update($userID, $fields);
	
	if(!$userUpdate->LAST_ERROR)
	{
		echo('Ошибка: Пароль изменен');
	}
	else
	{
		echo('Ошибка: '.$userUpdate->LAST_ERROR);
	}
}
else
{
	echo('Пароли не совпадают');
}
?>