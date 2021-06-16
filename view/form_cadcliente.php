<?php
require_once("header.php");
?>

<h1 class="text-center">Cadastro de Cliente</h1>
<div class="formcad">
<form class="row g-3" method="GET" action="../controller/adicionaCliente.php">

<div class="col-12">
    <label for="nomecliente" class="form-label">Nome do Cliente</label>
    <input type="text" name="nomeCliente" required class="form-control" id="nomecliente" placeholder="João Victor">
  </div>

  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="emailCliente" required class="form-control" id="email" placeholder="joaovictor@etec.sp.gov.br">
  </div>

  <div class="col-md-4">
    <label for="fone" class="form-label">Fone</label>
    <input type="text" name="foneCliente" required class="form-control" id="fone" placeholder="(11) 90393-3837">
  </div>

  <div class="col-md-8">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" name="cpfCliente" required class="form-control" id="cpf" placeholder="827.928.726-98">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Gravar</button>
  </div>
</form>
</div>

<?php
require_once("footer.php");
?>