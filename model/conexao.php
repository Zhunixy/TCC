<?php

$usuario = 'root';
$senha = '';
$database = 'tcc';
$host = 'localhost';

$conexao = new mysqli($usuario,$senha,$database,$host);

if($conexao -> connect_error){
    die("Falha ao conectar ao banco de dados" . $conexao -> connect_error);
}