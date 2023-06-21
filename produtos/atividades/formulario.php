<?php
    require_once "../banco/conexao.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
<div class="container">
    <h1>Cadastro de produto</h1>
    <hr>

    <form action="<?=isset($produto) ? "atualizar.php" : "inserir.php"; ?>" method="post" 
    enctype="multipart/form-data">
        
        <input type="hidden" name="idproduto" value="<?php echo $produto->idproduto ?? "";?>"><br>

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $produto->nome ?? "";?>"><br>

        <label class="form-label">Preço</label><br>
        <input class="form-control" type="number" name="preco" value="<?php echo $produto->preco ?? "";?>"><br>

        <label class="form-label">Descrição</label><br>
        <textarea class="form-control" name="descricao"><?php echo $produto->descricao ?? "";?></textarea><br>

        <label class="form-label">Fabricante</label><br>
        <input class="form-control" type="text" name="fabricante" value="<?php echo $produto->fabricante ?? "";?>"><br>

        <button type="submit" class="btn btn-success">Inserir</button>
        
    </form>
</div>

<?php require_once "../template/rodape.php"; ?>