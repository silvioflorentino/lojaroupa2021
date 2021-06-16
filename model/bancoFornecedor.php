<?php

function buscaTudoFornecedor($conexao){
    $query = "Select * from tbfornecedor";
    $resul = mysqli_query($conexao,$query);

    return $resul;
}

