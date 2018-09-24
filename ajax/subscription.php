<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

global $USER;
CModule::IncludeModule("subscribe") or die('Error: include module.');;

if(!isset($_REQUEST['type']))
	die('Error: "type" not define;');

if($USER->IsAuthorized())
{
	if($_REQUEST['type'] == 'Y')
	{
		$subscr = new CSubscription;
		$subscr->Add(array(
			"USER_ID" => $USER->GetID(),
			"ACTIVE" => "Y",
			"EMAIL" => $USER->GetEmail(),
			"FORMAT" => "html",
			"CONFIRMED" => "Y",
			"SEND_CONFIRM" => "N",
			"RUB_ID" => 1,
		));
		die('Y');
	}
	elseif($_REQUEST['type'] == 'N')
	{
		$subscr = CSubscription::GetList( array("ID"=>"ASC"), array("USER_ID"=>$USER->GetID()) );
		
		if($subscr_arr = $subscr->Fetch())
		{
			CSubscription::Delete($subscr_arr["ID"]);
			die('N');
		}
	}
	
	die('Error: bad "type";');
}

die('Error: not authorized');
?>