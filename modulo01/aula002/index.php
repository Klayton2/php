<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conhecendo variáveis</title>
</head>
<body>
    <?php 
        echo $_SERVER['DOCUMENT_ROOT'];
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';

    ?>
</body>
</html>