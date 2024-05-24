<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensionais</title>
</head>
<body>
    <?php
        //Array single 
        $arr = ['Klayton','joao'];

        $arr = array('Klayton','chave2'=>'joao');

        $arr[0] = 'Klayton';
        $arr[] = 'joao';

        //Arrays Multidimensionais
        $arr2 = array(array('Klayton','joao'),array(21,15));
       
        echo $arr2[0][0];
        echo '<br>';
        echo $arr2[1][0];
    ?>
</body>
</html>