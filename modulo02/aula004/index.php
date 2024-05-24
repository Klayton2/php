<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <?php 
        function mostrarNome($nome,$idade){
            echo '<h2>Nome e: </h2>'.$nome;
            echo " Idade: $idade";
        }

        mostrarNome('Klayton',21);

        echo '<hr>';

        function retornarString(){
            return 'Klayton';
        }

        echo retornarString();
    ?>
</body>
</html>