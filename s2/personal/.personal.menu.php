<?
$aMenuLinks = Array(
	Array(
		"Мои данные", 
		"/personal/profile/", 
		Array(), 
		Array(), 
		"\$GLOBALS['USER']->IsAuthorized()"
	),
	Array(
		"Моя корзина", 
		"/personal/cart/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Мои заказы", 
		"/personal/order/", 
		Array(), 
		Array(), 
		"\$GLOBALS['USER']->IsAuthorized()"
	),
	Array(
		"Избранное", 
		"/personal/bookmarks/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Выход", 
		"?logout=yes", 
		Array(), 
		Array(), 
		"\$GLOBALS['USER']->IsAuthorized()"
	)
);
?>