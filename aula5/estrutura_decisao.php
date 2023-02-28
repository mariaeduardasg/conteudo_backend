<h2> Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar
    blocos distintos de código dado uma condição

    <strong>Exemplo</strong>
    <pre>
        if(condicao){
            //intruções executadas
            //caso a condição seja verdadeira 

        }else{
            //instruções executadas, caso 
            //a condição seja falsa.
        }
    </pre>
</p>

<?php
    $media = 7;

    if($media >= 6){
        echo "O aluno foi aprovado";
    }else{
        echo "O aluno foi reprovado";
    }
?>
---------------------
media >= 6      | aprovado
6 < media >= 3  | exame 
media < 3       | reprovado
<?php
    $media = 7;

    if($media >= 6){
        echo "O aluno foi aprovado";
    }else{
        echo "O aluno foi reprovado";
    }
?>