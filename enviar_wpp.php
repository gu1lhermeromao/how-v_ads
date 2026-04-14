<?php
// Verifica se a requisição veio através do envio de um formulário (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura os dados enviados pelo formulário usando a superglobal $_POST
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Define o número do WhatsApp de destino
    $telefone_destino = "554899266008";

    // Monta o texto que vai chegar no WhatsApp
    $texto = "Olá, meu nome é *" . $nome . "*.\n";
    $texto .= "Meu e-mail de contato é: " . $email . "\n\n";
    $texto .= "Mensagem:\n" . $mensagem;

    // Codifica o texto para o formato de URL
    $texto_codificado = urlencode($texto);

    // Monta o link final da API do WhatsApp
    $link_whatsapp = "https://wa.me/" . $telefone_destino . "?text=" . $texto_codificado;

    // Usa o PHP para redirecionar o usuário automaticamente para o link gerado
    header("Location: " . $link_whatsapp);
    
    // Encerra a execução do script
    exit();

} else {
    // Se alguém tentar acessar enviar_whatsapp.php direto pela URL, será redirecionado de volta para a página de contato
    header("Location: contato.php");
    exit();
}
?>