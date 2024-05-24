<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seções e cookies</title>
</head>
<body>
    <?php 
        session_start();
         // $_SESSION['nome'] = 'klayton';
         //$_SESSION['idade'] = '21';

         setcookie('nome', 'klayton', time() - (60*60*24), '/');

         echo $_COOKIE['nome'];




    ?>
</body>
</html>