<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"main", 
	array(
		"IBLOCK_TYPE" => "aspro_optimus_catalog",
		"IBLOCK_ID" => "13",
		"HIDE_NOT_AVAILABLE" => "Y",
		"BASKET_URL" => "/s2/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/s2/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "OPTIMUS_SMART_FILTER",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTICLE",
			2 => "VOLUME",
			3 => "SIZES",
			4 => "COLOR_REF",
			5 => "COLOR",
			6 => "CML2_LINK",
			7 => "",
		),
		"USE_REVIEW" => "Y",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"POST_FIRST_MESSAGE" => "N",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "TAGS",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "CML2_BASE_UNIT",
			2 => "CML2_MANUFACTURER",
			3 => "BRAND",
			4 => "PROP_2033",
			5 => "COLOR_REF2",
			6 => "PROP_159",
			7 => "PROP_2052",
			8 => "PROP_2027",
			9 => "PROP_2053",
			10 => "PROP_2083",
			11 => "PROP_2049",
			12 => "PROP_2026",
			13 => "PROP_2044",
			14 => "PROP_162",
			15 => "PROP_2065",
			16 => "PROP_2054",
			17 => "PROP_2017",
			18 => "PROP_2055",
			19 => "PROP_2069",
			20 => "PROP_2062",
			21 => "PROP_2061",
			22 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTICLE",
			2 => "VOLUME",
			3 => "SIZES",
			4 => "COLOR_REF",
			5 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "shows",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"SHOW_TOP_ELEMENTS" => "Y",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SECTION_LIST_PICTURES" => "Y",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "BRAND",
			2 => "PROP_2033",
			3 => "COLOR_REF2",
			4 => "PROP_159",
			5 => "PROP_2052",
			6 => "PROP_2027",
			7 => "PROP_2053",
			8 => "PROP_2083",
			9 => "PROP_2049",
			10 => "PROP_2026",
			11 => "PROP_2044",
			12 => "PROP_162",
			13 => "PROP_2065",
			14 => "PROP_2054",
			15 => "PROP_2017",
			16 => "PROP_2055",
			17 => "PROP_2069",
			18 => "PROP_2062",
			19 => "PROP_2061",
			20 => "CML2_LINK",
			21 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "CML2_LINK",
			2 => "DETAIL_PAGE_URL",
			3 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTICLE",
			2 => "VOLUME",
			3 => "SIZES",
			4 => "COLOR_REF",
			5 => "",
		),
		"LIST_OFFERS_LIMIT" => "10",
		"SORT_BUTTONS" => array(
			0 => "POPULARITY",
			1 => "NAME",
			2 => "PRICE",
		),
		"SORT_PRICES" => "MINIMUM_PRICE",
		"DEFAULT_LIST_TEMPLATE" => "block",
		"SECTION_DISPLAY_PROPERTY" => "",
		"LIST_DISPLAY_POPUP_IMAGE" => "Y",
		"SECTION_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SECTION_PICTURES" => "Y",
		"SHOW_SECTION_SIBLINGS" => "Y",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "DVD",
			1 => "RAZMER_MATRITSY_MP",
			2 => "MP3",
			3 => "BLOG_POST_ID",
			4 => "CML2_ARTICLE",
			5 => "CML2_BASE_UNIT",
			6 => "PREDEL_VZVESHIVANIYA_KG",
			7 => "CML2_MANUFACTURER",
			8 => "TIP_ZAGRUZKI",
			9 => "VES_ZAGRUZHAEMOGO_BELYA",
			10 => "MATERIAL_PLATFORMY",
			11 => "KOLICHESTVO_PODDONOV",
			12 => "TIP_SUSHKI",
			13 => "KOLICHESTVO_KOMPLEKTOV_SHT_1",
			14 => "KOLICHESTVO_KOMPLEKTOV_SHT",
			15 => "GRIL",
			16 => "OBEM_NULEVOY_KAMERY_L",
			17 => "KONVEKTSIYA",
			18 => "TIP_SUSHKI_1",
			19 => "KOLICHESTVO_KONFOROK",
			20 => "ELEKTROPODZHIG",
			21 => "DUKHOVKA",
			22 => "TIP_VAROCHNOY_POVERKHNOSTI",
			23 => "TIP_UPRAVLENIYA_MIKROVOLNOVOY_PECHI",
			24 => "MOSHCHNOST_MIKROVOLN_GRILYA_VT",
			25 => "REZHIM_OBOGREVA",
			26 => "SPOSOB_NAGREVA",
			27 => "TIP_OBOGREVATELYA",
			28 => "TIP_VODONAGREVATELYA",
			29 => "TIP",
			30 => "MOSHCHNOST_VT",
			31 => "STRANA_PROIZVODITEL",
			32 => "BREND",
			33 => "TSVET",
			34 => "OBYEM_L",
			35 => "OBYEM_KHOLODILNOY_KAMERY_L",
			36 => "OBYEM_MOROZILNOY_KAMERY_L",
			37 => "DIAMETR_KOLES_DYUYM",
			38 => "EMKOST_GB",
			39 => "KOLICHESTVO_KOMPRESSOROV",
			40 => "KLASS_SKOROSTI",
			41 => "KOLICHESTVO_SKOROSTEY_1",
			42 => "TIP_RAZMORAZHIVANIYA_KHOLODILNOY_KAMERY",
			43 => "TIP_RAZMORAZHIVANIYA_MOROZILNOY_KAMERY",
			44 => "KLASS_ENERGOPOTREBLENIYA",
			45 => "TEMPERATURA_V_MOROZILNOY_KAMERE",
			46 => "SHIRINA",
			47 => "VYSOTA",
			48 => "GLUBINA",
			49 => "DIAGONAL_SM",
			50 => "PODDERZHKA_USB_V_TELEVIZORE",
			51 => "PODDERZHKA_MP3",
			52 => "PODDERZHKA_DVD",
			53 => "PODDERZHKA_USB",
			54 => "CHISLO_MEGAPIKSELEY",
			55 => "SISTEMA_POMOLA",
			56 => "TIP_UBORKI",
			57 => "TIP_PYLESBORNIKA",
			58 => "VES_VYPECHKI_G",
			59 => "KOLICHESTVO_PROGRAMM_KHLEBOPECHI",
			60 => "TIP_UPRAVLENIYA_MULTIVARKI",
			61 => "KOLICHESTVO_PROGRAMM_MULTIVARKI",
			62 => "TIP_UPRAVLENIYA_PAROVARKI",
			63 => "VOZMOZHNOST_DOLIVA_VODY",
			64 => "KOLICHESTVO_YARUSOV",
			65 => "POKRYTIE",
			66 => "PAR",
			67 => "KOLICHESTVO_SKOROSTEY",
			68 => "KOLICHESTVO_TEMPERATURNYKH_REZHIMOV",
			69 => "REZHIM_OKHLAZHDENIYA",
			70 => "IMPULSNYY_REZHIM",
			71 => "MOSHCHNOST_YOGURTNITSY_VT",
			72 => "OBSHCHEE_KOLICHESTVO_PRODUKTA_G",
			73 => "SISTEMA_PITANIYA",
			74 => "POKRYTIE_SHCHIPTSOV",
			75 => "PROIZVODITELNOST_KUB_M_CH",
			76 => "BRAND",
			77 => "VIDEO_YOUTUBE",
			78 => "PROP_2033",
			79 => "COLOR_REF2",
			80 => "PROP_159",
			81 => "PROP_2052",
			82 => "PROP_2027",
			83 => "PROP_2053",
			84 => "PROP_2083",
			85 => "PROP_2049",
			86 => "PROP_2026",
			87 => "PROP_2044",
			88 => "PROP_162",
			89 => "PROP_2065",
			90 => "PROP_2054",
			91 => "PROP_2017",
			92 => "PROP_2055",
			93 => "PROP_2069",
			94 => "PROP_2062",
			95 => "PROP_2061",
			96 => "RECOMMEND",
			97 => "NEW",
			98 => "STOCK",
			99 => "VIDEO",
			100 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "DETAIL_PAGE_URL",
			4 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTICLE",
			2 => "VOLUME",
			3 => "SIZES",
			4 => "COLOR_REF",
			5 => "",
		),
		"PROPERTIES_DISPLAY_LOCATION" => "TAB",
		"SHOW_BRAND_PICTURE" => "Y",
		"SHOW_ASK_BLOCK" => "Y",
		"ASK_FORM_ID" => "2",
		"SHOW_ADDITIONAL_TAB" => "Y",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"SHOW_KIT_PARTS" => "Y",
		"SHOW_KIT_PARTS_PRICES" => "Y",
		"LINK_IBLOCK_TYPE" => "aspro_optimus_content",
		"LINK_IBLOCK_ID" => "26",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "5",
		"ALSO_BUY_MIN_BUYES" => "2",
		"USE_STORE" => "Y",
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"MIN_AMOUNT" => "10",
		"STORE_PATH" => "/s2/contacts/stores/#store_id#/",
		"MAIN_TITLE" => "Наличие на складах",
		"MAX_AMOUNT" => "20",
		"USE_ONLY_MAX_AMOUNT" => "Y",
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER2" => "asc",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"IBLOCK_STOCK_ID" => "27",
		"SHOW_QUANTITY" => "Y",
		"SHOW_MEASURE" => "Y",
		"SHOW_QUANTITY_COUNT" => "Y",
		"USE_RATING" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"DEFAULT_COUNT" => "1",
		"SHOW_HINTS" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"TOP_ELEMENT_COUNT" => "8",
		"TOP_LINE_ELEMENT_COUNT" => "4",
		"TOP_ELEMENT_SORT_FIELD" => "shows",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "shows",
		"TOP_ELEMENT_SORT_ORDER2" => "asc",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SHOW_DEACTIVATED" => "N",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "10",
		"SECTION_TOP_BLOCK_TITLE" => "Лучшие предложения",
		"OFFER_TREE_PROPS" => array(
		),
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "any_similar",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"VIEWED_ELEMENT_COUNT" => "20",
		"VIEWED_BLOCK_TITLE" => "Ранее вы смотрели",
		"ELEMENT_SORT_FIELD_BOX" => "name",
		"ELEMENT_SORT_ORDER_BOX" => "asc",
		"ELEMENT_SORT_FIELD_BOX2" => "id",
		"ELEMENT_SORT_ORDER_BOX2" => "desc",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"SKU_DETAIL_ID" => "oid",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"AJAX_FILTER_CATALOG" => "N",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DISPLAY_ELEMENT_SLIDER" => "10",
		"SHOW_ONE_CLICK_BUY" => "Y",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "8",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "9",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "9",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SALE_STIKER" => "SALE_TEXT",
		"SHOW_DISCOUNT_TIME" => "N",
		"SHOW_ARTICLE_SKU" => "Y",
		"SHOW_RATING" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"HIDE_NOT_AVAILABLE_OFFERS" => "L",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_COUNTER_LIST" => "N",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"SHOW_UNABLE_SKU_PROPS" => "Y",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"RESTART" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"SECTIONS_LIST_ROOT_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SUBSECTION_PREVIEW_DESCRIPTION" => "Y",
		"LANDING_TITLE" => "",
		"LANDING_SECTION_COUNT" => "8",
		"LANDING_PAGE_ELEMENT_COUNT" => "20",
		"LANDING_IBLOCK_ID" => "",
		"DETAIL_OFFERS_LIMIT" => "0",
		"DETAIL_EXPANDABLES_TITLE" => "Аксессуары",
		"DETAIL_ASSOCIATED_TITLE" => "Похожие товары",
		"COMPATIBLE_MODE" => "Y",
		"EMPTY_SECTIONS_SHOW" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_ID#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>