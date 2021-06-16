<?php
session_start();
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST,EXTR_OVERWRITE);

buscaPorNomeCliente($conexao,$nomeCliente);

header("Location: ../view/visu_cliente.php");

?>