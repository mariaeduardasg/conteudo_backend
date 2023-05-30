<?php require "consultar_todos.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div class="container";>
    <h1>Usuários</h1>
    <hr>
    <a href="formulario.php" class="btn btn-success">
        Inserir Novo
</a>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($usuarios as $usuario): ?>
    <tr>
      <td><?= $usuario->nome ?></td>
      <td><?= $usuario->login ?></td>
      <td><img src="../uploads/<?= $usuario->foto ?>" height="25px"></td>
      <td>
        <a href="excluir.php?id=<?=$usuario->idusuario ?>" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i>
        Excluir</a>
        <a href="formulario.php?id=<?=$usuario->idusuario ?>" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square"></i>
        Atualizar</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

</div>
<?php require_once "../template/rodape.php";?>