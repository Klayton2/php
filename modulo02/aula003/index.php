<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die e Sleep</title>
</head>
<body>
    <?php 

        //Durma o código por x segundos
        sleep(3);
        echo 'um';
        echo '<br>';

        sleep(3);
        echo 'dois';
        echo '<br>';

        sleep(3);
        echo 'tres';
        echo '<br>';

        $nome = 'joao';

        if($nome == 'klayton'){
            echo 'deu certo';
        }else{
            die('O script parou de ser executado');
        }

    ?>
</body>
</html>