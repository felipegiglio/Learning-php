<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com Formulario</title>
</head>
<body>
    <?php
    if(isset($_POST['acao'])){
        echo $_POST['numero1'] + $_POST['numero2'];
    }
    // isset verifica se a variavel e verdadeira ou falsa
    ?>
    <form action="" method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>