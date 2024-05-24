<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe alternativa de php</title>
</head>
<body>
    <?php 
        $nome = 'klayton';
        if($nome == 'klayton'):
            echo 'verdade';
        endif;

        echo '<hr>';

        $c = 0;
        while($c < 10):
            $c++;
            echo 'oi';
            echo '<br>';
        endwhile;
    ?>
</body>
</html>