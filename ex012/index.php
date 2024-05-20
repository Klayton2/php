<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php 
        for($cont=0;$cont<10;$cont++){
            echo 'Olá, mundo !';
            echo '<hr>';
        }

        echo '<br>';
        
        $c = 0;
        while($c < 10){
            echo 'Alô,mundo!';
            echo '<hr>';
            $c++;
        }
        
        echo '<br>';

        $contador = 0;
        do{
            echo 'Oi,mundo';
            echo '<hr>';
            $contador++;
        }while($contador<=10)
        
    ?>
</body>
</html>