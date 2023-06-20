<?php 
  require "consultar_todos.php"; 
  require_once "../template/cabecalho.php";
?>
    <div class="container">

    <h1>Produtos</h1>
    <hr>
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
  </div>
    <table class="table" id="tabela_dados">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Fabricante</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto->nome ?></td>
                <td><?= $produto->preco ?></td>
                <td><?= $produto->descricao ?></td>
                <td><?= $produto->fabricante ?></td>
                <td class="text-end">
                  <a href="excluir.php?id=<?= $produto->idproduto ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> 
                  Excluir</a>
                  <a href="formulario.php?id=<?= $produto->idproduto ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> 
                  Atualizar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
    <?php require_once "../template/rodape.php"; ?>