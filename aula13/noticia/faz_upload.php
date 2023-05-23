<?php 

if(!empty($_FILES['foto']['name'])){
//local temporário onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tmp_name'];

//Cria um novo nome único para a foto
$nome_foto = time().$_FILES['foto']['name'];

//Local para onde o arquivo upload vai ser movido
$destino = "../uploads/$nome_foto";

//Move o arquivo de upload para destino
move_uploaded_file($origem, $destino);
} else{
    $nome_foto = "sem_foto.png";
}



