<?php
require_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST,EXTR_OVERWRITE);

$informacoes = buscaPorCodigoCliente($conexao,$codigo);
$clienteArray = mysqli_fetch_assoc($informacoes);
?>


<h1 class="text-center">Alterar dados do Cliente</h1>
<div class="formcad">
<form class="row g-3" method="POST" action="../controller/alteraClienteController.php">

<div class="col-3">
    <label for="codigocliente" class="form-label">Código do Cliente</label>
    <input type="text" readonly value="<?=$clienteArray['codcli']?>" name="codigoCliente" required class="form-control" id="codigocliente" placeholder="João Victor">
  </div>

<div class="col-12">
    <label for="nomecliente" class="form-label">Nome do Cliente</label>
    <input type="text" value="<?=$clienteArray['nomecli']?>" name="nomeCliente" required class="form-control" id="nomecliente" placeholder="João Victor">
  </div>

  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="<?=$clienteArray['emailcli']?>" name="emailCliente" required class="form-control" id="email" placeholder="joaovictor@etec.sp.gov.br">
  </div>

  <div class="col-md-4">
    <label for="fone" class="form-label">Fone</label>
    <input type="text" value="<?=$clienteArray['fonecli']?>" name="foneCliente" required class="form-control" id="fone" placeholder="(11) 90393-3837">
  </div>

  <div class="col-md-8">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" value="<?=$clienteArray['cpfcli']?>" name="cpfCliente" required class="form-control" id="cpf" placeholder="827.928.726-98">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</div>

<?php
require_once("footer.php");
?>