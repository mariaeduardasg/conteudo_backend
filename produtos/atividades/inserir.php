<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['descricao']) && isset($_POST['fabricante'])){

   $nome = $_POST['nome'];
   $preco = $_POST['preco'];
   $descricao = $_POST['descricao'];
   $fabricante = $_POST['fabricante'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `produto` (`nome`, `preco`, `descricao`, `fabricante`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sdss", $nome, $preco, $descricao, $fabricante);

   //executa o comando
   $comando->execute();

   }

   //volta para o formulário
   header("Location: index.php");

   







