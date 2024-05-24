<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Include e Date</title>
</head>
<body>
    <?php 
        //Trabalhando com datas

        date_default_timezone_set('America/Sao_Paulo');

        $data = date('d/m/Y H:i:s',time());

        echo $data;

        echo '<hr>';

        $titulo = 'Titulo do meu site';

        include('header.php');
    ?>

    <h1>Meu conteudo</h1>

    <?php 
        include('footer.php');
    ?>
</body>
</html>