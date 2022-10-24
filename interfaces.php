<?php
    interface EquipamentoEletronicoInterface {
        //nao e nessesario usar {}, porque abre e fecha chaves define um escopo.
        public function ligar();
        public function desligar();
    }

    //-------------------------------------------

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }

        public function ligar() {
            echo 'ligar';
        }
        public function desligar() {
            echo 'desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar Canal';
       }

        public function ligar() {
        echo 'ligar';
        }
        public function desligar() {
            echo 'desligar';
        }
        }

    // $x = new Geladeira();
    // $y = new TV();
    // */


    //-----------------------------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function conversar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'andar';
        }
        public function respirar() {
            echo 'andar';
        }
        public function conversar() {
            echo 'Conversar';
        }
    }

    class Baleia implements MamiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'andar';
        }
        public function respirar() {
            echo 'andar';
        }
        protected function esquichar() {
            echo 'Esquichar';
        }
    }

    //-----------------------------------------

    interface AnimalInterface {
        public function comer();
    }
    interface AveInterface extends AnimalInterface{
        public function Voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voar';
        }
        public function comer() {
            echo 'Comer';
        }
    }