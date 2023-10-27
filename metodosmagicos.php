<?php
    class Clase{
        private $nome;
        private $idade;

        public function __construct($nome,$idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
    }
    $teste = new Clase('felipe ',25);
    echo $teste->getNome();
    echo $teste->getIdade();