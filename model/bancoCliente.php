<?php
function inserirCliente($conexao,$nomeCliente,$emailCliente,$foneCliente,$cpfCliente){
    $query = "insert into tbcliente(nomecli,emailcli,fonecli,cpfcli)values('{$nomeCliente}','{$emailCliente}','{$foneCliente}','{$cpfCliente}')";
   
    return mysqli_query($conexao, $query);
}

function buscaPorNomeCliente($conexao,$nomeCliente){
    $query = "Select * from tbcliente where nomecli LIKE '%{$nomeCliente}%'";
    $result = mysqli_query($conexao,$query);
    //$dados = mysqli_fetch_assoc($result);
   // $_SESSION["dadosCliente"]=$result;
    return  $result;
}
function buscaPorCodigoCliente($conexao,$codigoCliente){
    $query = "Select * from tbcliente where codcli = '{$codigoCliente}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function alterarCliente($conexao,$codigoCliente,$nomeCliente,$emailCliente,$foneCliente,$cpfCliente){
    $query = "update tbcliente set nomecli='{$nomeCliente}', emailcli='{$emailCliente}',fonecli='{$foneCliente}', cpfcli='{$cpfCliente}' where codcli = '{$codigoCliente}'";

    $result = mysqli_query($conexao,$query);
    return $result;
}

function deletarCliente($conexao, $codigoCliente){
    $query = "delete from tbcliente where codcli = '{$codigoCliente}'";
    $result = mysqli_query($conexao, $query);

    return $result;
}
?>