<?php
    //public funciona em qualquer lugar 
    //private so conseguimos acessar dentro da classe
    //this fala agora para o metodo e permite porque esta dentro da clase
    class Pessoa{
        //Obejto Pessoa
        private $nome = 'Felipe';
        private $idade = '25';
        private $peso = '70kg';

        //Metodos
        public function crescer(){
            echo 'estou apreendendo a desenvolver aplicação WEB <br>';
            $this -> comer();
        }
        private function comer(){
            echo 'estou comendo';
        }
    }
    //Instanciar - Chamar
    $pessoa = new Pessoa;
    $pessoa -> crescer();
