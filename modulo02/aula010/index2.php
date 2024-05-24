<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index2</title>
</head>
<body>
    <?php 
        session_start();
        echo $_SESSION['nome'];
        echo $_SESSION['idade'];
        session_destroy();
    ?>
</body>
</html>