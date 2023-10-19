<?php
    $var = 'felipe';
    echo $var;
    echo '<br>';
    echo '<hr>';

    function mostarnome($nome,$idade){
        echo 'felipe - '.$idade,' | '.$nome;
        echo '<br>';
    }

    mostarnome('lucelia',25);

    function mostarpalavra(){
        return 'A palavra retornada é: felipe';
    }

    echo mostarpalavra();