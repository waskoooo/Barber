<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаване на данните от формата
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $date = htmlspecialchars($_POST['date']);
    
    // Имейл заглавие
    $subject = "Ново запитване за запазване на час";
    
    // Имейл съдържание
    $email_body = "Име: $name\n";
    $email_body .= "Имейл: $email\n";
    $email_body .= "Телефонен номер: $phone\n";
    $email_body .= "Съобщение: $message\n";
    $email_body .= "Дата: $date\n";
    
    // Имейл заглавия
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Имейл адрес за получаване на запитванията
    $to = "vasiltarashev@gmail.com"; // Заменете с вашия имейл адрес
    
    // Изпращане на имейл
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Запитването е изпратено успешно!";
    } else {
        echo "Възникна проблем при изпращането на запитването.";
    }
}
?>
