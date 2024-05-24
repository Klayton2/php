<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch,continue e break</title>
</head>
<body>
    <?php 
        $nome = "Klayton";
        switch($nome){
            case 'Klayton';
            echo "Minha variável é klayton";
            break;

            case 'João';
            echo "Minha variável é joão";
            break;
        }

        echo '<br>';
        //Break para o loop for, while, do, foreach e switch
        for($i = 0; $i < 10; $i++){
            echo $i;
            echo '<hr>';
            if($i == 5){
                break;
            }

        }

        echo '<br>';

        for($i = 0; $i < 10; $i++){
            
            if($i == 5)
                continue;
            echo $i;
            echo '<hr>';
        }

        
    ?>
</body>
</html>