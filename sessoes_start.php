<?php
    // diferença entre session e cookies 
    //session e ate fechar o navegador
    //cookies e ate o progrmador quiser
    session_start();
    echo $_SESSION['nome'] = 'felipe';
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'] = 'felipe';
        echo 'Verdadeiro';
    }else{
        echo 'falso';
    }
?>