<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$mensagem = $_GET['mensagem'];


$mail = new PHPMailer(true);

try {
    // Configurações do servidor 
    $mail->isSMTP();
    //$mail->SMTPDebug = 2;
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'armando2019ti@gmail.com';
    $mail->Password   = 'C amisa10';
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->CharSet = "UTF-8";

    // Destinatários
    $mail->setFrom('armando2019ti@gmail.com', 'Armando Pereira'); //Mandar
    $mail->addAddress($email, 'Destinatario'); // Receber

    // Configuração da Mensagem
    $mail->isHTML(true);
    $mail->Subject = 'Enviando E-mail com PHPMailer'; //Assunto
    $mail->Body    = "Olá, $nome <br>".$mensagem; //Mensagem

    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "O E-mail não pôde ser enviado. <br> Erro do Mailer: {$mail->ErrorInfo}";
}
?>
<!-- Voltar para home -->
<meta http-equiv="refresh" content="1; URL='http://localhost/Armando/EscalaWeb/index.php'"/>