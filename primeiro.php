<?php
    class Pessoa{
        //Obejto Pessoa
        private $nome = 'Felipe';
        private $idade = '25';
        private $peso = '70kg';

        //Metodos
        public function crescer(){
            echo 'estou apreendendo a desenvolver aplicação WEB';
        }
        private function comer(){
            echo 'estou comendo';
        }
    }
    //Instanciar - Chamar
    $pessoa = new Pessoa;
    $pessoa -> crescer();
