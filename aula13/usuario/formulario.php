<?php
    require_once "../banco/conexao.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>

<div class="container">
    <h1>Cadastro de usuário</h1>
    
    <hr>
    
    <form action="<?php echo isset($usuario) ? "atualizar.php" : "inserir.php"; ?>"
    method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario  ?? "" ;?>"><br>
        
    <label>Nome</label><br>
        <input type="text" class="form-control" name="nome" value="<?php echo $usuario->nome  ?? "" ;?>"><br>

        <label class="form-label">Login</label><br>
        <input type="text" class="form-control" name="login" value="<?php echo $usuario->login ?? "" ;?>"><br>

        <label class="form-label">Senha</label><br>
        <input type="password" class="form-control" name="senha" ><br>

        <label class="form-label">Foto</label><br>
        <input type="file" class="form-control" name="foto" ><br>

        <button type="submit" class="btn btn-success">Inserir</button>
        
    </form>

</div>
<?php require_once "../template/rodape.php";?>