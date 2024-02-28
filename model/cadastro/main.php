<?php
// Inclui o arquivo de conexão ao banco de dados
include('conexao.php');

// Verifica se os campos 'email' ou 'senha' foram enviados através do formulário
if(isset($_POST['email']) || isset($_POST['senha'])) {

    // Verifica se o campo 'email' está vazio
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } 
    // Verifica se o campo 'senha' está vazio
    else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } 
    // Se ambos os campos estiverem preenchidos
    else {

        // Escapa caracteres especiais para prevenir injeção de SQL
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Monta a consulta SQL para buscar um usuário com o email e senha fornecidos
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        
        // Executa a consulta SQL no banco de dados
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ");

        // Obtém a quantidade de linhas (usuários) retornados pela consulta
        $quantidade = $sql_query->num_rows;

        // Se foi encontrado exatamente um usuário com o email e senha fornecidos
        if($quantidade == 1) {
            
            // Obtém os dados do usuário como um array associativo
            $usuario = $sql_query->fetch_assoc();

            // Inicia a sessão se não estiver iniciada
            if(!isset($_SESSION)) {
                session_start();
            }

            // Armazena informações do usuário na sessão
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            // Redireciona para a página do painel após o login bem-sucedido
            header("Location: painel.php");

        } else {
            // Se nenhum usuário foi encontrado com o email e senha fornecidos
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>