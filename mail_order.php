<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$product = htmlspecialchars($_POST["name_server"]);
$firstname = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$telephone = htmlspecialchars($_POST["phone"]);

/* Устанавливаем e-mail адресата */
$myemail = 'zpc@zemprogeo.com.ua';
$subject= 'Замовлення послуги з сайту ЗПК';
$from = 'zpc@zemprogeo.com.ua';
/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */

$product = ($_POST["name_server"]);
$telephone = $_POST["phone"];
$firstname = $_POST["name"];
$email = $_POST["email"];

/* Проверяем правильно ли записан e-mail */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
// show_error("<br /> Е-mail адрес не существует");
// }
/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = '


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
</head>
<body style="margin: 0; padding: 0;"><div class="email-container" style="font-family: sans-serif; font-size: 14px; color: #666;">

<div class="email-header" style="color: #fff; background: url(https://zemprogeo.com.ua/wp-content/themes/zpcthemes/img/header-bg.jpg) top left / cover ;width: 100%;display: inline-block;"> <div class="email-center" style="max-width: 600px; text-align: center; margin: auto; padding: 20px;" align="center">
<div class="email-header-topline">
<a href="https://zemprogeo.com.ua/" alt="ЗПК-ЗемПроКонсалтинг"" class="email-logo" style="float: left;"><img src="https://zemprogeo.com.ua/wp-content/uploads/2017/12/logo.png" alt="ЗПК-ЗемПроКонсалтинг"></a>
<div class="email-cocial-wrap" style="float: right; text-align:left;">
</div>
</div>
<div class="email-header-top" style="padding-top: 80px; text-align: center; font-size: 24px; text-transform: uppercase; font-weight: bold; line-height: 34px; clear: both;" align="center">Вам прийшов лист з сайту<br><a style="color:#dfdfdf;text-decoration: none;" href="https://zemprogeo.com.ua/" alt="ЗПК-ЗемПроКонсалтинг"/">ЗПК-ЗемПроКонсалтинг</a></div>
</div>
</div>
<div class="email-content" >
<div class="email-center" style="max-width: 600px;min-height: 337px; margin: auto; padding: 20px;" >

<div class="email-content" style="font-size: 16px;">
<div class="name" style="padding:5px; border-bottom: 1px dotted #ccc;">
<span style="display: inline-block; width:150px; color:#000;">Назва послуги:</span><span style="margin-left:40px ;">'.$product.'</span>
</div>

<div class="email-content" style="font-size: 16px;">
<div class="name" style="padding:5px; border-bottom: 1px dotted #ccc;">
<span style="display: inline-block; width:150px; color:#000;">Імя заказчика:</span><span style="margin-left:40px ;">'.$firstname.'</span>
</div>

<div class="E-mail" style="padding:5px; border-bottom: 1px dotted #ccc;">
<span style="display: inline-block; width:150px; color:#000;">E-mail: </span><span style="margin-left:40px">'.$email.'</span>
</div>
<div class="phone" style="padding:5px; border-bottom: 1px dotted #ccc;">
<span style="display: inline-block; width:150px; color:#000;">Телефон: </span><span style="margin-left:40px">'.$telephone.'</span>
</div>
</div>
</div></div>
<div class="email-footer" style="text-align: center; color: #a1a1a1; font-size: 12px; background: #ECECEC; padding: 20px;" align="center">
© 2017 ЗПК-ЗемПроКонсалтинг
</div>
</div></body>
</html>


';

$headers  = 'From: zpc@zemprogeo.com.ua '."\r\n".'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
mail($myemail,$subject, $message_to_myemail, $headers);
sleep(5);

?>
