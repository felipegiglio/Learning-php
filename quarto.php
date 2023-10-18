<?php
    $nome = 'lucelia';
    if($nome == 'felipe'){
        echo 'tudo certo';
    }else{
        sleep(5);
        //A função die serve para indicar ao php que finalize a interpretação do script.
        die('O script parou de funcionar');
    }