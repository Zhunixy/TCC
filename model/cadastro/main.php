<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo(a) Ao Cadastro!</title>
</head>
<body>

<?php
    include('./model/conexao.php');

?>

    <form action="cadastro.php" method="post">
        <label>Nome De Usuário!:</label>
        <input type="text" name="nome_usuario"> <br>
        <label>Email!:</label>
        <input type="text" name="email_usuario"> <br>
        <label>Senha!:<label>
        <input type="password" name="senha_usuario"> <br>
        <input type="submit" value="Cadastrar"> <br>
    </form>
    
</body>
</html>