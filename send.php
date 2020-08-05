<?php
// Файлы phpmailer
require ‘class.phpmailer.php’;
require ‘class.smtp.php’;
// Переменные
$name = $_POST[‘name’];
$phone = $_POST[‘phone’];
$message = $_POST[‘message’];
// Настройки
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->Host = ‘smtp.mail.ru’; 
$mail->SMTPAuth = true; 
$mail->Username = ‘matveygrishaev2020’; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = ‘blackswiss1860mail’; // Ваш пароль
$mail->SMTPSecure = ‘ssl’; 
$mail->Port = 465;
$mail->setFrom(‘matveygrishaev2020@mail.ru’); // Ваш Email
$mail->addAddress(‘example@mail.ru’); // Email получателя
$mail->addAddress(‘example@gmail.com’); // Еще один email, если нужно.
// Письмо
$mail->isHTML(true); 
$mail->Subject = “Новое обращение BEST TOUR PLAN”; // Заголовок письма
$mail->Body = “Имя: $name . Телефон: $phone . Сообщение: $message”; // Текст письма
// Результат
if(!$mail->send()) {
 echo ‘Message could not be sent.’;
 echo ‘Mailer Error: ‘ . $mail->ErrorInfo;
} else {
 echo ‘ok’;
}
?>