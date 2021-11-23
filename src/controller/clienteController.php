<?php
require "../model/conexao.php";
require "../model/cliente.php";


$objCliente = new Cliente(); //instancia da classe

$dados = $objCliente->listarTodos($conexao);
