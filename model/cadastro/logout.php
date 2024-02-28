<?php
// Verifica se a sessão não foi iniciada e a inicia se necessário
if (!isset($_SESSION)) {
    session_start();
}

// Destroi a sessão atual, removendo todas as variáveis de sessão
session_destroy();

// Redireciona o usuário para a página de login (index.php) após destruir a sessão
header("Location: index.php");
?>
