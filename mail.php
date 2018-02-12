<?php

$recepient = "youmail@ya.ru";
$sitename = "Название сайта";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$text = trim($_GET["text"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");







<?php
if(!empty($_POST['send'])) {
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
    $tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    $message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
    $theme = substr(htmlspecialchars(trim($_POST['theme'])), 0, 3000);
    $ref = substr(htmlspecialchars(trim($_POST['ref'])), 0, 3000);  
    $ip = $_SERVER['REMOTE_ADDR'];
  
    $mess  = "<b>Имя: </b>".$name."<br>";
    $mess .= "<b>Телефон: </b>".$tel."<br>";
    $mess .= "<b>Тема: </b>".$theme."<br>";
    $mess .= "<b>Сообщение: </b>".$message."<br>";  
    $mess .= "<b>С какого сайта: Муж на Час <b>".$ref."<br>";
    $theme1 = "Заявка с сайта Муж на час";
 
    mail("orlov.mickey@yandex.ru", $theme1, $mess, "From: Муж-на-Час <no-reply@remont.ru>\nContent-Type: text/html;\n charset=utf-8\nX-Priority: 0");
    echo "<div class=\"pupup__tit\">Успешно!</div>";
    echo "<div class=\"pupup__tit1 al-center\">Спасибо за обращение.</div>";
}
else {  
    echo "<div class=\"pupup__tit\">Ошибка!</div>";
    echo "<div class=\"pupup__tit1 al-center\">Попробуйте еще раз.</div>";
}
?>
<!--hardcoredreva@yandex.ru-->



<?php
//Формируем письмо. Эту часть кода вставить в любое место между body
if(isset($name,$phone,$text)) {
  $subject = "Форма обратной связи"; //тема сообщения
  $message = "Имя: ".$name."<br>Телефон: ".$phone."<br>Текст: ".$text."<br>"; //содержание сообщение
  $emailto = "emailto@mail.ru"; //e-mail кому
  $emailfrom = "emailfrom@mail.ru"; //e-mail от кого
  $chek = mail($emailto, $subject, $message, "Content-type:text/html; Charset=utf-8\r\nFrom:".$emailfrom."\r\n"); //отправляем сообщение
  if($chek) echo "Ваше письмо успешно отправлено!";
  else echo "Ваше письмо не отправлено!";
}
else {
  echo "Вы заполнили не все поля!";
}
?>


<?php
if(!empty($_POST['send'])) {
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
    $tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    $message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
    $theme = substr(htmlspecialchars(trim($_POST['theme'])), 0, 3000);
    $ref = substr(htmlspecialchars(trim($_POST['ref'])), 0, 3000);  
    $ip = $_SERVER['REMOTE_ADDR'];
  
    $mess  = "<b>Имя: </b>".$name."<br>";
    $mess .= "<b>Телефон: </b>".$tel."<br>";
    $mess .= "<b>Тема: </b>".$theme."<br>";
    $mess .= "<b>Сообщение: </b>".$message."<br>";  
    $mess .= "<b>С какого сайта: Муж на Час <b>".$ref."<br>";
    $theme1 = "Заявка с сайта Муж на час";
 
    mail("orlov.mickey@yandex.ru", $theme1, $mess, "From: Муж-на-Час <no-reply@remont.ru>\nContent-Type: text/html;\n charset=utf-8\nX-Priority: 3");
    echo "<div class=\"pupup__tit\">Успешно!</div>";
    echo "<div class=\"pupup__tit1 al-center\">Спасибо за обращение.</div>";
}
else {  
    echo "<div class=\"pupup__tit\">Ошибка!</div>";
    echo "<div class=\"pupup__tit1 al-center\">Попробуйте еще раз.</div>";
}
?>
<!--hardcoredreva@yandex.ru-->