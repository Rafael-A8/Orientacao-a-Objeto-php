<?php

    class Pai {
        private $nome = 'Rafael';
        protected $sobrenome = 'Alvarino';
        public $humor = 'Feliz';

        // public function getNome() {
        //     return $this->nome;
        // }
        // //atualiza o getNome
        // public function setNome($value) {
        //     if(strlen($value) >= 3) {
        //         $this->nome = $value;
        //     }
        // }

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) 
        {
            $this->$attr =  $value;
        }

        private function axecutarmania() {
            echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            //se x for maior ou igual a 1 ou se for menor ou igual a 8
            if($x >= 1 && $x <= 8) {
                $this->responder();
            } else {
                $this->axecutarmania();
            }
            
        }

    }

    $pai = new Pai();
    //echo $pai->getNome();
    echo $pai->executarAcao();

?>