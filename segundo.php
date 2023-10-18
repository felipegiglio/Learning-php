<?php
    //Array Single
    $arr = array('felipe','lucleia');
    echo 'Array Single: '. $arr[0];
    echo '<br>';
    
    //Array Multidimensional
    $arr2[0] = array(array('chave'=>'felipe','lucelia'),array(23,45));
    echo 'Array Multidimensional: '.$arr2['chave'][1];
?>