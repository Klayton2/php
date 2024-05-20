<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
</head>
<body>
    <?php 
        $v1 = "Klayton";
        $v2 = "Klayton";

        if($v1 == $v2){
            echo '<div style="width:300px;heigth:300px;background: blue;">Klayton</div>';
        }else {
            echo 'A condição não bate';
        }

        echo "<br>";
        
        $var = 10 + 5;
        $var1 = '10 + 5';

        if($var==$var1){
            echo 'Verdade';
        }elseif($var!=$var1){
            echo 'Verdade (elseif)';
        }else{
            echo 'Falso';
        }
    ?>
</body>
</html>