<?php
    include('primeiro.php');
    include('class.php');
    $exemplo = new Exemplo();
    $exemplo -> comer();
    echo $exemplo -> nome;
    echo Exemplo::$nome2 = 'Felipe e Lucelia <hr>';
?>