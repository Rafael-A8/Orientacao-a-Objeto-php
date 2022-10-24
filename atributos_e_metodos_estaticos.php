<?php


    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um é';
        }

        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    //quando uma classe e definida nos precisamos usar o operador new para estancia dessa classe por entanto um objeto.
    //e na sequencia associar esse objeto a uma variavel;
    //Nesse caso oque estamos fazendo e estanciando um objeto, com base no nosso modelo;
    //Com a estancia do objeto nos temos acesso a seus respequitivos atributos e metodos
    // :: operador de resolução de escopo
    // $x = new Exemplo();

    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metodo1();
