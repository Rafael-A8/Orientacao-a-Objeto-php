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
    }

//começando a estanciar

$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('JPQ1465', 'Vermelha');

echo '<pre>';
print_r($carro);
echo '<br />';
print_r($moto);
echo '</pre>';
echo '<hr />';
//$carro contem a estancia do objeto carro  esta relacionando com abrir telo solar
$carro->abrirTetoSolar();
echo '<br />';
$carro->acelerar();//esse metodo esta sendo herdado da class veiculo
echo '<br />';
$carro->freiar();//esse metodo esta sendo herdado da class veiculo

echo '<hr />';

$moto->empinar();
echo '<br />';
$moto->acelerar();//esse metodo esta sendo herdado da class veiculo
echo '<br />';
$moto->freiar();//esse metodo esta sendo herdado da class veiculo


?>