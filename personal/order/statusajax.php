<?php
require ($_SERVER ['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/mainpage.php");
require ($_SERVER ["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
 
if (CModule::IncludeModule ( "sale" )) {
    $phone = $_REQUEST["phone"];
    $order = (int)$_REQUEST["order"]; 
	/*$order = 11;
	$phone = 67567;*/
	
	if (!($arOrder = CSaleOrder::GetByID($order)))
	{
	   echo "<p class=\"error\">Заказ с номером ".$order." не найден.</p>";
	}
	else
	{
		$result = CSaleOrderPropsValue::GetList(array(),array('ORDER_ID' => $order,'CODE' => 'phone'));
		while ($arProp = $result->Fetch()) $phone_check = $arProp["VALUE"];
		
		if($phone_check == $phone){
			$statuses = Array(
			"N"=>"По заказу ожидается оплата.",
			"P"=>"Заказ формируется к отправке.",
			"F"=>"Заказ выполнен."
			);
			echo "<p class=\"success\">".$statuses[$arOrder["STATUS_ID"]]."</p>";
		} else {
			echo "<p class=\"error\">Телефон и номер заказа не соответствуют.</p>";
		}
	}
	
}?>