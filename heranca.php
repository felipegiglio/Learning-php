<?php 
     class filho{
        public function nomefilho(){
            echo 'Felipe <hr>';
            $this->filho1();
        }
        private function filho1(){
            echo 'Felipe3 <hr>';
        }
    }
    class mae extends filho{
        public function nome(){
            echo 'Lucelia <hr>';
        }       
        public function filho1e(){
            $this->nomefilho();
        }       
    }
    $mae = new mae; 
    // $filho = new filho; 
    $mae->filho1e();
?> 