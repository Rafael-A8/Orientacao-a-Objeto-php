<?php 
    //objeto carro
    //filho e pai
    class Carro extends Veiculo {
        //Atributos
        //public $placa = 'ABC1234';
        //public $cor = 'Branco';
        public $teto_solar = true;
    
    //Metodos
    //$acelerar()
    //abrirTetoSolar()
    //alterarPosicaoVolante()

    // function acelerar() {
    //     echo 'Acelerar';
    // }

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar() {
        echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante() {
        echo 'Alterar posicao volante';
    }
} 
    //objeto Moto
    class Moto extends Veiculo {
        // public $placa = 'DEF1122';
        // public $cor = 'Preta';
        public $contraPesoGuidao = true;


    //Metodos/ações
    // function acelera() {
    //     echo 'Acelerar';
    // }

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar() {
        echo 'Empinar';
    }

    function trocarMarcha() {
        echo 'Desengatar Embreagem com a mão e engatar marcha com o pé';
    }


}

    class Veiculo {
        //atributo
        public $placa = null;
        public $cor = null;

        //metodo/ação
        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar Embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {

    }

//começando a estanciar

$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('JPQ1465', 'Vermelha');
$caminhao = new Caminhao();

$carro->trocarMarcha();
echo '<br />';
$moto->trocarMarcha();//Aqui aconteceu o polimorfismo. foi colocado o metodo trocarMarcha no objeto moto para assim fazer a modificação 
echo '<br />';
$caminhao->trocarMarcha();



?>