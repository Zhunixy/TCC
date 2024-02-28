<?php

$usuario = 'root';
$psenha = '';
$database = 'TCC';
$host = 'localhost';

$conexao = new mysqli($user,$password,$database,$host);

if($conexao -> connect_error){
    die("Falha ao conectar ao banco de dados" . $conexao -> connect_error);
}