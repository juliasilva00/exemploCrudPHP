<?php


$user = 'root';
$host = 'localhost';
$senha = '';
$db = 'lanchonete';

$conexao = new mysqli($host, $user, $senha, $db);


if($conexao ->connect_errno){
    die("Erro: $conexao ->connect_errno");
} else {
    echo "Conexão ok";
}
