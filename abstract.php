<?php 
    abstract class Teste{
        public function funcao(){
            echo 'chamado';
        }
        
    }
    class Principal extends Teste{

    }

    $pricipal = new Principal;
    $pricipal-> funcao();