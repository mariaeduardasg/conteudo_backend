<?php 
require "consultar_todos.php";
require_once "../template/cabecalho.php";
require_once "../template/menu_restrito.php";
?>
    <div class="container";>
    <h1>Notícia</h1>
    <hr>
    <a href="formulario.php" class="btn btn-success">
        Inserir Novo
</a>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Categoria</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($noticias as $noticia): ?>
    <tr>
      <td><?= $noticia->titulo ?></td>
      <td><?= $noticia->categoria ?></td>
      <td><img src="../uploads/<?= $noticia->foto ?>" height="25px"></td>
      <td>
        <a href="excluir.php?id=<?=$noticia->idnoticia ?>" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i>
        Excluir</a>
        <a href="formulario.php?id=<?=$noticia->idnoticia ?>" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square"></i>
        Atualizar</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

</div>

  <?php require_once "../template/rodape.php";?>