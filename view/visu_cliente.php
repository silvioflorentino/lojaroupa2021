<?php
session_start();
include_once("header.php");
//include_once("../model/conexao.php");
//include_once("../model/bancoCliente.php");
?>

<h1 class="text-center">Buscar Cliente por Nome</h1>

<form class="row g-3" action="visu_ClienteController.php" method="POST">
<div class="col-12" >
    <label class="form-label">Digite o nome do cliente para busca.</label>
    <input type="text" name="nomeCliente" required class="form-control"/>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Buscar</button>
  </div>

</form>

<?php

$dados = isset($_SESSION["dadosCliente"])?$_SESSION["dadosCliente"] : "";

?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Cliente</th>
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
      <th scope="col">CPF</th>
    </tr>
  </thead>
  <tbody>
      <?php
      //var_dump($dados);
      extract($_REQUEST,EXTR_OVERWRITE);

      $dados = buscaPorNomeCliente($conexao,$nomeCliente);

      foreach($dados as $clientes) :
      ?>
    <tr>
      <th scope="row"><?php echo($clientes["codcli"]);?></th>
      <td><?=$clientes["nomecli"]?></td>
      <td><?=$clientes["emailcli"]?></td>
      <td><?=$clientes["fonecli"]?></td>
      <td><?=$clientes["cpfcli"]?></td>
    </tr>
       <?php
       endforeach
       ?>
  </tbody>
</table>

<?php
include_once("footer.php");
?>