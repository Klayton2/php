<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários, GET e POST</title>
</head>
<body>

    <form method="post">
        <input type="text" name="nome"/>
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar"/>
        <br>
        <br>
        <br>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar">

    </form>
    <?php 
        if(isset($_POST['acao'])){
            $nome = @$_POST['nome'];
            $email = @$_POST['email'];
        
        echo $nome;
        echo '<hr>';
        echo $email;
        }

        echo '<hr>';

        if(isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $value) {
                
            
                echo $key;
                echo '=>';
                echo $value;
                echo '<br>';
            }
        }


    ?>
</body>
</html>