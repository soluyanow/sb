<?php
require ($_SERVER ['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/mainpage.php");
require ($_SERVER ["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
 

$phone = $_REQUEST ["phoone"];
$name = $_REQUEST ["naame"];

if ((!$phone) || (!$name) ) {
	
	$send = false;
	echo "<p class=\"error\">Номер телефона и/или имя не введены.</p>";

} else {
    $send = true;
    $emailForOrder  = 'admin@skladbyta.ru';
	$validmail = 'admin@skladbyta.ru';

    $mess= "Имя: {$_REQUEST ["naame"]}\r\nТелефон: {$_REQUEST ["phoone"]}\r\n\r\n--------------------------------\r\nДанные об отправителе:\r\nIP: {$_SERVER['REMOTE_ADDR']}\r\n--------------------------------";

    $subject = "=?utf-8?b?" . base64_encode("Перезвонить потенциальному покупателю") . "?=";  
    $headers  = "From: {$validmail}\r\n"
    . "Content-Type: text/plain; charset=utf-8 \r\n"
    . "MIME-Version: 1.0\r\n"
    . "Content-Transfer-Encoding: 8bit \r\n";

    mail($emailForOrder, $subject,$mess, $headers);
    }

?>

<?if($send){
	echo "<p class=\"success\">Спасибо. Ваша заявка принята. Ожидайте нашего звонка.</p>";
}?>