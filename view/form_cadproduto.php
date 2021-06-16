<?php
require_once("header.php");
require_once("../model/conexao.php");
require_once("../model/bancoFornecedor.php");

$fornecedor = buscaTudoFornecedor($conexao);
?>

<h1 class="text-center">Cadastro de Produto</h1>
<div class="formcad">
    <form class="row g-3" method="GET" action="../controller/adicionaProduto.php">

        <div class="col-6">
            <label for="nomeRoupa" class="form-label">Roupa</label>
            <input type="text" name="nomeRoupa" required class="form-control" id="nomeRoupa" placeholder="..">
        </div>

        <div class="col-6">
        <label for="fornecedor" class="form-label">Fornecedor</label>
            <select id="fornecedor" name="fornecedor" class="form-select" aria-label="Default select example">
                <option selected>Escolha um dos Fornecedores</option>
<?php
foreach($fornecedor as $fornecedores) :
?>         
<option value="<?=$fornecedores['codforn']?>"> <?=$fornecedores['nomeforn']?></option>
<?php
endforeach;
?>
            </select>          
       </div>

        <div class="col-md-4">
        <label for="marcaRoupa" class="form-label">Marca</label>
            <input type="text" id="marcaRoupa" name="marcaRoupa" required class="form-control" placeholder="..">
     
       </div>

       <div class="col-md-4">
        <label for="tamanhoRoupa" class="form-label">Tamanho</label>
            <select id="tamanhoRoupa" name="tamanhoRoupa" class="form-select" aria-label="Default select example">
                <option selected>Escolha um dos tamanhos</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
            </select>          
       </div>

       <div class="col-md-4">
        <label for="corRoupa" class="form-label">Cor</label>
            <select class="form-select" id="corRoupa" name="corRoupa" aria-label="Default select example">
                <option selected>Escolha uma das Cores</option>
                <option value="Amarelo">Amarelo</option>
                <option value="Verde">Verde</option>
                <option value="Branco">Branco</option>
                <option value="Preto">Preto</option>
                <option value="Azul">Azul</option>
                <option value="Rosa">Rosa</option>
                <option value="Vermelho">Vermelho</option>
            </select>          
       </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </form>
</div>

<?php
require_once("footer.php");
?>