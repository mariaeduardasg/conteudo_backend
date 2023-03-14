<h2>Vetor indexado por texto</h2>
<pre>
    Os vetores podem usar textos para 
    indexar (identificar) os valores armazenados.
    exemplo:

          +----------+
    nome  |ivan      |
          +--------+
    nota1 |9       |
          +---------+
    nota2 |7        |
          +----------+
</pre>

<?php

$alunos = [
    "nome"  => "ivan",
    "nota1" => 9,
    "nota2" => 7
];

$alunos["notatotal"] = ($alunos["nota1"] + $alunos["nota2"]);
var_dump($alunos);

echo "<p>8nbsp;</p><pre>";
//imprimir todos os valores de um vetor
//utilizando o foreach
foreach($alunos as $key => $value){
    printf("%23s\n", "+----------+" );
    printf("%9s | %9s \n", $key |$value);

}

?>
</pre>