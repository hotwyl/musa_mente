<?php
include_once("class.phpmailer.php");
include_once("smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->charSet = "UTF-8";
$mail->Host     = $host_email;
$mail->SMTPAuth = $autentica_email;
$mail->Username = $usuario_email;
$mail->Password = $senha_email;
$mail->From     = "noreply@econeteditora.com.br";
$mail->FromName = "Econet Editora";
$mail->AddAddress($dad['Email']);
$mail->AddBCC("jessica_caldeira@econeteditora.com.br");
$mail->IsHTML(true);
$mail->Subject = utf8_decode("[SOLUÇÕES] Nova reclamação pendente em Principal - Soluções");
$mail->Body    = utf8_decode("Nova reclamação do cliente " . $_SESSION['Cadastro_Usuario_Codigo'] . " pendente em Principal - Soluções - SUPORTE");
$mail->AltBody = "Desculpe, mas seu programa de email nao suporta mensagens em html";
$enviado = $mail->Send();
unset($mail);
