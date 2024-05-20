<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores matemáticos</title>
</head>
<body>
    <?php
        $num = 5;
        $num1 = 6;

        if($num>$num1){
            echo 'Maior';
        }else{
            echo 'Menor';
        }

        echo '<br>';

        if($num >= $num1){
            echo 'Maior';
        }else{
            echo 'Menor';
        }

        echo '<br>';

        if($num<$num1){
            echo 'Maior';
        }else{
            echo 'Menor';
        }

        echo '<br>';

        if($num <= $num1){
            echo 'Maior';
        }else{
            echo 'Menor';
        }

        echo '<br>';

        $var1 = 'valor1';
        $var2 = 'valor2';
        $var3 = 'valor3';
        
        if(($var1==$var2) && ($var2==$var3)){
            echo 'verdade';
        }else{
            echo 'falso';
        }

        echo '<br>';

        if(($var1!=$var2)||($var1==$var3)){
            echo 'Verdade';
        }else{
            echo 'Falso';
        }



    ?>
</body>
</html>