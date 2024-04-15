<?php
// Inclua o arquivo da classe PHPMailer
//require 'caminho_para_phpmailer/PHPMailerAutoload.php';

// Variáveis do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Configurações do servidor SMTP
$smtp_host = 'smtp.gmail.com'; // Endereço do servidor SMTP
$smtp_port = 587; // Porta do servidor SMTP
$smtp_usuario = 'profphpdoug@gmail.com'; // Seu endereço de e-mail
$smtp_senha = 'master45g'; // Sua senha de e-mail
$smtp_seguranca = 'tls'; // Tipo de segurança (tls ou ssl)

// Criar uma nova instância do PHPMailer
$mail = new PHPMailer;

// Configuração do servidor SMTP
$mail->isSMTP();
$mail->Host = $smtp_host;
$mail->Port = $smtp_port;
$mail->SMTPSecure = $smtp_seguranca;
$mail->SMTPAuth = true;
$mail->Username = $smtp_usuario;
$mail->Password = $smtp_senha;

// Remetente e destinatário
$mail->setFrom($smtp_usuario, 'Seu Nome'); // Remetente
$mail->addAddress($email, $nome); // Destinatário

// Assunto e corpo do e-mail
$mail->Subject = 'Resposta automática - Seu site';
$mail->Body = "Olá $nome,\n\nObrigado por entrar em contato conosco! Recebemos sua mensagem e responderemos o mais rápido possível.\n\nAtenciosamente,\nSua empresa";

// Enviar e-mail
if(!$mail->send()) {
    echo 'Erro ao enviar mensagem: ' . $mail->ErrorInfo;
} else {
    echo 'Obrigado por entrar em contato! Uma resposta automática foi enviada para o seu e-mail.';
}
?>
