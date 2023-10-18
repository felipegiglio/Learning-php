<?php
$var = array('felipe', 'lucelia');
    echo $var[0];
    echo '<br>';

// //i did not understend
// foreach($var as $key => $value){
//     echo $key;
//     echo '=>';
// }  

$total = count($var);
for ($i = 0; $i < $total; $i++) {
    echo $var[$i];
    echo '<br>';
}
