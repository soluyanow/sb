<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы предлагаем широкий ассортимент бытовой техники по адекватным ценам");
$APPLICATION->SetPageProperty("keywords", "бытовая техника, малая бытовая техника, холодильники, стиральные машины");
$APPLICATION->SetTitle("Контакты");
?><b>График работы интернет-магазина:<br>
 </b>ПН-ПТ: 9:00-17:00. <br>
 Перерыв: 13:00-14:00.<br>
 СБ-ВС: Выходной<br>
 При самовывозе отгрузка товара со склада осуществляется до 17:00.<b><br>
 </b><br>
 <b>ООО</b> <b>«Торговый дом «Антарес»<br>
 </b><br>
 <b>Телефон/Факс магазин:</b>
<p>
	 (4742) 40-89-49 <br>
</p>
<p>
 <b>Телефон/Факс оптовый отдел:</b>
</p>
<p>
	 (4742) 49-31-00 (01-08)<b><br>
 </b>
</p>
<p>
 <b>Контакты: <br>
 </b>
</p>
<p>
	 Фактический адрес: 398902, Липецкая обл.,&nbsp;г. Липецк, ул. Ангарская, вл. №55
</p>
<p>
	 Юридический адрес: 398902, Липецкая обл.,&nbsp;г. Липецк, ул. Ангарская, вл. №55
</p>
<p>
	 ОГРН: 1024800832430 <br>
</p>
<p>
</p>
<p>
</p>
<p>
 <b>Электронный адрес:</b>
</p>
 <b><a href="mailto:skladbita48@yandex.ru">skladbita48@yandex.ru</a></b><br>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",2=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:52.60131383696244;s:10:\"yandex_lon\";d:39.45371445492302;s:12:\"yandex_scale\";i:13;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:39.44250490763799;s:3:\"LAT\";d:52.60037407647543;s:4:\"TEXT\";s:19:\"Склад быта\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "700",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
</p>
<div class="textblock">
 <br>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>