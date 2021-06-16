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

?>