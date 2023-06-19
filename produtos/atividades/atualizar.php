<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idproduto'];
   $nome = $_POST['nome'];
   $preco = $_POST['preco'];
   $descricao = $_POST['descricao'];
   $fabricante = $_POST['fabricante'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `produto` SET `nome`= ?, `preco`= ?, `descricao`= ?, `fabricante`= ? WHERE  `idproduto`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sdssi", $nome, $preco, $descricao, $fabricante, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







