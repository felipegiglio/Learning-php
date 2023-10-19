<?php
    $conteudo = '<h1>Felipe</h1>';
    //Retirar os codigos em html
    echo strip_tags($conteudo);
    echo '<br>';
    echo htmlentities($conteudo);
?>