<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Распродажа");
$APPLICATION->SetTitle("Распродажа");
?><span style="background-color: #ffffff;">
<h2>АКЦИЯ!!!!</h2>
<br>
Только в интернет - магазине «Склад бытовой техники» Вас ждёт множество интересных предложений и увлекательных акций. В честь открытия скидка на всю бытовую технику!!!&nbsp;</span><br>
 <br>
 <?//print_r($arItem["DETAIL_PICTURE"] = CFile::GetFileArray(954));?>
<div class="main m-list">
	 <?
	CModule::IncludeModule("iblock");  

   $arFilter = Array('IBLOCK_ID'=>4, 'GLOBAL_ACTIVE'=>'Y', 'UF_SHOWINDEX'=>1);  
   $db_list = CIBlockSection::GetList(Array("sort"=>"asc"), $arFilter, true, Array("UF_*")/*, Array("nTopCount" => 5)*/);  
   echo $db_list->NavPrint($arIBTYPE["SECTION_NAME"]);  
   $k = 1;
   while($ar_result = $db_list->GetNext())  {  
		$ar_result["DETAIL_PICTURE_PROPS"] = CFile::GetFileArray($ar_result["DETAIL_PICTURE"]);	   
		/*echo "<pre>";
	   print_r($ar_result);
	   echo "</pre>";*/

   $rs = CIBlockElement::GetList(
     array("CATALOG_PRICE_1" => "asc"), 
     array(
         "IBLOCK_ID" => 4, 
         ">CATALOG_PRICE_1" => 0, 
         "SECTION_ID" => $ar_result['ID'], 
         "ACTIVE" => "Y", 
         "INCLUDE_SUBSECTIONS" => 'Y', 
         "SECTION_GLOBAL_ACTIV" => 'Y'
     ), 
     false, 
     Array("nTopCount" => 1), 
     array("ID", "IBLOCK_ID", "SECTION_ID", "CATALOG_PRICE_1")
 );

	 if($ar = $rs->GetNext()) {
		 //echo 'Минимальная цена раздела '.$ar["SECTION_ID"].' и всех вложенных в него разделов: '.$ar["CATALOG_PRICE_1"];
	 }?> <?if($k<=4):?>
	<div class="m-list-item">
 <a href="#"> 
    <span class="name"><?=$ar_result['NAME']?></span>
    <span class="pricee">от <?=number_format($ar["CATALOG_PRICE_1"], 0, ',', ' ')?> руб.</span> 
    <img src="<span id=" title="Код php: <span id=" class="bxhtmled-surrogate"><?=$ar_result["DETAIL_PICTURE_PROPS"]["SRC"]?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>" class="bxhtmled-surrogate"&gt;<?=$ar_result["DETAIL_PICTURE_PROPS"]["SRC"]?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>" alt="<?=$ar_result['NAME']?>" /&gt; </a>
	</div>
	 <?endif;?> <?$k++;?> <?}  

?>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.result",
	"",
	Array(
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.filter",
	".default",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"OFFERS_FIELD_CODE" => array(0=>"",1=>"",),
		"OFFERS_PROPERTY_CODE" => array(0=>"",1=>"",),
		"LIST_HEIGHT" => "5",
		"TEXT_WIDTH" => "20",
		"NUMBER_WIDTH" => "5",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SAVE_IN_SESSION" => "N",
		"PRICE_CODE" => array()
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter",
	".default",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SAVE_IN_SESSION" => "N",
		"INSTANT_RELOAD" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"XML_EXPORT" => "N",
		"SECTION_TITLE" => "-",
		"SECTION_DESCRIPTION" => "-"
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	Array(
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>