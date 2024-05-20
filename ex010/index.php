<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php 
        $nome = 'Klayton';
        $nome1 = 'João';
        /*Apenas atribui um valor a uma variável */
        if($nome=$nome1){
            echo $nome;
        }

        echo '<br>';
        /*Compara se os valores são igauais */
        if($nome==$nome1){
            echo 'São iguais';
        }

        echo '<br>';
        /*Compara os valores para ver se são diferentes */
        if($nome!=$nome1){
            echo 'É diferente';
        }else{
            echo 'São iguais';
        }

        echo '<br>';

        $num = 10;
        $num1 = '10';
        /*Compara se os valores são idênticos (Tipos e valores) */
        if($num===$num1){
            echo 'Verdade';
        }else{
            echo 'Não são idênticos';
        }

        echo '<br>';

        //Compara se os valores são diferentes (Tipos e valores)
        if($num!==$num1){
            echo 'Verdade';
        }else{
            echo 'Falso';
        }




    ?> 
</body>
</html>