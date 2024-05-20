<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php 
        $nome = 'Klayton';
        $idade = 21;
        $nomedaclasse = 'box';
        echo 'Meu nome é '.$nome.' e tenho '.$idade.' anos';

        echo "<br>";

        echo "Meu nome é $nome ,e tenho $idade anos";

        echo "<br>";

        echo "<div class=\"$nomedaclasse\">Meu conteúdo da div</div> ";
    ?>
</body>
</html>