<?php
    //public funciona em qualquer lugar 
    //private so conseguimos acessar dentro da classe
    //this fala agora para o metodo e permite porque esta dentro da clase
    class Pessoa{
        //Obejto Pessoa
        private $nome = '<hr> Felipe e um desenvolvedor <hr>';
        private $idade = '25';
        private $peso = '70kg';

        //Metodos
        public function crescer($nome){
            echo 'estou apreendendo a desenvolver aplicação WEB <br>';
            $this -> comer();
            $this -> $nome = $nome;
            return $this->nome;
        }
        private function comer(){
            echo 'estou comendo <br>';
        }

    }
    //Instanciar - Chamar
    $pessoa = new Pessoa;
    echo $pessoa -> crescer('a');
