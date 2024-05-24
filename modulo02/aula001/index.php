<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forearch e for para Arrays</title>
</head>
<body>
    <?php 
        $arr = array("Klayton","João","Mário","Pedro");

        foreach ($arr as $key => $value) {
            echo $key;
            echo '=>';
            echo $value;
            echo '<hr>';
        }

        echo '<br>';
        
        $total = count($arr);

        for($i = 0; $i <$total; $i++){
            echo $arr[$i];
            echo '<br>';
        }
    ?>
</body>
</html>