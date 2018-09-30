<?php
$arUrlRewrite=array (
  10 => 
  array (
    'CONDITION' => '#^/s2/bitrix/services/ymarket/([\\w\\d\\-]+)?(/)?(([\\w\\d\\-]+)(/)?)?#',
    'RULE' => 'REQUEST_OBJECT=$1&METHOD=$4',
    'ID' => '',
    'PATH' => '/s2/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/s2/personal/history-of-orders/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/s2/personal/history-of-orders/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/acrit.exportpro/(.*)#',
    'RULE' => 'path=$1',
    'ID' => '',
    'PATH' => '/acrit.exportpro/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/s2/contacts/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/s2/contacts/stores/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/s2/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/s2/personal/order/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/s2/info/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/info/articles/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/s2/company/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/company/news/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/s2/info/article/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/info/article/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/s2/info/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/info/brands/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/s2/info/brand/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/info/brand/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/help/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/help/articles/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/s2/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/s2/personal/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/s2/landings/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/landings/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/s2/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/services/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/s2/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/products/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/s2/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/catalog/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/s2/sale/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/sale/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
