<?php

    class Pai {
        private $nome = 'Rafael';
        protected $sobrenome = 'Alvarino';
        public $humor = 'Feliz';

        /*
        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) 
        {
            $this->$attr =  $value;
        }
        */

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

    class Filho extends Pai {
        /*
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
        */

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) 
        {
            $this->$attr =  $value;
        }

    }
    /*
    $pai = new Pai();
    //echo $pai->getNome();
    echo $pai->executarAcao();
    */
    //criar variavel filho e a ela uma estancia de filho.
    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '<pre>';

    /*
    $filho->setAtributo('humor', 'triste');
    echo '<br/ >';
    echo $filho->getAtributo('humor');
    */

    //exibir os métodos do objeto
    echo '<pre>';
    print_r (get_class_methods($filho ));
    echo '<pre>';

    echo $filho->__get('nome');
    $filho->__set('nome', 'Lucas');
    echo '<br/ >';
    echo $filho->__get('nome');

    echo '<pre>';
    print_r($filho);
    echo '<pre>';
?>