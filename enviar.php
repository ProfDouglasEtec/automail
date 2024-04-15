<?php
// Variáveis do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Seu endereço de e-mail (onde você receberá o e-mail de contato)
$seu_email = "seu_email@example.com";

// Assunto do e-mail de contato
$assunto = "Resposta automática - Seu site";

// Mensagem de resposta automática
$resposta = "Olá $nome,\n\nObrigado por entrar em contato conosco! Recebemos sua mensagem e responderemos o mais rápido possível.\n\nAtenciosamente,\nSua empresa";

// Cabeçalhos do e-mail
$headers = "From: $seu_email" . "\r\n" .
           "Reply-To: $seu_email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Envia a resposta automática para o remetente
mail($email, $assunto, $resposta, $headers);

// Agora, você pode enviar o e-mail para si mesmo ou fazer qualquer outra coisa com os dados recebidos
// Por exemplo:
// mail($seu_email, "Novo contato do site", "Nome: $nome\nE-mail: $email\nMensagem: $mensagem", $headers);

// Exibe uma mensagem de sucesso para o usuário
echo "Obrigado por entrar em contato! Uma resposta automática foi enviada para o seu e-mail.";
?>
