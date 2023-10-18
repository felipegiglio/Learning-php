<?php
    //Condições
    $variavel = 'Felipe';
    $variavel1 = 'Felipe';

    if($variavel == $variavel1){
        echo '<div style="width:300px; height:300px; background:red;"></div>';
    }else{
        echo 'A condição não bate';
    }
    //Um sinal igual quer dizeer que estamos atribuindo um valor
    //penas confere se o valor eh igual
    if($variavel != $variavel1){
        echo '<div style="width:300px; height:300px; background:red;"></div>';
    }else{
        echo 'A condição e diferente';
    }
?>
