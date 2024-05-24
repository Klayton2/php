<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Strings</title>
</head>
<body>
    <?php 
        $conteudo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus error, architecto eaque omnis expedita aspernatur dignissimos, quae nam ex dolores sapiente quod officia molestiae nulla quo velit laboriosam enim.";

        //Serve para recortar uma string
        echo substr($conteudo,0,20);

        echo '<hr>';

        $nome = "Klayton Rodrigues de Sousa";

        $nomes = explode(' ',$nome);

        print_r($nomes);

        echo '<hr>';

        //Serve para juntar um array com um delimitador.
        //No caso o espaço
        $nomes = implode(' ',$nomes);

        echo $nomes;

        echo '<hr>';

        $c = '<h1>klayton</h1> outra coisa';

        //Serve para retirar todo código html
        echo strip_tags($c);

        echo '<hr>';

        //Serve para mostrar o código html na página 

        echo htmlentities('<div></div>');

    ?>
</body>
</html>