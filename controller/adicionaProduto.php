<?php
require_once("../model/bancoProduto.php");
require_once("../model/conexao.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirProduto($conexao,$fornecedor,$nomeRoupa,$marcaRoupa,$tamanhoRoupa,$corRoupa)){

    echo("<script> Alert('Dados Inseridos com sucesso') </script>");
    header("Location: ../view/form_cadproduto.php");
}else{
    echo("<script> Alert('Dados Não inseridos') </script>");
    header("Location: ../view/form_cadproduto.php");
}

?>