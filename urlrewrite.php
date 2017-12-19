<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/catalog/filter_ext/(.+?)/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "dimas:catalog.smart.filter",
		"PATH" => "/catalog/filter_ext/index.php",
	),
	array(
		"CONDITION" => "#^/filter1/(.+?)/apply/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/filter/index.php",
	),
	array(
		"CONDITION" => "#^/filter/(.+?)/apply/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/test.php",
	),
	array(
		"CONDITION" => "#^/filter/(.+?)/apply/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/filter/index.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/(.+?)/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "dimas:catalog.smart.filter",
		"PATH" => "/bitrix/templates/eshop_bootstrap_green/footer.php",
	),
	array(
		"CONDITION" => "#^/catalog/(.+?)/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "dimas:catalog.smart.filter",
		"PATH" => "/bitrix/templates/eshop_bootstrap_green/header.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/order/index.php",
	),
	array(
		"CONDITION" => "#^/aksessuari/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/aksessuari/index.php",
	),
	array(
		"CONDITION" => "#^/articles/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/articles/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/store/#",
		"RULE" => "",
		"ID" => "bitrix:catalog.store",
		"PATH" => "/store/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>