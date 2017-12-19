<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
echo "test git22";

 // $handle = curl_init();
// curl_setopt($handle, CURLOPT_URL, "http://kresla-market.ru");
// curl_setopt($handle, CURLOPT_POST, 1);
// //curl_setopt($ch, CURLOPT_NOBODY, 1);
// //curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=login&imembername=valenok&ipassword=ne_skaju&submit=%C2%F5%EE%E4');
// //curl_setopt($ch, CURLOPT_COOKIEJAR, "my_cookies.txt");  
// curl_setopt($handle, CURLOPT_RETURNTRANSFER, true); 
// $res = curl_exec($handle); 
// curl_close($handle);

 // $handle = curl_init();
    // curl_setopt($handle, CURLOPT_URL, "http://checkin.azurair.com/oxygen-check-in/json/add-to-order");
    // curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	
	// curl_setopt($handle, CURLOPT_POSTFIELDS, 'lastName=SUKHAREV&number=0270007500850&date=01.09.2017&flight=7733');

    // $homepage = curl_exec($handle);
    // curl_close($handle);
// echo $homepage;
    // $res = json_decode($homepage);
	// $array =  (array)$res;
	// print_r2($array);
	// echo substr_count("CAPTCHA_REQUIRED", $array["result"]);
	// if ((substr_count("CAPTCHA_REQUIRED", $array["result"]) != 1) && (substr_count("orderNotFound", $array["error"]) != 1))
	// mail("mail44mail@mail.ru; dko12@mail.ru", "Registration start!", "Go to http://www.azurair.com/services/online-registration</a>");

	// if ((substr_count("CAPTCHA_REQUIRED", $array["result"]) != 1) && ((substr_count("orderNotFound", $array["error"]) == 1))){
		// mail("mail44mail@mail.ru; dko12@mail.ru", "Registration not works!", "No go to http://www.azurair.com/services/online-registration");
	// }

?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "catalog",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_LIMIT" => "5",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array("",""),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION"
	)
);?><br>