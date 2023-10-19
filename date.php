<?php
    //Trabalhando com datas
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/y | h:i:s',time()+(60*10));
    echo $data;
?>