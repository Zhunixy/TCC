<?php
// Verifica se a sessão não foi iniciada e a inicia se necessário
if(!isset($_SESSION)) {
    session_start();
}

// Verifica se a variável de sessão 'id' não está definida, indicando que o usuário não está logado
if(!isset($_SESSION['id'])) {
    // Encerra a execução do script e exibe uma mensagem informando que o usuário não está logado
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>
