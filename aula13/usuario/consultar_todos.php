<?php
   
   //importa o arquivo de conexão
   require_once "conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `usuario`";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultados
   $resultados = $comando->get_result();
   
   //pega a primeira linha de resultado da consulta
   $ususarios = [];
   while ($ususario = $resultados->fetch_object()){
   $usuario = $resultados->fetch_object();

   }

   var_dump($usuarios);





