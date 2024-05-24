<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Arrays</title>
</head>
<body>
    <?php 

        //Serve para unir arrays
        $array1 = array("cor" => "vermelho", 2, 4);
        $array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
        $r = array_merge($array1, $array2);
        print_r($r);

        echo '<hr>';

        //Serve para reotrnar valores com a mesma chave em um ou mais arrays
        $array1 = array("cor" => "vermelho", 2, 4);
        $array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
        print_r(array_intersect_key($array1, $array2));

        echo '<hr>';

        //Serve para aplicar uma função em todos os elementos do array
        $arr = array('<p>klayton</p>', 'joão' ,'<h1>Fabricio</h1>');
        print_r(array_map('strip_tags', $arr));


    ?>
</body>
</html>