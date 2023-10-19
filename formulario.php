<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo 'Nome: '.$nome;
        echo '<br>';
        echo 'E-mail: '.$email;
        echo '<hr>';
    ?>
    <form>
        Nome: <input type="text" name="nome">
        <br>
        <br>
        E-mail: <input type="text" name="email">
        <br>
        <br>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>
