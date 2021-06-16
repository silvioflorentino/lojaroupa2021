<?php
require_once("../model/conexao.php");
require_once("../model/bancoCliente.php");

extract($_REQUEST,EXTR_OVERWRITE);

//var_dump($foneCliente);
if(inserirCliente($conexao,$nomeCliente,$emailCliente,$foneCliente,$cpfCliente)){
echo("As informações do cliente foram salvas");
}else{
echo("Alerta!!! As informações do cliente Não foram salvas");
}

?>