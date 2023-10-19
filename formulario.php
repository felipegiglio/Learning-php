<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Diferença entre o post e o get  -->
    <!-- o get passa informações pela url -->
    <!-- o post passa informações pela url -->
    <?php
    if(isset($_GET['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        echo 'Nome: '.$nome;
        echo '<br>';
        echo 'E-mail: '.$email;
        echo '<hr>';
    }
    ?>
    <form method="post">
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
