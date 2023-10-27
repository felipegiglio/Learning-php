<?php 
     class filho{
        public function nomefilho(){
            echo 'Felipe <hr>';
        }
    }
    class mae extends filho{
        public function nome(){
            echo 'Lucelia <hr>';
        }       
    }
    $mae = new mae; 
    // $filho = new filho; 
    $mae->nomefilho();
?> 