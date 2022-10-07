<?php

    //modelo
    class Funcionario {//escopo
        
        //atributo e uma abstração de oque e um funcionario do mundo real
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        //Colocar a primeira letra minusculo classifica o padrão de atributo do php


        //getters setters(overloading / sobrecargar)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
      
        //métodos
        //Métodos nas praticas são funções e eles representam os comportamentos que poderam ser executados na classe
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos(s)";
        }
        
        function modifcarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //variavel do objeto e variavel do método
        }


        
    }
    //para acessar atributos ou metodos usamos o token -> e na sequencia basta chamar o atributo ou o metodo
    $y = new Funcionario(); //estamos fazendo a estancia de um objeto com base no modelo funcionario
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    //echo $y->resumirCadFunc();

    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' Filhos(s)';
    
    echo '<br/>';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' Filhos(s)';
    
?>