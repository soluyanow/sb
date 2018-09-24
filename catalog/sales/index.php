<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "бытовая техника, малая бытовая техника, холодильники, стиральные машины");
$APPLICATION->SetPageProperty("description", "Мы предлагаем широкий ассортимент бытовой техники по адекватным ценам");
$APPLICATION->SetTitle("Распродажа");
?><?
// по умолчанию 20 показываем
if(!$_SESSION['units']) {
	$_SESSION['units'] = 20;
}
// ecли послал запрос
elseif($_POST["units"]) {
	 $_SESSION['units'] = $_POST['units'];
}

// по умолчанию показываем по рейтингу
if(!$_SESSION['sort']) {
	$_SESSION['sort'] = "PROPERTY_rating";
    $_SESSION['order'] = "desc";
}
// ecли послал запрос
elseif($_GET["sort"]) {
	 $_SESSION['sort'] = $_GET['sort'];
	 if($_GET["sort"]=="PROPERTY_rating") $_SESSION['order']="desc";
	 else $_SESSION['order']="asc";
}

// по умолчанию показываем по рейтингу
if(!$_SESSION['templl']) {
	$_SESSION['templl'] = "novinki";
}
// ecли послал запрос
elseif($_GET["templl"]) {
	 $_SESSION['templl'] = $_GET['templl'];
}
?>


<?CModule::IncludeModule('catalog');  
 if($res = CCatalogDiscount::GetDiscountProductsList(array(), array(">=DISCOUNT_ID" => 1), false, false, array())){
  while($ob = $res->GetNext()){
        $arDiscountElementID[] = $ob["PRODUCT_ID"];
  }}

  if($ress = CCatalogDiscount::GetDiscountSectionsList(array(), array(">=DISCOUNT_ID" => 1), false, false, array())){
  while($obb = $ress->GetNext()){
		
		$arSelect = Array("ID");
		$arFilter = Array("IBLOCK_ID"=>4,"ACTIVE"=>"Y","SECTION_ID"=> $obb["SECTION_ID"]);
		$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
		while($obbb = $res->GetNextElement())
		{
		 $arFields = $obbb->GetFields();
		 $arDiscountElementID[] = $arFields["ID"];
		}	
  }}
  
$arrFilterDiscount = array("ID" => $arDiscountElementID);
?>

	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter", 
	"custom", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "13",
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"SECTION_ID" => "345",
		"SECTION_CODE" => "",
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"PRICE_CODE" => array(
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => "N",
		"SAVE_IN_SESSION" => "N",
		"XML_EXPORT" => "Y",
		"SECTION_TITLE" => "NAME",
		"SECTION_DESCRIPTION" => "DESCRIPTION",
		"HIDE_NOT_AVAILABLE" => "Y",
		"TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
		"INSTANT_RELOAD" => "N",
		"FILTER_VIEW_MODE" => "vertical",
		"POPUP_POSITION" => "left",
		"COMPONENT_TEMPLATE" => "custom",
		"SEF_MODE" => "N",
		"PAGER_PARAMS_NAME" => "arrPager",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_ELEMENT_COUNT" => "Y"
	),
	$component,
	array(
		"HIDE_ICONS" => "N"
	)
);?>
    
