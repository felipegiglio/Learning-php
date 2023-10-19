<?php
    for($i=0;$i<10;$i++){
        if($i==5 || $i == 9)
        break;
        echo $i.'<br>';
        echo '<hr>';
    }
    for($i=0;$i<=10;$i++){
        if($i==5 || $i == 9)
        continue;
        echo $i;
    }