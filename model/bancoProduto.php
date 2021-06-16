<?php

function inserirProduto($conexao,$codfornFK,$nmprod,$marcaprod,$tamprod,$corprod){
    $query = "Insert into tbproduto(codfornFK,nmprod,marcaprod,tamprod,corprod)values('{$codfornFK}','{$nmprod}','{$marcaprod}','{$tamprod}','{$corprod}')";
    $inserir = mysqli_query($conexao,$query);
    return $inserir;
}