<?
    if ($_SESSION['templl'] == 'novinki') {
        $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"list", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "13",
		"SECTION_ID" => "345",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SHOWINDEX",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => $_SESSION["sort"],
		"ELEMENT_SORT_ORDER" => $_SESSION["order"],
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilterDiscount",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"PAGE_ELEMENT_COUNT" => $_SESSION["units"],
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "PODDERZHKA",
			1 => "DVD",
			2 => "RAZMER_MATRITSY_MP",
			3 => "MP3",
			4 => "BLOG_POST_ID",
			5 => "CML2_ARTICLE",
			6 => "CML2_BASE_UNIT",
			7 => "F_USER",
			8 => "BLOG_COMMENTS_CNT",
			9 => "FORUM_MESSAGE_CNT",
			10 => "vote_count",
			11 => "PREDEL_VZVESHIVANIYA_KG",
			12 => "CML2_MANUFACTURER",
			13 => "rating",
			14 => "CML2_TRAITS",
			15 => "SORTDISCOUNT",
			16 => "CML2_TAXES",
			17 => "vote_sum",
			18 => "FORUM_TOPIC_ID",
			19 => "TIP_ZAGRUZKI",
			20 => "daygood",
			21 => "CML2_ATTRIBUTES",
			22 => "HIT",
			23 => "SORTPRICE1",
			24 => "CML2_BAR_CODE",
			25 => "VES_ZAGRUZHAEMOGO_BELYA",
			26 => "MATERIAL_PLATFORMY",
			27 => "KOLICHESTVO_PODDONOV",
			28 => "TIP_SUSHKI",
			29 => "KOLICHESTVO_KOMPLEKTOV_SHT_1",
			30 => "KOLICHESTVO_KOMPLEKTOV_SHT",
			31 => "GRIL",
			32 => "OBEM_NULEVOY_KAMERY_L",
			33 => "KONVEKTSIYA",
			34 => "TIP_SUSHKI_1",
			35 => "KOLICHESTVO_KONFOROK",
			36 => "ELEKTROPODZHIG",
			37 => "DUKHOVKA",
			38 => "TIP_VAROCHNOY_POVERKHNOSTI",
			39 => "TIP_UPRAVLENIYA_MIKROVOLNOVOY_PECHI",
			40 => "MOSHCHNOST_MIKROVOLN_GRILYA_VT",
			41 => "REZHIM_OBOGREVA",
			42 => "SPOSOB_NAGREVA",
			43 => "TIP_OBOGREVATELYA",
			44 => "TIP_VODONAGREVATELYA",
			45 => "TIP",
			46 => "MOSHCHNOST_VT",
			47 => "STRANA_PROIZVODITEL",
			48 => "BREND",
			49 => "TSVET",
			50 => "OBYEM_L",
			51 => "OBYEM_KHOLODILNOY_KAMERY_L",
			52 => "OBYEM_MOROZILNOY_KAMERY_L",
			53 => "KOLICHESTVO_KOMPRESSOROV",
			54 => "TIP_RAZMORAZHIVANIYA_KHOLODILNOY_KAMERY",
			55 => "TIP_RAZMORAZHIVANIYA_MOROZILNOY_KAMERY",
			56 => "KLASS_ENERGOPOTREBLENIYA",
			57 => "TEMPERATURA_V_MOROZILNOY_KAMERE",
			58 => "SHIRINA",
			59 => "VYSOTA",
			60 => "GLUBINA",
			61 => "DIAGONAL_SM",
			62 => "PODDERZHKA_USB_V_TELEVIZORE",
			63 => "PODDERZHKA_MP3",
			64 => "PODDERZHKA_DVD",
			65 => "PODDERZHKA_USB",
			66 => "CHISLO_MEGAPIKSELEY",
			67 => "SERTIFIKAT",
			68 => "TIP_UBORKI",
			69 => "TIP_PYLESBORNIKA",
			70 => "VES_VYPECHKI_G",
			71 => "KOLICHESTVO_PROGRAMM_KHLEBOPECHI",
			72 => "TIP_UPRAVLENIYA_MULTIVARKI",
			73 => "KOLICHESTVO_PROGRAMM_MULTIVARKI",
			74 => "TIP_UPRAVLENIYA_PAROVARKI",
			75 => "VOZMOZHNOST_DOLIVA_VODY",
			76 => "KOLICHESTVO_YARUSOV",
			77 => "POKRYTIE",
			78 => "PAR",
			79 => "KOLICHESTVO_SKOROSTEY",
			80 => "KOLICHESTVO_TEMPERATURNYKH_REZHIMOV",
			81 => "REZHIM_OKHLAZHDENIYA",
			82 => "IMPULSNYY_REZHIM",
			83 => "MOSHCHNOST_YOGURTNITSY_VT",
			84 => "OBSHCHEE_KOLICHESTVO_PRODUKTA_G",
			85 => "SISTEMA_PITANIYA",
			86 => "POKRYTIE_SHCHIPTSOV",
			87 => "PROIZVODITELNOST_KUB_M_CH",
			88 => "",
		),
		"OFFERS_LIMIT" => "5",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PRODUCT_DISPLAY_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"SEF_MODE" => "N",
		"SEF_FOLDER" => "/catalog/sales/",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "-",
		),
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_COMPARE" => "Сравнение",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BRAND_USE" => "N",
		"USE_FILTER" => "Y",
		"USE_REVIEW" => "N",
		"USE_COMPARE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"SHOW_TOP_ELEMENTS" => "Y",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"TOP_VIEW_MODE" => "SECTION",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "N",
		"USE_STORE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => "",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPONENT_TEMPLATE" => "list",
		"BACKGROUND_IMAGE" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false
);
    }
     if ($_SESSION['templl'] == 'template2') {
        $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"template2", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "13",
		"SECTION_ID" => "345",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => $_SESSION["sort"],
		"ELEMENT_SORT_ORDER" => $_SESSION["order"],
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilterDiscount",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"PAGE_ELEMENT_COUNT" => $_SESSION["units"],
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "PODDERZHKA",
			1 => "DVD",
			2 => "RAZMER_MATRITSY_MP",
			3 => "MP3",
			4 => "BLOG_POST_ID",
			5 => "CML2_ARTICLE",
			6 => "F_USER",
			7 => "BLOG_COMMENTS_CNT",
			8 => "FORUM_MESSAGE_CNT",
			9 => "vote_count",
			10 => "PREDEL_VZVESHIVANIYA_KG",
			11 => "CML2_MANUFACTURER",
			12 => "rating",
			13 => "SORTDISCOUNT",
			14 => "vote_sum",
			15 => "FORUM_TOPIC_ID",
			16 => "TIP_ZAGRUZKI",
			17 => "CML2_ATTRIBUTES",
			18 => "HIT",
			19 => "SORTPRICE1",
			20 => "CML2_BAR_CODE",
			21 => "VES_ZAGRUZHAEMOGO_BELYA",
			22 => "MATERIAL_PLATFORMY",
			23 => "KOLICHESTVO_PODDONOV",
			24 => "TIP_SUSHKI",
			25 => "KOLICHESTVO_KOMPLEKTOV_SHT_1",
			26 => "KOLICHESTVO_KOMPLEKTOV_SHT",
			27 => "GRIL",
			28 => "OBEM_NULEVOY_KAMERY_L",
			29 => "KONVEKTSIYA",
			30 => "TIP_SUSHKI_1",
			31 => "KOLICHESTVO_KONFOROK",
			32 => "ELEKTROPODZHIG",
			33 => "DUKHOVKA",
			34 => "TIP_VAROCHNOY_POVERKHNOSTI",
			35 => "TIP_UPRAVLENIYA_MIKROVOLNOVOY_PECHI",
			36 => "MOSHCHNOST_MIKROVOLN_GRILYA_VT",
			37 => "REZHIM_OBOGREVA",
			38 => "SPOSOB_NAGREVA",
			39 => "TIP_OBOGREVATELYA",
			40 => "TIP_VODONAGREVATELYA",
			41 => "TIP",
			42 => "MOSHCHNOST_VT",
			43 => "STRANA_PROIZVODITEL",
			44 => "BREND",
			45 => "TSVET",
			46 => "OBYEM_L",
			47 => "OBYEM_KHOLODILNOY_KAMERY_L",
			48 => "OBYEM_MOROZILNOY_KAMERY_L",
			49 => "KOLICHESTVO_KOMPRESSOROV",
			50 => "TIP_RAZMORAZHIVANIYA_KHOLODILNOY_KAMERY",
			51 => "TIP_RAZMORAZHIVANIYA_MOROZILNOY_KAMERY",
			52 => "KLASS_ENERGOPOTREBLENIYA",
			53 => "TEMPERATURA_V_MOROZILNOY_KAMERE",
			54 => "SHIRINA",
			55 => "VYSOTA",
			56 => "GLUBINA",
			57 => "DIAGONAL_SM",
			58 => "PODDERZHKA_USB_V_TELEVIZORE",
			59 => "PODDERZHKA_MP3",
			60 => "PODDERZHKA_DVD",
			61 => "PODDERZHKA_USB",
			62 => "CHISLO_MEGAPIKSELEY",
			63 => "SERTIFIKAT",
			64 => "TIP_UBORKI",
			65 => "TIP_PYLESBORNIKA",
			66 => "VES_VYPECHKI_G",
			67 => "KOLICHESTVO_PROGRAMM_KHLEBOPECHI",
			68 => "TIP_UPRAVLENIYA_MULTIVARKI",
			69 => "KOLICHESTVO_PROGRAMM_MULTIVARKI",
			70 => "TIP_UPRAVLENIYA_PAROVARKI",
			71 => "VOZMOZHNOST_DOLIVA_VODY",
			72 => "KOLICHESTVO_YARUSOV",
			73 => "POKRYTIE",
			74 => "PAR",
			75 => "KOLICHESTVO_SKOROSTEY",
			76 => "KOLICHESTVO_TEMPERATURNYKH_REZHIMOV",
			77 => "REZHIM_OKHLAZHDENIYA",
			78 => "IMPULSNYY_REZHIM",
			79 => "MOSHCHNOST_YOGURTNITSY_VT",
			80 => "OBSHCHEE_KOLICHESTVO_PRODUKTA_G",
			81 => "SISTEMA_PITANIYA",
			82 => "POKRYTIE_SHCHIPTSOV",
			83 => "PROIZVODITELNOST_KUB_M_CH",
			84 => "",
		),
		"OFFERS_LIMIT" => "5",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "Для интернет сайта",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PRODUCT_DISPLAY_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"SEF_MODE" => "N",
		"SEF_FOLDER" => "/catalog/sales/",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "-",
		),
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_COMPARE" => "Сравнение",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BRAND_USE" => "N",
		"USE_FILTER" => "Y",
		"USE_REVIEW" => "N",
		"USE_COMPARE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"SHOW_TOP_ELEMENTS" => "Y",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"TOP_VIEW_MODE" => "SECTION",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "N",
		"USE_STORE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => "",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		)
	),
	false
);
     }
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>